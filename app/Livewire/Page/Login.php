<?php

namespace App\Livewire\Page;

use Livewire\Component;

class Login extends Component
{
    public $title = 'Login';
    public function render()
    {
        return view('livewire.page.login');
    }
}
