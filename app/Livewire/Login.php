<?php

namespace App\Livewire;

use App\Models\User;
use Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public function render()
    {
        return view('livewire.login')->layout("layouts.layout");
    }


    public function login(){
        $validatedData = $this->validate([
            "email"=> "required|string|email",
            "password"=>"required|string"
        ]);

        $user = User::where('email', $this->email)->first();
        if(!$user){
            session()->flash("error", "User not found!!");
            return redirect()->back();
        }

        if($user->password != $this->password){
            session()->flash("error", "Invalid password!!");
            return redirect()->back();

        }

        Auth::login($user);
        return redirect('/');
    }
}
