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
        $role2 = Role::create(['name' => 'Cliente']);

        Permission::create(['name' => 'agente.index'])->assignRole($role1);
        Permission::create(['name' => 'agente.create'])->assignRole($role1);
        Permission::create(['name' => 'agente.edit'])->assignRole($role1);
        Permission::create(['name' => 'agente.destroy'])->assignRole($role1);

        Permission::create(['name' => 'operador.index'])->assignRole($role1);
        Permission::create(['name' => 'operador.create'])->assignRole($role1);
        Permission::create(['name' => 'operador.edit'])->assignRole($role1);
        Permission::create(['name' => 'operador.destroy'])->assignRole($role1);

        Permission::create(['name' => 'tecnico.index'])->assignRole($role1);
        Permission::create(['name' => 'tecnico.create'])->assignRole($role1);
        Permission::create(['name' => 'tecnico.edit'])->assignRole($role1);
        Permission::create(['name' => 'tecnico.destroy'])->assignRole($role1);

        Permission::create(['name' => 'taller.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'taller.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'taller.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'taller.destroy'])->syncRoles([$role1,$role2]);
    }
}
