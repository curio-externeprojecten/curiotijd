<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        \DB::table('classes')->insert([
            [
                'name' => "PA1B1",
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime
                
            ],
            [
                'name' => "PA1B2",
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime
                
            ],
            [
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
                'name' => "PA1B3"
            ],
            [
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
                'name' => "PA1B4"
            ],
            [
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
                'name' => "PA1K1"
            ],
            [
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
                'name' => "PA1K2"
            ],
            [
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
                'name' => "PA1G1"
            ],
            [
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
                'name' => "PA1G2"
            ],
            [
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
                'name' => "PA2B1"
            ],
            [
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
                'name' => "PA2B2"
            ],
            [
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
                'name' => "PA2K1"
            ],
            [
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
                'name' => "PA2K2"
            ],
            [
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
                'name' => "PA2G1"
            ],
            [
                'name' => "PA2G2",
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime
                
            ]
            ]);
    }

}