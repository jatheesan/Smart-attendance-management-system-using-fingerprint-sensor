<?php

namespace App\Http\Controllers;
use App\Course;
use App\Models\Attendance_3S_Student;
use App\Student;
use Illuminate\Http\Request;

class S3courseController extends Controller
{
    public function index()
    {
        $s3_courses = Course::where('course_level', '3S')->where('semester', '2')->select('course_code')->get();
        return view('level_3.3scourse.3scourses', compact('s3_courses'));

        //dd('$s3_courses');
    }

    // public function attendance(Request $request)
    // {
    //     $course = $request->input('s3_course');
    //     $attendances = Attendance_3S_Student::with('student')->where('course_code','=', $course)->paginate(25);
    //     $s3_courses = Course::where('course_level', '3S')->where('semester', '2')->select('course_code')->get();
    //     return view('level_3.3scourse.3s_course_attendance', compact('course', 'attendances', 's3_courses'));
       
    // }

   // function for printing attendance like school register

    public function attendance(Request $request)
    {
        $course = $request->input('s3_course');
        $attendances = Attendance_3S_Student::with('student')->where('course_code','=', $course)->paginate(25);
        $s3_courses = Course::where('course_level', '3S')->where('semester', '2')->select('course_code')->get();
        $s3_st=Student::where('st_level','3S')->get();
        $count3s = Student::where('st_level', '3S')->count();
        $s3_cname = Course::where('course_level', '3S')->get();
        $s3_coursecount = Attendance_3S_Student::where('course_code',$course )->count('date');
        $s3_hourssum = Attendance_3S_Student::where('course_code',$course )->sum('hours');
      return view('level_3.3scourse.3s', compact('course', 'attendances', 's3_courses','s3_st','count3s','s3_coursecount','s3_cname','s3_hourssum'));
    }


}
