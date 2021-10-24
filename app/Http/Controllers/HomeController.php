<?php

namespace App\Http\Controllers;

use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $topStudents = User::select('name')
            ->withAvg('grades', 'grade')
            ->withCount('grades')
            ->having('grades_count', '>', 5)
            ->orderBy('grades_avg_grade', 'desc')
            ->take(10)
            ->get();

        $topTeachers = User::select('name')
            ->withAvg('ratings', 'rating')
            ->withCount('ratings')
            ->orderBy('ratings_avg_rating', 'desc')
            ->take(10)
            ->get();

        return view('dashboard', compact('topTeachers', 'topStudents'));
    }
}
