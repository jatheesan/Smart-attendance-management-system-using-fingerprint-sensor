@extends('layouts.admin')
@section('pagetitle','Courses')
@section('content')
<div class="container-fluid"> 
        <div class="row">
            <div class="col-sm-12">
                <div>
                    <a style="margin: 19px;" href="{{ url('/course') }}" class="btn
                btn-primary">New Course</a>
                </div>
                <div class="col-sm-12">
                    @if(session()->get('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                    @endif
                </div>
                <div class="table-responsive">
                    <table id="lecturetable" class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Course ID</th>
                            <th>Course Code</th>
                            <th>Course Name</th>
                            <th>Course Level</th>
                            <th>Lecturer ID</th>
                            <th>Assistant Lecturer ID</th>
                            <th colspan=2>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($courses as $course)
                        <tr>
                            <td>{{ $course->course_id }}</td>
                            <td>{{ $course->course_code }}</td>
                            <td>{{ $course->course_name }}</td>
                            <td>{{ $course->course_level }}</td>
                            <td>{{ $course->lect_id }}</td>
                            <td>{{ $course->assistant_lect_id }}</td>
                            <td>
                                <a href="{{ route('course_edit', ['id' => $course->course_id]) }}" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('course_delete', ['id' => $course->course_id]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
{{ $courses->links() }}
@endsection
