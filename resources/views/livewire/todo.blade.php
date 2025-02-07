<div class="bg-slate-900 text-white min-h-screen p-8">
    <div class="max-w-2xl mx-auto bg-slate-800 rounded-lg shadow-lg p-6 space-y-6">

        <!-- Add Todo Form -->
        <form wire:submit.prevent="createTodo" class="space-y-4">
            <h2 class="text-xl font-bold text-center text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-400">
                Add a New Todo
            </h2>

            <!-- Title Field -->
            <div>
                <label for="title" class="block text-sm font-medium text-slate-300">Title</label>
                <input type="text" id="title" wire:model="title"
                    class="mt-1 block w-full px-3 py-2 border border-slate-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm bg-slate-700 text-white">
                @error('title')
                <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Description Field -->
            <div>
                <label for="description" class="block text-sm font-medium text-slate-300">Description</label>
                <textarea id="description" wire:model="description" rows="3"
                    class="mt-1 block w-full px-3 py-2 border border-slate-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm bg-slate-700 text-white"></textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Add Todo
            </button>
        </form>

        <!-- List Todos -->
        <div>
            <h2 class="text-xl font-bold text-center text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-400">
                Your Todos
            </h2>

            @if($todos->isEmpty())
            <p class="text-center text-slate-400">No todos found. Add one above!</p>
            @else
            <ul class="space-y-4 mt-4">
                @foreach($todos as $todo)
                <li class="flex items-center justify-between px-4 py-2 bg-slate-700 rounded-md">
                    <!-- Todo Content -->
                    <div>
                        @if(!$todo->isCompleted )
                            <p class="{{ $todo->isCompleted ? 'line-through text-slate-500' : 'text-white' }}">
                                {{ $todo->title }}
                            </p>
                        @else
                            <p class="{{ $todo->isCompleted ? 'line-through text-slate-500' : 'text-white' }}">
                                <del>{{ $todo->title }}</del>
                            </p>
                        
                        @endif
                        @if($todo->description)
                        <p class="text-sm text-slate-400">{{ $todo->description }}</p>
                        @endif
                    </div>

                    <!-- Checkbox to Mark Complete -->
                    <input type="checkbox" wire:click="markComplete({{ $todo->id }})" 
                        class="w-6 h-6 rounded border-slate-600 text-blue-500 focus:ring-blue-500 transition duration-300 ease-in-out transform hover:scale-110"
                        {{ $todo->isCompleted ? 'checked' : '' }}>
                </li>
                @endforeach
            </ul>
            @endif
        </div>
    </div>
</div>