<button {{ $attributes->merge(['type' => 'submit', 'class' 
=> 'px-6 py-2 text-lg font-medium leading-5 text-center text-black transition-colors 
duration-150 bg-yellow-300 border border-transparent rounded-lg active:bg-yellow-600 
hover:bg-yellow-400 focus:outline-none focus:ring']) }}>
    {{ $slot }}
</button>
