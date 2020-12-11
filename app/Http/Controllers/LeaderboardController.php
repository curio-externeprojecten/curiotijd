<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaderboardController extends Controller
{
    public function index(){    
        $students = \App\Models\Student::withCount('achievements')
                    ->orderBy('achievements_count', 'desc')
                    ->get();
        return view('leaderboard.index' , ['students' => $students]);


    }
}

