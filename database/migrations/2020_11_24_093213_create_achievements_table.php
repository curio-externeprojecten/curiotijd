<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAchievementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('achievements', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('achievement_id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('teacher_id');

            $table->foreign('student_id')
                    ->references('id')
                    ->on('students');

            $table->foreign('teacher_id')
                    ->references('id')
                    ->on('teachers'); 

            $table->foreign('achievement_id')
                    ->references('id')
                    ->on('challenges');
            $table->foreign('achievement_id')
                    ->references('id')
                    ->on('badges');
            $table->foreign('achievement_id')
                    ->references('id')
                    ->on('competencies');                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('achievements');
    }
}
