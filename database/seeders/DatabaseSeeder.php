<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $usuario=new User();
        $usuario -> name="Administrador Reparapp";
        $usuario -> email="admin@gmail.com";
        $usuario -> password="123456789";
        
        // \App\Models\User::factory(10)->create();
    }
}
