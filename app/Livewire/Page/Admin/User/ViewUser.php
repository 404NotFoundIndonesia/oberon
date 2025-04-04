<?php

namespace App\Livewire\Page\Admin\User;

use Livewire\Component;
use App\Models\User;

class ViewUser extends Component
{
    public function render()
    {
        return view('livewire.page.admin.user.view-user',[
            'users' => User::all()
        ]);
    }
}
