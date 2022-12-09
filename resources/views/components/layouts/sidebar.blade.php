<section 
class="bg-indigo-800 w-80  border-r-2 
        border-solid border-indigo-800 shadow-lg 
        shadow-indigo-900">
    <div class="shadow-lg shadow-blue-900 ">
        {{-- este es el logo que se esta mostrando --}}
        <div class="items-center border border-indigo-900 bg-indigo-900 ">
            <a class="" href="{{ route('dashboard') }}">
                <img class=" m-auto w-44 my-10" src="{{ asset('images/gmt20.png') }}" alt="">
            </a>
        </div>
    </div>
    <div class="p-3">
        <h6 class="font-bold py-5 text-gray-400">Configuraciones</h6>
        <ul class="pl-2">
            <li class="flex text-white">
                <a class="flex" href=" {{ route('dashboard') }} ">
                    <div class="py-2 mr-2 rounded-lg">
                        <svg class="stroke-white" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 12L5 10M5 10L12 3L19 10M5 10V20C5 20.5523 5.44772 21 6 21H9M19 10L21 12M19 10V20C19 20.5523 18.5523 21 18 21H15M9 21C9.55228 21 10 20.5523 10 20V16C10 15.4477 10.4477 15 11 15H13C13.5523 15 14 15.4477 14 16V20C14 20.5523 14.4477 21 15 21M9 21H15"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <span class="self-center align-middle active:text-white">
                        {{ __('Dashboard') }}
                    </span> 
                </a>    
            </li>
         
           
            <li class="flex mb-2 text-white">
                <a class="flex" href=" {{ route('compliments.index') }} ">
                    <div class="py-2 mr-2 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                          </svg>
                    </div>
                    <span class="self-center">
                        {{ __('Cumplidos y Consultas') }}
                    </span> 
                </a>    
            </li>
            <li class="flex mb-2 text-white">
                <a class="flex" href=" {{ route('admin.roles.index') }} ">
                    <div class="py-2 mr-2 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                          </svg>
                    </div>
                    <span class="self-center">
                        {{ __('Roles y Permisos') }}
                    </span> 
                </a>    
            </li>
            <li class="flex mb-2 text-white">
                <a class="flex" href=" {{ route('admin.user.index') }} ">
                    <div class="py-2 mr-2 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <span class="self-center">
                        {{ __('Usuarios') }}
                    </span> 
                </a>    
            </li>
        </ul>
    </div>
</section>