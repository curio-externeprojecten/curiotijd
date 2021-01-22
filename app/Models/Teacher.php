<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $table = 'teachers';
    public $timestamps = false;
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    
    protected $fillable = [
        'first_name',
        'last_name',
        'user_id',
        'created_at',
        'updated_at'
    ];

    public function user(){
        return $this->hasOne('\App\Models\User', 'user_id');
    }

}
