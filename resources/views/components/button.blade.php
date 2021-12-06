<button {{ $attributes->merge(['type' => 'submit', 'class' 
=> 'px-6 py-2 text-lg font-medium leading-5 text-center text-white transition-colors 
duration-150 bg-pink-700 border  rounded-lg active:bg-pink-600 
hover:bg-pink-900 focus:outline-none focus:ring border-pink-200']) }}>
    {{ $slot }}
</button>
