<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App GMT</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    @livewireStyles

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .imagen{
            background-image: url('{{ asset('images/welcome.jpg') }}');
        } 
    </style>
</head>
<body class="imagen bg-no-repeat bg-cover">
        <div class="w-full bg-gray-100 bg-opacity-90">
            @include('components.layouts.topbarGuest')
                {{ $slot }}
        </div>
    @livewireScripts
    @yield('js')
</body>
</html>