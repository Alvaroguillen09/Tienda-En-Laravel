<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //crea un faker para generar usuarios administradores 
        $faker = Faker::create('es_Es');
        foreach (range(1, 5) as $index) {
            DB::table('users')->insert([
                'name' => $faker->text(40),
                'email' => $faker->email,
                'password' => $faker->password,
                
            ]);
        }
    }
}
