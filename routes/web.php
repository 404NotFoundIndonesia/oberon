<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LogoutController;
use App\Livewire\Counter;
use App\Livewire\Auth\Login;
use App\Livewire\Page\Dashboard;
use App\Livewire\Page\Landing;
use App\Livewire\Page\Admin;

Route::get('/', Landing::class);
Route::get('/counter', Counter::class);
Route::get('/login', Login::class)->name('login')->middleware('guest');
Route::get('/admin', Admin::class)->middleware('auth');
Route::get('/dashboard', Dashboard::class)->middleware('auth');
Route::post('/logout', [LogoutController::class, 'logout'])->middleware('auth')->name('logout');