<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaderboardController extends Controller
{
    public function index(){
        $students = \DB::table('students')->get();
        return view('leaderboard.index' , ['students' => $students]);
    }
}

