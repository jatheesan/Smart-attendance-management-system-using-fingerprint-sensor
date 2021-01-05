@extends('level_3.3scourse.3scourses')
@section('pagetitle', 'Attandance/level3/3S')
@section('levelcontent')

    <div class="row justify-content-center">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">

                <div class="pull-right">

                    <form method="POST"
                        action="{!! route('attendance_3_s__students.attendance_3_s__student.destroy', $attendance3SStudent->id) !!}"
                        accept-charset="UTF-8">
                        <input name="_method" value="DELETE" type="hidden">
                        {{ csrf_field() }}
                        <div class="btn-group btn-group-sm" role="group">
                            <a href="{{ route('attendance_3_s__students.attendance_3_s__student.index') }}"
                                class="btn btn-primary" title="Show All Attendance 3 S  Student">
                                <i class="fa fa-th-list" aria-hidden="true"></i>
                            </a>

                            <a href="{{ route('attendance_3_s__students.attendance_3_s__student.create') }}"
                                class="btn btn-success" title="Create New Attendance 3 S  Student">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </a>

                            <a href="{{ route('attendance_3_s__students.attendance_3_s__student.edit', $attendance3SStudent->id ) }}"
                                class="btn btn-primary" title="Edit Attendance 3 S  Student">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>

                            <button type="submit" class="btn btn-danger" title="Delete Attendance 3 S  Student"
                                onclick="return confirm(&quot;Click Ok to delete Attendance 3 S  Student.?&quot;)">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </div>
                    </form>

                </div>

            </div>

            <div class="panel-body">
                <section class="landing">
                        <h1 class="text-center">
                            {{-- isset($title) ? $title : 'Attendance 3S' --}}
                            {{ $attendance3SStudent->course_code }}
                            {{':'}}
                            {{ $attendance3SStudent->date }}
                        </h1>
                        <hr/>
                        <dl class="row">
                            <dt class="col-sm-3 text-right">Course Code : </dt>
                            <dd class="col-sm-9 text-left">{{ $attendance3SStudent->course_code }}</dd>
                            <dt class="col-sm-3 text-right">Date : </dt>
                            <dd class="col-sm-9 text-left">{{ $attendance3SStudent->date }}</dd>
                            <dt class="col-sm-3 text-right">Hours : </dt>
                            <dd class="col-sm-9 text-left">{{ $attendance3SStudent->hours }}</dd>
                            <dt class="col-sm-3 text-right">Hall : </dt>
                            <dd class="col-sm-9 text-left">{{ $attendance3SStudent->hall }}</dd>
                            <dt class="col-sm-3 text-right">Students : </dt>
                            {{-- <dd>{{ optional($attendance3SStudent->student)->st_regno }}</dd>--}}
                            <dd class="col-sm-9 text-left">
                                <ul>
                                    @if (is_array($attendance3SStudent->attendance_mark) || is_object($attendance3SStudent->attendance_mark))
                                        @foreach($attendance3SStudent->attendance_mark as $student)
                                            <li>{{ $student }}</li>
                                        @endforeach
                                    @else
                                        {{ __('zero attendance') }}
                                    @endif
                                </ul>
                            </dd>
                        </dl>
                </section>
            </div>
        </div>
    </div>
@endsection