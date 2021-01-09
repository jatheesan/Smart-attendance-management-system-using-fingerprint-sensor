<?php

namespace App\Http\Controllers;
use App\Course;
use App\Models\Attendance_3M_Student;
use App\Student;
use Illuminate\Http\Request;

class M3courseController extends Controller
{
    public function index()
    {
        $m3_courses = Course::where('course_level', '3M')->where('semester', '2')->select('course_code')->get();
        return view('level_3.3mcourse.3mcourses', compact('m3_courses'));

        //dd('$m3_courses');
    }

    public function attendance(Request $request)
    {
        $course = $request->input('m3_course');
        $attendances = Attendance_3M_Student::with('student')->where('course_code','=', $course)->paginate(25);
        $m3_courses = Course::where('course_level', '3M')->where('semester', '2')->select('course_code')->get();
        return view('level_3.3mcourse.3m_course_attendance', compact('course', 'attendances', 'm3_courses'));
    }
}
