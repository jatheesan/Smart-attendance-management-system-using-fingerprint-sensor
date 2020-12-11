<?php

namespace App\Http\Controllers;
use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::simplePaginate(10);

        return view('courses.courseindex', compact('courses'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'course_code' => 'required',
            'course_name' => 'required',
            'course_level' => 'required',
            'lect_id' => 'required',
            'assistant_lect_id' => 'required'
            
        ]);

    $course = new Course([
        'course_code' => $request->get('course_code'),
        'course_name' => $request->get('course_name'),
        'course_level' => $request->get('course_level'),
        'lect_id' => $request->get('lect_id'),
        'assistant_lect_id' => $request->get('assistant_lect_id')
         ]);
            
         $course->save();
                   
         return redirect('/tables/courses')->with('success', 'course added successfully!');
     }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);

        return view('courses.courseedit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'course_code' => 'required',
            'course_name' => 'required',
            'course_level' => 'required',
            //'lect_id' => 'required',
            //'assistant_lect_id' => 'required'
           
        ]);

        $course = Course::find($id);
        $course -> course_code = $request->get('course_code');
        $course -> course_name = $request->get('course_name');
        $course -> course_level = $request->get('course_level');
       // $course -> lect_id = $request->get('lect_id');
        //$course -> assistant_lect_id =$request->get('assistant_lect_id');

        $course -> save();
        return redirect('/tables/courses')->with('success', 'course updated successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        $course -> delete();

        return redirect('/tables/courses')->with('success', 'course deleted successfully!');
        
    }


}
