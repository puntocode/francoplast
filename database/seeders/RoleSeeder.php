<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::create(['name' => 'Admin']);
        $roleAuditor = Role::create(['name' => 'Vendedor']);

        Permission::create(['name' => 'dashboard'])->assignRole($roleAdmin);

        Permission::create(['name' => 'providers.index'])->assignRole($roleAdmin);
        Permission::create(['name' => 'providers.create'])->assignRole($roleAdmin);
        Permission::create(['name' => 'providers.edit'])->assignRole($roleAdmin);
        Permission::create(['name' => 'providers.update'])->assignRole($roleAdmin);
        Permission::create(['name' => 'providers.destroy'])->assignRole($roleAdmin);

        Permission::create(['name' => 'customers.index'])->assignRole($roleAdmin);
        Permission::create(['name' => 'customers.create'])->assignRole($roleAdmin);
        Permission::create(['name' => 'customers.edit'])->assignRole($roleAdmin);
        Permission::create(['name' => 'customers.update'])->assignRole($roleAdmin);
        Permission::create(['name' => 'customers.destroy'])->assignRole($roleAdmin);

        Permission::create(['name' => 'products.index'])->assignRole($roleAdmin);
        Permission::create(['name' => 'products.create'])->assignRole($roleAdmin);
        Permission::create(['name' => 'products.edit'])->assignRole($roleAdmin);
        Permission::create(['name' => 'products.update'])->assignRole($roleAdmin);
        Permission::create(['name' => 'products.destroy'])->assignRole($roleAdmin);

    }
}
