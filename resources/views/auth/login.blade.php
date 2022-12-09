<x-guest-layout>

    {{-- <div class="flex h-screen justify-center items-center w-2/3 mx-auto "> --}}
        <div class="bg-white-400 w-1/2 hidden rounded-l-xl h-3/4 items-center sm:block ">
            <img class="px-10 mt-32 mb-6" src="{{ asset('images/truckGMT.svg')}}" alt="">
            <h6 class="mx-auto text-white-500 text-2xl text-center font-jose font-normal">Plataforma interna de GMT Carga<br> transportes logisticos</h6>
        </div>
        <div class="m-auto py-5 px-10 w-1/2 h-3/4 bg-white-700 rounded-r-xl">
            <x-jet-authentication-card>
                <x-slot name="logo">
                    <x-jet-authentication-card-logo />
                </x-slot>
                <x-jet-validation-errors class="mb-4" />
        
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
        
                <form method="POST" action="{{ route('login') }}">
                    @csrf
        
                    <div>
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </div>
        
                    <div class="mt-4">
                        <x-jet-label for="password" value="{{ __('Password') }}" />
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    </div>
        
                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-jet-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 font-jose text-sm text-gray-200">{{ __('Remember me') }}</span>
                        </label>
                    </div>
        
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm font-jose text-white hover:text-cyan-300" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
        
                        <x-jet-button class="ml-4">
                            {{ __('Log in') }}
                        </x-jet-button>
                    </div>
                </form>
            </x-jet-authentication-card>
        </div>
    {{-- </div> --}}

</x-guest-layout>
