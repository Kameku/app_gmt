<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-6 py-4 bg-sky-500 border border-transparent rounded-md font-jose font-semibold text-xs text-white uppercase tracking-widest hover:bg-sky-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
