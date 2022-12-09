<button {{ $attributes->merge(['type' => 'button', 'class' => 'items-center px-5 py-3 bg-indigo-500 hover:bg-indigo-700 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:text-white focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-indigo-700 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
