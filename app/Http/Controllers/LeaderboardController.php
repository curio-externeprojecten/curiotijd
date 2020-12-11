<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaderboardController extends Controller
{
    public function index(){    
        $students = \App\Models\Student::with('achievements')->get();
        return view('leaderboard.index' , ['students' => $students]);


    }
}

