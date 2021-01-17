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
        ->join('klassen', 'students.klas_id', '=', 'klassen.id')
        ->select('students.*','klassen.*', 'klassen.name')
        ->first();

        
        return view('student.index', ['student' => $student]);
    }
}

