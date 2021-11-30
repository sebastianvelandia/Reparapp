<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrador Reparapp',
            'email' => 'admin@gmail.com',
            'password' => bcrypt("12345678")
        ])->assignRole('Admin');

        User::create([
            'name' => 'Juan Velandia',
            'email' => 'agente@gmail.com',
            'password' => bcrypt("12345678")
        ])->assignRole('Agente');

        User::create([
            'name' => 'Stiven Alvarez',
            'email' => 'tecnico@gmail.com',
            'password' => bcrypt("12345678")
        ])->assignRole('Tecnico');

        User::create([
            'name' => 'Lissette Quebrada',
            'email' => 'operador@gmail.com',
            'password' => bcrypt("12345678")
        ])->assignRole('Operador');
    }
}
