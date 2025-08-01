<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AssignPermissionToSuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          $permissions = Permission::all();
        $role = Role::where('name', 'Super Admin')->first();
        $role->syncPermissions($permissions);
    }
}
