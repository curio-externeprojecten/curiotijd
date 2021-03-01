<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $allClasses = ['PA1B1', 'PA1B2', 'PA1B3', 'PA1B4', 'PA1K1', 'PA1K2', 'PA1G1', 'PA1G2', 'PA2B1', 'PA2B2', 'PA2K1', 'PA2K2', 'PA2G1', 'PA2G2'];
        $classIds = [];

        foreach($allClasses as $class){
            $classIds[] = DB::table('klassen')->insertGetId(
                array(
                    'created_at' => now(),
                    'updated_at' => now(),
                    'name' => $class
                )
            );
        }

        $numStudents = 50;

        for ($i = 0; $i < $numStudents; $i++){
            $firstName = $faker->firstName();
            $lastName = $faker->lastName;
            $fullName = "$firstName $lastName";
            $email = str_replace(' ', '.', strtolower($fullName)) . '@email.example';

            $id = DB::table('users')->insertGetId([
                'name' => $fullName,
                'email' => $email,
                'password' => bcrypt('password'),
            ]);

        	\App\Models\Student::insert([
        		'first_name' 		=> $firstName,
        		'last_name' 		=> $lastName,
        		'student_number' 	=> 2000 + $i,
        		'klas_id'			=> $classIds[array_rand($classIds)],
        		'user_id'			=> $id
        	]);
        }
    }
}
