<?php

namespace App\Livewire\Page;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Admin extends Component
{
    public function mount()
{
    if (Auth::user()->role !== 'admin') {
        return redirect('/');
    }
}
    public function render()
    {
        return view('livewire.page.admin');
    }
}
