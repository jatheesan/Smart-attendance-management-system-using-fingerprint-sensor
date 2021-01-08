<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Attendance_3M_Student;
use App\Student;
use App\Course;
use Illuminate\Http\Request;
use Exception;

class Attendance3MStudentsController extends Controller
{

    /**
     * Display a listing of the attendance 3 m  students.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $attendance3MStudents = Attendance_3M_Student::with('student')->paginate(25);

        return view('attendance_3_m__students.index', compact('attendance3MStudents'));
    }

    /**
     * Show the form for creating a new attendance 3 m  student.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $students = Student::pluck('st_regno','st_id')->all();
        
        return view('attendance_3_m__students.create', compact('students'));
    }

    /**
     * Store a new attendance 3 m  student in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            Attendance_3M_Student::create($data);

            return redirect()->route('attendance_3_m__students.attendance_3_m__student.index')
                ->with('success_message', 'Attendance 3 M  Student was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified attendance 3 m  student.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $attendance3MStudent = Attendance_3M_Student::with('student')->findOrFail($id);

        return view('attendance_3_m__students.show', compact('attendance3MStudent'));
    }

    /**
     * Show the form for editing the specified attendance 3 m  student.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $attendance3MStudent = Attendance_3M_Student::findOrFail($id);
        $students = Student::pluck('st_regno','st_id')->all();

        return view('attendance_3_m__students.edit', compact('attendance3MStudent','students'));
    }

    /**
     * Update the specified attendance 3 m  student in the storage.
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
            
            $attendance3MStudent = Attendance_3M_Student::findOrFail($id);
            $attendance3MStudent->update($data);

            return redirect()->route('attendance_3_m__students.attendance_3_m__student.index')
                ->with('success_message', 'Attendance 3 M  Student was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified attendance 3 m  student from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $attendance3MStudent = Attendance_3M_Student::findOrFail($id);
            $attendance3MStudent->delete();

            return redirect()->route('attendance_3_m__students.attendance_3_m__student.index')
                ->with('success_message', 'Attendance 3 M  Student was successfully deleted.');
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
        $rules = [
                'course_code' => 'string|min:1|nullable',
            'date' => 'date_format:j/n/Y g:i A|nullable',
            'hours' => 'numeric|nullable|min:-2147483648|max:2147483647',
            'hall' => 'nullable',
            'attendance_mark' => 'array|nullable', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
