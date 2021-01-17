@extends('level_3.3gcourse.3gcourses')
@section('pagetitle', 'Attandance/level3/3G/'.$course)
@section('levelcontent')
            <div class="col-lg-12">
                <section class="landing">
                    <hr />
                    <dl class="row">
                        <dt class="col-sm-6 text-right">Course Code : </dt>
                        <dd class="col-sm-6 text-left">{{ $course }}</dd>
                        <dt class="col-sm-6 text-right">Course Name: </dt>
                        <dd class="col-sm-6 text-left">
                            @foreach($g3_cname as $g3cname)
                                @if($g3cname ->course_code ==  $course )
                                    {{ $g3cname->course_name }}
                                @endif
                            @endforeach
                        </dd>
                        <dt class="col-sm-6 text-right">Total Number of Students: </dt>
                        <dd class="col-sm-6 text-left">{{ $count3g }}</dd>
                        <dt class="col-sm-6 text-right">Total Number of Lectures: </dt>
                        <dd class="col-sm-6 text-left">{{ $g3_coursecount }}</dd>
                        <dt class="col-sm-6 text-right">Total Number of Lecture hours: </dt>
                        <dd class="col-sm-6 text-left">{{ $g3_hourssum .' hours'}}</dd>
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
                                    <th>Registration No</th>
                                    @foreach($attendances as $attendance)
                                        <th>{{ $attendance->date }}</th>
                                    @endforeach
                                        <th>total</th>
                                        <th>Attendance Percentage(%)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($g3_st as $g3st)
                                <tr>
                                    <td>{{ $g3st->st_regno }}</td>
                                    @php  
                                        $st_count=0;  
                                    @endphp

                                    @foreach($attendances as $attendance)
                                        <td>
                                            @if (is_array($attendance->attendance_mark) || is_object($attendance->attendance_mark))
                                    
                                                @if(in_array( $g3st->st_regno,$attendance->attendance_mark))
                                                    <p>1</p>  
                                                    @php 
                                                        $st_count=$st_count+1;  
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
                                            if($g3_coursecount !=0)
                                            {
                                                $percentage= $st_count /$g3_coursecount  ;
                                                echo round( $percentage*100,2);
                                            }
                                            else{
                                                echo 0; 
                                            }
                                        @endphp  
                                    </th> 
                            
                                </tr>
                                @endforeach 
                                <tr>
                                    <th>total attendees</th>
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
                                <tr>
                                    <th>total absentees</th>
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
                            </tbody>
                        </table>
                    </div>
            </div>
@endsection