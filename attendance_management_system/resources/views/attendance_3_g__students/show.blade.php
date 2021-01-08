@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Attendance 3 G  Student' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('attendance_3_g__students.attendance_3_g__student.destroy', $attendance3GStudent->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('attendance_3_g__students.attendance_3_g__student.index') }}" class="btn btn-primary" title="Show All Attendance 3 G  Student">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('attendance_3_g__students.attendance_3_g__student.create') }}" class="btn btn-success" title="Create New Attendance 3 G  Student">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('attendance_3_g__students.attendance_3_g__student.edit', $attendance3GStudent->id ) }}" class="btn btn-primary" title="Edit Attendance 3 G  Student">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Attendance 3 G  Student" onclick="return confirm(&quot;Click Ok to delete Attendance 3 G  Student.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Course Code</dt>
            <dd>{{ $attendance3GStudent->course_code }}</dd>
            <dt>Date</dt>
            <dd>{{ $attendance3GStudent->date }}</dd>
            <dt>Hours</dt>
            <dd>{{ $attendance3GStudent->hours }}</dd>
            <dt>Hall</dt>
            <dd>{{ $attendance3GStudent->hall }}</dd>
            <dt>Attendance Mark</dt>
            <dd>{{ optional($attendance3GStudent->student)->st_regno }}</dd>

        </dl>

    </div>
</div>

@endsection