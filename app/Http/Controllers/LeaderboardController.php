<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaderboardController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function show(){    
        $students = \App\Models\Student::withCount('achievements')
                    ->orderBy('achievements_count', 'desc')
                    ->limit(5)
                    ->get();
        return view('leaderboard.index' , ['students' => $students]);


    }
}

