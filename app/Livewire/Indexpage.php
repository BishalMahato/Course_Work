<?php

namespace App\Livewire;

use Livewire\Component;

class Indexpage extends Component
{
    public function render()
    {
        return view('livewire.indexpage')->layout("layouts.layout");
    }
}
