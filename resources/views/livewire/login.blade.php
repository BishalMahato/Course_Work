<div class="bg-slate-900 text-white min-h-screen flex items-center justify-center">
    <!-- Login Form -->
    <div class="bg-slate-800 shadow-lg rounded-lg p-8 max-w-md w-full space-y-6">
        <h2 class="text-2xl font-bold text-center text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-400">
            Login to Your Account
        </h2>

        <!-- Error Message Section -->
        @if(session('error'))
        <div class="bg-red-500 text-white px-4 py-2 rounded-md text-sm">
            {{ session('error') }}
        </div>
        @endif

        <!-- Form -->
        <form wire:submit.prevent="login" class="space-y-4">
            <!-- Email Field -->
            <div>
                <label for="email" class="block text-sm font-medium text-slate-300">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" wire:model="email"
                    class="mt-1 block w-full px-3 py-2 border border-slate-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm bg-slate-700 text-white">
            </div>

            <!-- Password Field -->
            <div>
                <label for="password" class="block text-sm font-medium text-slate-300">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" wire:model="password"
                    class="mt-1 block w-full px-3 py-2 border border-slate-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm bg-slate-700 text-white">
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Login
                </button>
            </div>
        </form>

        <!-- Register Link -->
        <p class="text-center text-sm text-slate-400">
            Don't have an account?
            <a href="{{ route('register') }}" class="font-medium text-blue-400 hover:text-blue-300">
                Register here
            </a>
        </p>
    </div>
</div>