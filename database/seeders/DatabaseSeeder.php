<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $usuario=new User();
        // $usuario -> name="Administrador Reparapp";
        // $usuario -> email="admin@gmail.com";
        // $usuario -> password= bcrypt("12345678");

        // $usuario -> save();

        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        
        // \App\Models\User::factory(10)->create();
    }
}
