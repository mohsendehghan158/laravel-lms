<?php
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
//        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'admin']);

        // create demo users
        $user = Factory(App\Models\User::class)->create([
            'name' => 'Mohsen Dehghan',
            'email' => 'mdmanshadi158@gmail.com',
            'password' => 123
        ]);
        $user->assignRole($role1);
    }
}