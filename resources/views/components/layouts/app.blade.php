<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') . ' - ' . $title }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">


    <!-- Styles -->
    @livewireStyles

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-white">
    <div class="flex h-screen text-base ">
       
        <x-layouts.sidebar />
        <div class="w-full">
            @include('components.layouts.topbar')
            <div class="overflow-auto h-[89%]">
                {{ $slot }}
            </div>
        </div>

    </div>
    @stack('modals')

    @livewireScripts
    

    @yield('js')
    {{-- alerta para registros exitos desde un mensaje de secion controlador --}}
    @if (session('success'))
    <script>
        Swal.fire({
            title:'Excelente',
            icon: 'success',
            text: '{{session('success')}}' ,
            confirmButtonText: 'Gracias',
        });
    </script>   
    @endif
    {{-- alerta para registros exitos desde un componente livewire emitiendo un evento llamado alert --}}
    <script>
        livewire.on('alert', function(message) {
            Swal.fire({
                title:'Excelente',
                icon: 'success',
                text: message,
                confirmButtonText: 'Gracias',
            })
        })
    </script>
     {{-- alerta para confirmar eliminacion cualquier dato desde cualquier lista agregando la clase form-delete  --}}
    <script>
        $('.form-delete').submit(function(event){
            event.preventDefault();
            Swal.fire({
                title: 'Estas seguro que vas a elimiar?',
                text: "Este proceso no se puede revertir!",
                icon: 'warning',
                showCancelButton: true,
                cancelButtonText:'Cancelar',
                confirmButtonColor: '#005eb3',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Eliminar!'
                }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
                })
        })
    </script>

    
</body>

</html>
