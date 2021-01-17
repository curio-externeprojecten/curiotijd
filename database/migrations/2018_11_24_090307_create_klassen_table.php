<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKlassenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klassen', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
        });

        $allClasses = ['PA1B1', 'PA1B2', 'PA1B3', 'PA1B4', 'PA1K1', 'PA1K2', 'PA1G1', 'PA1G2', 'PA2B1', 'PA2B2', 'PA2K1', 'PA2K2', 'PA2G1', 'PA2G2'];

        foreach($allClasses as $class){
            DB::table('klassen')->insert(
                array(
                    'created_at' => now(),
                    'updated_at' => now(),
                    'name' => $class
                )
            );
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('klassen');
    }
}
