<?php

namespace App\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class NewRoleCard extends Component
{
    public $roleName;
    public $selectedPermissions = [];
    public $permissions;
    
    public function render()
    {
        $this->permissions = Permission::all();

        return view('livewire.new-role-card');
    }
}
