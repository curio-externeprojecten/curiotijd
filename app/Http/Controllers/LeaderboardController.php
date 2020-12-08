<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaderboardController extends Controller
{
    public function index(){
        $students = \DB::table('students')->take(10)->get();
        // $achievements = \DB::table('achievements')->orderBy('id', 'DESC');
        return view('leaderboard.index' , ['students' => $students]);
    }
}

