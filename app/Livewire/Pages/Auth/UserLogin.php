<?php

namespace App\Livewire\Pages\Auth;

use Livewire\Component;

class UserLogin extends Component
{
    public function render()
    {
        return view('livewire.pages.auth.user-login')->layout('components.layouts.auth');
    }
}
