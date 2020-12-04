<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
   // public function index(){
       // $students = \DB::table('students')->get();
      //  return view('student.index' , ['students' => $students]);
   // }

    public function show($id){
        $student = \DB::table('students')->where('id', $id)->first();
        return view('student.index', ['student' => $student]);
    }
}
