<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Attendance_3G_Student;
use App\Student;
use App\Course;
use Illuminate\Http\Request;
use Exception;

class Attendance3GStudentsController extends Controller
{

    /**
     * Display a listing of the attendance 3 g  students.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $attendance3GStudents = Attendance_3G_Student::with('student')->paginate(25);
        $g3_courses = Course::where('course_level', '3G')->where('semester', '2')->select('course_code')->get();
        return view('attendance_3_g__students.index', compact('g3_courses','attendance3GStudents'));
    }

    /**
     * Show the form for creating a new attendance 3 g  student.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        //$students = Student::pluck('st_regno','st_id')->all();
        $g3_courses = Course::where('course_level', '3G')->where('semester', '2')->select('course_code')->get();
        $students = Student::where('st_level', '3G')->get();
        $course3g = Course::where('course_code', 'like','CSC3__G%')-> where('semester',2)->get();
        return view('attendance_3_g__students.create', compact('g3_courses', 'students','course3g'));
       // return view('attendance_3_g__students.create', compact('students'));
    }

    /**
     * Store a new attendance 3 g  student in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        // try {
            
        //     $data = $this->getData($request);
            
        //     Attendance_3G_Student::create($data);

        //     return redirect()->route('attendance_3_g__students.attendance_3_g__student.index')
        //         ->with('success_message', 'Attendance 3 G  Student was successfully added.');
        // } catch (Exception $exception) {

        //     return back()->withInput()
        //         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        // }
        $request->validate([
            'course_code' => 'string|min:1|nullable',
            'date' => 'required',
            'hours' => 'numeric|nullable|min:-2147483648|max:2147483647',
            'hall' => 'nullable',
           //'attendance_mark' => 'nullable',
            
        ]);

    $attendance = new Attendance_3G_Student([
        'course_code' => $request->get('course_code'),
        'date' => $request->get('date'),
        'hours' => $request->get('hours'),
        'hall' => $request->get('hall'),
        'attendance_mark' => $request->get('attendance_mark')
         ]);
            //return $request->get('attendance_mark');
         $attendance->save();
                   
         return redirect()->route('attendance_3_g__students.attendance_3_g__student.index');
        

    }

    /**
     * Display the specified attendance 3 g  student.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $attendance3GStudent = Attendance_3G_Student::with('student')->findOrFail($id);

        
        $g3_courses = Course::where('course_level', '3G')->where('semester', '2')->select('course_code')->get();
        $g3_reg = Student::where('st_level', '3G')->get();
        $g3_cname = Course::where('course_level', '3G')->get();
        return view('attendance_3_G__students.show', compact('g3_courses', 'attendance3GStudent','g3_reg','g3_cname')); 
       
       
        //return view('attendance_3_g__students.show', compact('attendance3GStudent'));
    }

    /**
     * Show the form for editing the specified attendance 3 g  student.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $attendance3GStudent = Attendance_3G_Student::findOrFail($id);
      
        //$students = Student::pluck('st_regno','st_id')->all();
        $students = Student::where('st_level', '3G')->get();
        $g3_courses = Course::where('course_level', '3G')->where('semester', '2')->select('course_code')->get();
        $course3g = Course::where('course_code', 'like','CSC3__G%')-> where('semester',2)->get();
        return view('attendance_3_g__students.edit', compact('g3_courses', 'attendance3GStudent','students','course3g'));






        //return view('attendance_3_g__students.edit', compact('attendance3GStudent','students'));
    }

    /**
     * Update the specified attendance 3 g  student in the storage.
     *
     * @param int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            $attendance3GStudent = Attendance_3G_Student::findOrFail($id);
            $attendance3GStudent->update($data);

            return redirect()->route('attendance_3_g__students.attendance_3_g__student.index');
              //  ->with('success_message', 'Attendance 3 G  Student was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        } 

    }

    /**
     * Remove the specified attendance 3 g  student from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $attendance3GStudent = Attendance_3G_Student::findOrFail($id);
            $attendance3GStudent->delete();

            return redirect()->route('attendance_3_g__students.attendance_3_g__student.index')
                ->with('success_message', 'Attendance 3 G  Student was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    
    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request 
     * @return array
     */
    protected function getData(Request $request)
    {
        // $rules = [
        //         'course_code' => 'string|min:1|nullable',
        //     'date' => 'date_format:j/n/Y g:i A|nullable',
        //     'hours' => 'numeric|nullable|min:-2147483648|max:2147483647',
        //     'hall' => 'nullable',
        //     'attendance_mark' => 'array|nullable', 
        // ];

        $rules = [
            'course_code' => 'string|min:1|required',
            'date' => 'required',
            'hours' => 'numeric|required|min:-2147483648|max:2147483647',
            'hall' => 'required',
            'attendance_mark' => 'array|nullable',
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
