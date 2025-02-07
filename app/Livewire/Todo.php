<?php

namespace App\Livewire;

use App\Models\task;
use Auth;
use Livewire\Component;

class Todo extends Component
{
    public $title;
    public $description;
    public function render()
    {

        $todos = Task::where('user_id', Auth::id())->get();
        return view('livewire.todo')->with("todos", $todos)->layout("layouts.layout");
    }

    public function createTodo(){
        $validatedData = $this->validate([
            'title' => 'required|string',
            'description' => 'string|nullable',
        ]);
        
        $newTask = Task::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'user_id' => Auth::id(), 
        ]);
        
        session()->flash('message', 'Task created successfully!');
        
    }

    public function markComplete($todoId)
    {
        $todo = Task::find($todoId);
        $todo->isCompleted = !$todo->isCompleted;
        $todo->save();

        // Refresh the todos list
        $this->todos = Task::all();
    }
}
