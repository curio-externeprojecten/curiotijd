<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaderboardController extends Controller
{
    public function index(){    
        $students = \App\Models\Student::withCount('achievements')
                    ->orderBy('achievements_count', 'desc')
                    ->limit(10)
                    ->get();
        return view('leaderboard.index' , ['students' => $students]);


    }
}

