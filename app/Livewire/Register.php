<?php

namespace App\Livewire;

use App\Models\User;
use Auth;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public function render()
    {
        return view('livewire.register')->layout("layouts.layout");
    }



    public function submit()
{
    $validatedValues = $this->validate([
        'name' => 'required|string',
        'email' => 'required|email|string|unique:users,email',
        'password' => 'required|min:8|string'
    ]);

    
    $newUser = User::create($validatedValues);
    // Auth::login($newUser);



    session()->flash('message', 'Registration successful!');

    return redirect('/login');
}

}
