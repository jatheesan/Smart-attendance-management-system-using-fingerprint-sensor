@extends('layouts.admin')
@section('pagetitle','3S Attendance')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="panel panel-default">

            <div class="panel-heading clearfix">

                <div class="pull-left">
                    <h4 class="mt-5 mb-5">
                        {{ !empty($title) ? $title : 'Attendance 3S  Student' }}
                    </h4>
                </div>
                <div class="btn-group btn-group-sm pull-right" role="group">

                    <a href="{{ route('attendance_3_s__students.attendance_3_s__student.index') }}"
                        class="btn btn-primary" title="Show All Attendance 3 S  Student">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('attendance_3_s__students.attendance_3_s__student.create') }}"
                        class="btn btn-success" title="Create New Attendance 3 S  Student">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>

                </div>
            </div>

            <div class="panel-body">

                @if($errors->any())
                    <ul class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <form method="POST"
                    action="{{ route('attendance_3_s__students.attendance_3_s__student.update', $attendance3SStudent->id) }}"
                    id="edit_attendance_3_s__student_form" name="edit_attendance_3_s__student_form"
                    accept-charset="UTF-8" class="form-horizontal">
                    {{ csrf_field() }}
                    <input name="_method" type="hidden" value="PUT">
                    @include('attendance_3_s__students.form', [
                    'attendance3SStudent' => $attendance3SStudent,
                    ])

                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-10">
                            <input class="btn btn-primary" type="submit" value="Update">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection