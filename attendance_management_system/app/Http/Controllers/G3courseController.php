<?php

namespace App\Http\Controllers;
use App\Course;
use App\Models\Attendance_3G_Student;
use App\Student;
use Illuminate\Http\Request;

class G3courseController extends Controller
{
    public function index()
    {
        $g3_courses = Course::where('course_level', '3G')->where('semester', '2')->select('course_code')->get();
        return view('level_3.3gcourse.3gcourses', compact('g3_courses'));

        //dd('$s3_courses');



    }

    public function attendance(Request $request)
    {
        $course = $request->input('g3_course');
        $attendances = Attendance_3G_Student::with('student')->where('course_code','=', $course)->paginate(25);
        $g3_courses = Course::where('course_level', '3G')->where('semester', '2')->select('course_code')->get();
        return view('level_3.3gcourse.3g_course_attendance', compact('course', 'attendances', 'g3_courses'));
    }

}
