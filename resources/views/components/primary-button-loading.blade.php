<button disabled {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-yellow-600 dark:bg-yellow-200 border border-transparent rounded-md font-semi-bold text-xs text-white dark:text-yellow-500 uppercase tracking-widest hover:bg-yellow-600 dark:hover:bg-white focus:bg-yellow-600 dark:focus:bg-white active:bg-yellow-600 dark:active:bg-yellow-600  focus:outline-none focus:ring-2 focus:ring-yellow-600 focus:ring-offset-2 dark:focus:ring-offset-yellow-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
