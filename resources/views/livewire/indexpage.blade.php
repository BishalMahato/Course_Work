<div>

    <section class="flex-grow bg-slate-900 py-20 h-[85vh]">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-5xl font-bold mb-4 text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-400">
                Welcome to Your To-Do List
            </h1>
            <p class="text-xl text-slate-400 mb-8">
                Stay organized and productive with our sleek To-Do app.
            </p>
           @if(Auth::check()){
            <a href={{route("todo")}} class="bg-blue-600 no-underline text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-700 transition duration-300">
                Create Todo
            </a>
           }
           @else{
            <button class="bg-blue-600 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-700 transition duration-300">
                Get Started
            </button>
           }
           @endif
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="bg-slate-800 py-6">
        <div class="container mx-auto px-6 text-center text-slate-400">
            &copy; 2023 To-Do App. All rights reserved.
        </div>
    </footer>
</div>