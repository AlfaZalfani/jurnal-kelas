<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Default Role
        $admin = Role::create(['name' => 'admin']);

        // Insert all permissions to admin role
        foreach (__('permission') as $permission => $translate) {
            Permission::create(
                ['guard_name' => 'web', 'name' => $permission]
            );
            $admin->givePermissionTo($permission);
        }

        $user = User::findOrFail(1);
        $user->assignRole($admin);
    }
}
