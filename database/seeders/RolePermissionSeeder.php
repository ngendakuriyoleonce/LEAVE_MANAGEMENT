<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        // Clear cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Define permissions
        
$permissions = [
    'apply leave',
    'view own leave',
    'cancel own leave',

    'view team leaves',
    'approve team leave',
    'reject team leave',

    'view all leaves',
    'approve all leaves',
    'reject all leaves',

    'manage employees',
    'manage leave types',
    'manage roles',
    'view reports',
    'manage settings',
];

foreach ($permissions as $permission) {
    Permission::firstOrCreate(['name' => $permission]);
}

       // Create Roles
$admin = Role::firstOrCreate(['name' => 'Admin']);
$hr = Role::firstOrCreate(['name' => 'HR']);
$manager = Role::firstOrCreate(['name' => 'Manager']);
$employee = Role::firstOrCreate(['name' => 'Employee']);


// Assign Permissions

// Admin => all permissions
$admin->givePermissionTo(Permission::all());


// HR permissions
$hr->givePermissionTo([
    'view all leaves',
    'approve all leaves',
    'reject all leaves',
    'manage employees',
    'manage leave types',
    'view reports',
]);


// Manager permissions
$manager->givePermissionTo([
    'view team leaves',
    'approve team leave',
    'reject team leave',
]);


// Employee permissions
$employee->givePermissionTo([
    'apply leave',
    'view own leave',
    'cancel own leave',
]);
    }
}