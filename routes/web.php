<?php

use App\Livewire\Indexpage;
use App\Livewire\Login;
use App\Livewire\Register;
use App\Livewire\Todo;
use Illuminate\Support\Facades\Route;

Route::get("/", Indexpage::class)->name("homepage");
Route::get("/login", Login::class)->name("login");
Route::get("/register", Register::class)->name("register");
Route::get('/todo', Todo::class)->name('todo')->middleware('auth');