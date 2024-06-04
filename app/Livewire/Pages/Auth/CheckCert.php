<?php

namespace App\Livewire\Pages\Auth;

use Livewire\Component;

class CheckCert extends Component
{
    public function render()
    {
        return view('livewire.pages.auth.check-cert')->layout('components.layouts.auth');
    }
}
