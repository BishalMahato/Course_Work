<nav class="bg-slate-800 shadow-md py-4 dark:bg-slate-900">
    <div class="container mx-auto px-6 flex justify-between items-center">
        <!-- Logo -->
        <a href="{{ route('homepage') }}">
            <div class="text-lg font-bold text-white dark:text-slate-200">Todo App</div>
        </a>

        <!-- Desktop Menu -->
        <div class="hidden md:flex space-x-4">
            @if (Auth::check())
                <span class="text-slate-300 dark:text-slate-400">Hello, {{ Auth::user()->name }}</span>
                <button wire:click="logout" class="bg-red-500 text-white px-3 py-2 rounded hover:bg-red-600">
                    Logout
                </button>
            @else
                <a href="{{ route('login') }}" class="text-blue-400 dark:text-blue-300 px-3 py-2 hover:text-blue-500">
                    Login
                </a>
                <a href="{{ route('register') }}" class="bg-blue-500 text-white px-3 py-2 rounded hover:bg-blue-600">
                    Register
                </a>
            @endif
        </div>

        <!-- Mobile Menu Toggle -->
        <div class="md:hidden">
            <button id="menu-toggle" class="text-slate-300 dark:text-slate-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden px-6 bg-slate-800 dark:bg-slate-900">
        @if (Auth::check())
            <span class="block py-2 text-slate-300 dark:text-slate-400">Hello, {{ Auth::user()->name }}</span>
            <button wire:click="logout" class="block w-full text-left bg-red-500 text-white px-3 py-2 rounded hover:bg-red-600">
                Logout
            </button>
        @else
            <a href="{{ route('login') }}" class="block py-2 text-blue-400 dark:text-blue-300 hover:text-blue-500">
                Login
            </a>
            <a href="{{ route('register') }}" class="block bg-blue-500 text-white px-3 py-2 rounded hover:bg-blue-600">
                Register
            </a>
        @endif
    </div>
</nav>

<script>
    document.getElementById('menu-toggle').addEventListener('click', function () {
        var menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>