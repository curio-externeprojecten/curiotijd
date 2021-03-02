<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::Create();
        for ($i = 0; $i < 75; $i++){
        	\App\Models\Users::insert([
        		'first_name' 		=> $faker->firstName,
                'last_name' 		=> $faker->lastName,
                'email' 		    => $faker->email,
                'email_verified_at' => null,
                'password' 		    => Hash::make($faker->password),
                'created_at' 		=> $faker->dateTime,
                'updated_at' 		=> $faker->dateTime,
                'admin' 		    => null
        	]);
        }
    }
}
