<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::Create();

        for ($i = 0; $i < 50; $i++){
        	\App\Models\Student::insert([
        		'first_name' 		=> $faker->name,
        		'last_name' 		=> $faker->name,
        		'student_number' 	=> 69,
        		'created_at'		=> now(),
        		'klas_id'			=> 1,
        		'user_id'			=> 1
        	]);
        }
    }
}
