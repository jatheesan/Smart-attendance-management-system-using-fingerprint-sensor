<?php

namespace App\Http\Controllers;
use App\Lecturer;
use App\Http\Middleware\IsAssistantLecturers;

use Illuminate\Http\Request;

class Course_Assistant_LecturerController extends Controller
{
    public function assistant_lecturer_show(Request $request)
    {
        $alecturers = Lecturer::where('position', 'assistentlecturer')->get();
        $lecturers = Lecturer::where('position', 'lecturer')->get();
        return view('courses.courseregister', compact('alecturers', 'lecturers'));
    }

}
