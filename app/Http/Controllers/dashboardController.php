<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function show($id){
        $student = \DB::table('students')
        ->where('students.user_id', $id)
        ->join('classes', 'students.classes_id', '=', 'classes.id')
        ->select('students.*','classes.*', 'classes.name')
        ->first();

        
        return view('student.index', ['student' => $student]);
    }
}

