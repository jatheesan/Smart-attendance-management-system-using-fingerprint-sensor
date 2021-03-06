@extends('level_3.3scourse.3scourses')
@section('pagetitle', 'Attandance/level3/3S')
@section('levelcontent')

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('attendance_3_s__students.attendance_3_s__student.create') }}" class="btn btn-success" title="Create New Attendance 3 S  Student">
                    <span class="fa fa-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($attendance3SStudents) == 0)
            <div class="panel-body text-center">
                <h4>No Attendance 3S Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Course Code</th>
                            <th>Date</th>
                            <th>Hours</th>
                            <th>Hall</th>
                            <th>Attendance Mark</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($attendance3SStudents as $attendance3SStudent)
                        <tr>
                            <td>{{ $attendance3SStudent->course_code }}</td>
                            <td>{{ $attendance3SStudent->date }}</td>
                            <td>{{ $attendance3SStudent->hours }}</td>
                            <td>{{ $attendance3SStudent->hall }}</td>
                            {{--<td>{{ optional($attendance3SStudent->student)->st_regno }}</td>--}}
                            <td>
                                @if (is_array($attendance3SStudent->attendance_mark) || is_object($attendance3SStudent->attendance_mark))
                                
                                    @foreach($attendance3SStudent->attendance_mark as $student)
                                        {{$student}},
                                    @endforeach
                                @else
                                {{ __('zero attendance') }}
                                @endif  
                            </td>

                            <td>

                                <form method="POST" action="{!! route('attendance_3_s__students.attendance_3_s__student.destroy', $attendance3SStudent->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('attendance_3_s__students.attendance_3_s__student.show', $attendance3SStudent->id ) }}" class="btn btn-info" title="Show Attendance 3 S  Student">
                                            <i class="fa fa-caret-square-o-up" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{ route('attendance_3_s__students.attendance_3_s__student.edit', $attendance3SStudent->id ) }}" class="btn btn-primary" title="Edit Attendance 3 S  Student">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Attendance 3 S  Student" onclick="return confirm(&quot;Click Ok to delete Attendance 3 S  Student.&quot;)">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </button>
                                    </div>

                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="panel-footer">
            {!! $attendance3SStudents->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection