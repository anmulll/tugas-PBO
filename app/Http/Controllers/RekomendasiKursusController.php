<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Course;
use App\Models\UserCourse;

class RekomendasiKursusController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Featured Courses
        //$featured = Course::where('is_featured', true)->take(3)->get();

        // Recommended Courses
        //$recommended = Course::inRandomOrder()->take(5)->get();

        // Last accessed courses
        //$lastCourses = UserCourse::with('course')
            //->where('user_id', $user->id)
            //->latest()
            //->take(2)
            //->get();

        // User statistics
        //$stats = [
            //'total_courses' => UserCourse::where('user_id', $user->id)->count(),
            //'study_hours'   => UserCourse::where('user_id', $user->id)->sum('hours'),
            //'finished'      => UserCourse::where('user_id', $user->id)->where('status', 'finished')->count(),
        //];

        return view('course.index');
    }
}
