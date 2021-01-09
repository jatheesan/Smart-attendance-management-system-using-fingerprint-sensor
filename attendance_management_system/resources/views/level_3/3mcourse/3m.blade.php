@extends('level_3.3mcourse.3mcourses')
@section('pagetitle', 'Attandance/level3/3M/'.$course)
@section('levelcontent')
    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('attendance_3_m__students.attendance_3_m__student.create') }}" class="btn btn-success" title="Create New Attendance 3 M  Student">
                    <span class="fa fa-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Registration No</th>
                            @foreach($attendances as $attendance)
                            <th>{{ $attendance->date }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($m3_st as $m3st)
                      <tr>
                         
                        <td>{{ $m3st->st_regno }}</td>
                        @foreach($attendances as $attendance)
                        <td>
                        @if (is_array($attendance->attendance_mark) || is_object($attendance->attendance_mark))
                                
                            @if(in_array( $m3st->st_regno,$attendance->attendance_mark))
                             <p>1</p>  
                            @else
                             <p>0</p>
                            @endif
                        @else
                           <p>0</p>
                        @endif  
                        </td>
                      @endforeach  
                            
                        </tr>
                     @endforeach  
                    </tbody>
                </table>

            </div>
        </div>
    </div>
   
@endsection