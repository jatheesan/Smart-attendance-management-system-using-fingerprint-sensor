@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Attendance 3 M  Student' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('attendance_3_m__students.attendance_3_m__student.destroy', $attendance3MStudent->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('attendance_3_m__students.attendance_3_m__student.index') }}" class="btn btn-primary" title="Show All Attendance 3 M  Student">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('attendance_3_m__students.attendance_3_m__student.create') }}" class="btn btn-success" title="Create New Attendance 3 M  Student">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('attendance_3_m__students.attendance_3_m__student.edit', $attendance3MStudent->id ) }}" class="btn btn-primary" title="Edit Attendance 3 M  Student">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Attendance 3 M  Student" onclick="return confirm(&quot;Click Ok to delete Attendance 3 M  Student.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Course Code</dt>
            <dd>{{ $attendance3MStudent->course_code }}</dd>
            <dt>Date</dt>
            <dd>{{ $attendance3MStudent->date }}</dd>
            <dt>Hours</dt>
            <dd>{{ $attendance3MStudent->hours }}</dd>
            <dt>Hall</dt>
            <dd>{{ $attendance3MStudent->hall }}</dd>
            <dt>Attendance Mark</dt>
            <dd>{{ optional($attendance3MStudent->student)->st_regno }}</dd>

        </dl>

    </div>
</div>

@endsection