<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::Create();
        for ($i = 0; $i < 25; $i++){
        	\App\Models\Teacher::insert([
                'first_name' 		=> $faker->firstName,
                'last_name' 		=> $faker->lastName,
                'user_id'			=> $faker->unique()->numberBetween(1, 25),
                'created_at' 		=> $faker->dateTime,
                'updated_at' 		=> $faker->dateTime
        	]);
        }
    }
}