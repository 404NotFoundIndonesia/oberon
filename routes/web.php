<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Page\Landing;
use App\Livewire\Page\Login;
use App\Livewire\Page\Admin;

Route::get('/', Landing::class);
Route::get('/about', Landing::class);
Route::get('/contact', Counter::class);
Route::get('/login', Login::class);
Route::get('/admin', Admin::class);