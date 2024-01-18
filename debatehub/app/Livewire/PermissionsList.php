<?php

namespace App\Livewire;

use Livewire\Component;

class PermissionsList extends Component
{
    public function render()
    {
        return view('livewire.permissions-list')
            ->layout('layouts.main_components.users')
        ;
    }
}
