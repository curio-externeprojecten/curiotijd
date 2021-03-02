<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $fillable = ['first_name', 'last_name', 'student_number', 'classes_id', 'user_id'];


    public function klas(){
    	return $this->hasOne('\App\Models\Klas', 'classes_id');
    }

    public function user(){
    	return $this->hasOne('\App\Models\User', 'user_id');
    }

    public function achievements(){
        return $this->hasMany('\App\Models\Achievement', 'student_id');
    }
}
