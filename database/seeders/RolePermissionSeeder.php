<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        // Create roles
        $adminRole = Role::create(['name' => 'Admin']);
        $userRole = Role::create(['name' => 'User']);
        
        // Create permissions and associate them with roles
        Permission::create(['name' => 'manage_users', 'role_id' => $adminRole->id]);
        Permission::create(['name' => 'view_dashboard', 'role_id' => $userRole->id]);
    }
}
