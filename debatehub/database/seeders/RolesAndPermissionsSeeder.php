<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // create permissions
        Permission::create(['name' => 'edit debates']);
        Permission::create(['name' => 'delete debates']);
        Permission::create(['name' => 'publish debates']);
        Permission::create(['name' => 'unpublish debates']);

        // create roles and assign created permissions

        // this can be done as separate statements
        $role = Role::create(['name' => 'tab-master']);
        $role->givePermissionTo('edit debates');

        // or may be done by chaining
        $role = Role::create(['name' => 'moderator'])
            ->givePermissionTo(['publish debates', 'unpublish debates']);

        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());

        // make jordankatetegirwe@gmail.com super-admin
        // $superAdminUser = User::where('email', 'jordankatetegirwe@gmail.com')->first();

        // if ($superAdminUser) {
        //     $superAdminUser->assignRole('super-admin', null);
        // }

    }
}
