@extends('level_3.3gcourse.3gcourses')
@section('pagetitle', 'Attandance/level3/3G/'.$course)
@section('levelcontent')
        @if($g3_coursecount == 0)
        <div class="panel-body text-center">
            <hr />
            <h4>{{$course}} Attendance is not available.</h4>
        </div>
        @else
            <div class="col-lg-12">
                <section class="landing">
                    <hr />
                    <dl class="row">
                        <dt class="col-sm-6 text-right">Course Code : </dt>
                        <dd class="col-sm-6 text-left">{{ $course }}</dd>
                        <dt class="col-sm-6 text-right">Course Name: </dt>
                        <dd class="col-sm-6 text-left">
                            @foreach($g3_cname as $g3cname)
                                    {{ $g3cname->course_name }}
                            @endforeach
                        </dd>
                        <dt class="col-sm-6 text-right">Lecturer Name: </dt>
                        <dd class="col-sm-6 text-left">
                            @foreach($lecturer_name as $lname)
                           {{$lname->lect_title. $lname -> lect_name}}
                           @endforeach
                        </dd>
                        <dt class="col-sm-6 text-right">Total Number of Students: </dt>
                        <dd class="col-sm-6 text-left">{{ $count3g }}</dd>
                        <dt class="col-sm-6 text-right">Total Number of Lectures: </dt>
                        <dd class="col-sm-6 text-left">{{ $g3_coursecount }}</dd>
                        <dt class="col-sm-6 text-right">Total Number of Lecture hours: </dt>
                        <dd class="col-sm-6 text-left">{{ $g3_hourssum .' hours'}}</dd>
                        <dt class="col-sm-6 text-right">Semester: </dt>
                        <dd class="col-sm-6 text-left">
                            @foreach($g3_cname as $g3cname)
                                    {{ $g3cname->semester}}
                            @endforeach
                        </dd>
                    </dl>
                    <hr />
                </section>
            </div>
            <div class="panel-heading clearfix">
                <div class="btn-group btn-group-sm pull-right" role="group">
                    <a href="{{ route('attendance_3_g__students.attendance_3_g__student.create') }}" class="btn btn-success" title="Create New Attendance 3 G  Student">
                        <span class="fa fa-plus" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-12" style="border: 5px solid; border-radius: 8px; padding:0px !important; margin-bottom:10px;">
                    <div class="table-responsive" style="display:flex !important;">
                        <table class="table table-striped table-hover table-bordered">
                            <thead class="thead-dark" style="background: #053469; color:#fff;">
                                <tr>
                                    <th colspan ="3">Lecture Date</th>
                                    @foreach($attendances as $attendance)
                                        <th>{{ $attendance->date }}</th>
                                    @endforeach
                                    <th rowspan="3">Total Number of Attended Lecture Days</th>
                                    <th rowspan="3">Total Number of Attended Lecture Hours</th>
                                    <th rowspan="3">Attendance Percentage(%)</th>
                                </tr>
                                <tr>
                                    <th colspan ="3">Number of Lecture Hours</th>
                                    @foreach($attendances as $attendance)
                                    <th>{{ $attendance->hours }}</th>
                                @endforeach 
                                </tr>
                                <tr>
                                    <th>NO</th>
                                    <th>Registration No</th>
                                    <th>Student Name</th>
                                    <th colspan="{{ $g3_coursecount }}">Attendance Mark</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @php $i=1; @endphp --}}
                                @foreach($g3_st as  $key => $g3st)
                                <tr>
                                    {{-- <td>{{ $i }}</td>
                                    @php $i=$i+1; @endphp --}}
                                    <td>{{$g3_st ->firstitem()+$key}}</td>
                                    <td>{{ $g3st->st_regno }}</td>
                                    <td>{{ $g3st->st_name }}</td>
                                    @php  
                                        $st_count=0; 
                                        $st_hours=0;  
                                    @endphp

                                    @foreach($attendances as $attendance)
                                        <td>
                                            @if (is_array($attendance->attendance_mark) || is_object($attendance->attendance_mark))
                                    
                                                @if(in_array( $g3st->st_regno,$attendance->attendance_mark))
                                                    <p>1</p>  
                                                    @php 
                                                        $st_count=$st_count+1;  
                                                        $st_hours=$st_hours+ $attendance->hours;
                                                    @endphp
                                                @else
                                                    <p>0</p>
                                                @endif
                                        
                                            @else
                                                <p>0</p>
                                            @endif  
                                        </td>
                                    @endforeach  
                                    <th> 
                                        @php 
                                            echo $st_count;  
                                        @endphp 
                                    </th>
                                    <th> 
                                        @php 
                                            echo $st_hours;  
                                        @endphp 
                                    </th>
                                    <th>
                                        @php 
                                           if($g3_hourssum !=0)
                                            {
                                                $percentage= $st_hours /$g3_hourssum  ;
                                                echo round( $percentage*100,2);
                                            }
                                            else{
                                                echo 0; 
                                            }
                                        @endphp  
                                    </th> 
                            
                                </tr>
                                @endforeach 
                                <tr class="thead-dark">
                                    <th colspan="3">total attendees</th>
                                        @foreach($attendances as $attendance)
                                            <th>
                                                @if (is_array($attendance->attendance_mark) || is_object($attendance->attendance_mark))
                                                    {{count($attendance->attendance_mark)}}     
                                                @else
                                                    <p>0</p>
                                                @endif  
                                            </th>
                                        @endforeach   
                                </tr> 
                                <tr class="thead-dark" >
                                    <th colspan="3">total absentees</th>
                                    @foreach($attendances as $attendance)
                                        <th>
                                            @if (is_array($attendance->attendance_mark) || is_object($attendance->attendance_mark))
                                                {{$count3g - count($attendance->attendance_mark)}}     
                        
                                            @else
                                                <p>{{$count3g}}</p>
                                            @endif  
                                        </th>
                                    @endforeach    
                                </tr>
                                <tr class="thead-dark">
                                    <th colspan="3">Student's Attendence Percentage(%)</th>
                                    @foreach($attendances as $attendance)
                                        <th>
                                            @php 
                                            if (is_array($attendance->attendance_mark) || is_object($attendance->attendance_mark))
                                            {
                                                $percentage1= count($attendance->attendance_mark) /$count3g ;
                                                echo round( $percentage1*100,2);
                                            }
                                            else{
                                                echo 0; 
                                            }
                                          @endphp  
                                        </th>
                                    @endforeach    
                                </tr>
                                <tr class="thead-dark" >
                                    <th colspan="3">Edit</th>
                                    @foreach($attendances as $attendance)
                                        <th>
                                            <a href="{{ route('attendance_3_g__students.attendance_3_g__student.edit', $attendance->id ) }}" class="btn btn-primary" title="Edit Attendance 3 G  Student">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </a>
                                        </th>
                                    @endforeach
                                </tr>
                                <tr class="thead-dark" >
                                    <th colspan="3">Delete</th>
                                    @foreach($attendances as $attendance)
                                        <th>
                                            <form method="POST" action="{!! route('attendance_3_g__students.attendance_3_g__student.destroy', $attendance->id ) !!}" accept-charset="UTF-8">
                                            <input name="_method" value="DELETE" type="hidden">
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger" title="Delete Attendance 3 G  Student"
                                             onclick="return confirm(&quot;Click Ok to delete Attendance 3 S  Student.?&quot;)">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                         </button>
                                        </form>
                                        </th>
                                    @endforeach
                                </tr>
                                <tr class="thead-dark" >
                                    <th colspan="3">Show</th>
                                    @foreach($attendances as $attendance)
                                        <th>
                                            <a href="{{ route('attendance_3_g__students.attendance_3_g__student.show', $attendance->id ) }}" class="btn btn-info" title="Show Attendance 3G  Student">
                                                <i class="fa fa-caret-square-o-up" aria-hidden="true"></i>
                                            </a>
                                        </th>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
            {{ $g3_st->appends(request()->input())->links() }}   
         @endif    
@endsection