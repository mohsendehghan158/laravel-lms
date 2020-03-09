<?php

use App\Models\User;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    public function run()
    {
        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'admin']);

        // create demo users
        $user = User::find(1);
        $user->assignRole($role1);
    }
}