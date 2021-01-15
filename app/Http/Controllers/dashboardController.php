<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
//    public function index(){
//        $students = \DB::table('students')->get();
//        return view('student.index' , ['students' => $students]);
//    }

    public function show($id){
        $student = \DB::table('students')
        ->where('students.id', $id)
        ->join('klassen', 'students.klas_id', '=', 'klassen.id')
        ->select('students.*','klassen.*', 'klassen.name')
        ->first();
        return view('student.index', ['student' => $student]);
    }
}

