<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*
        $faker = Faker::create('es_Es');
        foreach (range(1, 100) as $index) {
            DB::table('products')->insert([
                'name' => $faker->text(40),
                'description' => $faker->paragraph,
                'price' => $faker->numberBetween(100, 1000),
                'image' => $faker->imageUrl(300, 300),
            ]);
        }
        */
    }
}
