<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index(){
        $students = \DB::table('students')->get();
        return view('student.index' , ['students' => $students]);
    }
}
