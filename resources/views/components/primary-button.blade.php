<button {{ $attributes->merge(['class' => 'inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-white text-sm uppercase tracking-widest hover:bg-indigo-500 focus:outline-none']) }}>
    {{ $slot }}
</button>
