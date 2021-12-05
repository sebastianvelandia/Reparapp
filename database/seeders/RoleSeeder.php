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
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Agente']);
        $role3 = Role::create(['name' => 'Tecnico']);
        $role4 = Role::create(['name' => 'Operador']);

        Permission::create(['name' => 'user.index'])->assignRole($role1);
        Permission::create(['name' => 'user.edit'])->assignRole($role1);
        Permission::create(['name' => 'user.update'])->assignRole($role1);

        Permission::create(['name' => 'taller.index'])->assignRole($role1);
        Permission::create(['name' => 'taller.create'])->assignRole($role1);
        Permission::create(['name' => 'taller.edit'])->assignRole($role1);
        Permission::create(['name' => 'taller.destroy'])->assignRole($role1);

        Permission::create(['name' => 'callcenter.index'])->assignRole($role1);
        Permission::create(['name' => 'callcenter.create'])->assignRole($role1);
        Permission::create(['name' => 'callcenter.edit'])->assignRole($role1);
        Permission::create(['name' => 'callcenter.destroy'])->assignRole($role1);

        Permission::create(['name' => 'orden.index'])->syncRoles([$role1,$role2,$role3,$role4]);
        Permission::create(['name' => 'orden.create'])->syncRoles([$role1,$role2,$role4]);
        Permission::create(['name' => 'orden.edit'])->syncRoles([$role1,$role2,$role4]);
        Permission::create(['name' => 'orden.destroy'])->syncRoles([$role1,$role2,$role4]);

    }
}
