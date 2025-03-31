<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Page\Landing;

Route::get('/', Landing::class);
Route::get('/about', Landing::class);
Route::get('/contact', Counter::class);