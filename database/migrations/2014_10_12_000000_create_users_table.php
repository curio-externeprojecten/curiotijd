<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->boolean('admin')->nullable();
        });
        // DB::table('users')->insert(
        //     array(
        //         'name' => 'superadmin',
        //         'email' => 'curiotijd@gmail.com',
        //         'email_verified_at' => now(),
        //         'password' => Hash::make(),
        //         'remember_token' => null,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //         'admin' => true
        //     )
        // );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
