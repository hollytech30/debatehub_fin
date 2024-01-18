<?php

namespace App\Livewire;

use Livewire\Component;

use Spatie\Permission\Models\Role;
// use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolesList extends Component
{
    public function render()
    {
        // Get all roles with their permissions
        $rolesWithPermissions = Role::with('permissions')->get();

        // Get the user count for each role
        $rolesWithUserCount = $rolesWithPermissions->map(function ($role) {
            $userCount = User::role($role->name)->count();
            $role->userCount = $userCount;
            return $role;
        });

        $roles =  $rolesWithUserCount;
        return view('livewire.roles-list',[
            'roles'=>$roles ,
        ])
            ->layout('layouts.main_components.users')
        ;
    }
}
