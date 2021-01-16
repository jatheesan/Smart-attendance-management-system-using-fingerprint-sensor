@extends('level_3.3scourse.3scourses')
@section('pagetitle', 'Attandance/level3/3S/'.$course)
@section('levelcontent')
            <div class="col-lg-12">
                <section class="landing">
                    <hr />
                    <dl class="row">
                        <dt class="col-sm-6 text-right">Course Code : </dt>
                        <dd class="col-sm-6 text-left">{{ $course }}</dd>
                        <dt class="col-sm-6 text-right">Course Name: </dt>
                        <dd class="col-sm-6 text-left">
                            @foreach($s3_cname as $s3cname)
                                @if($s3cname ->course_code ==  $course )
                                    {{ $s3cname->course_name }}
                                @endif
                            @endforeach
                        </dd>
                        <dt class="col-sm-6 text-right">Total Number of Students: </dt>
                        <dd class="col-sm-6 text-left">{{ $count3s }}</dd>
                        <dt class="col-sm-6 text-right">Total Number of Lectures: </dt>
                        <dd class="col-sm-6 text-left">{{ $s3_coursecount }}</dd>
                    </dl>
                    <hr />
                </section>
            </div>
            <div class="col-lg-12" style="border: 5px solid; border-radius: 8px; padding:0px !important;">
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
                                @foreach($s3_st as $s3st)
                                <tr>
                                    <td>{{ $s3st->st_regno }}</td>
                                    @php  
                                        $st_count=0;  
                                    @endphp

                                    @foreach($attendances as $attendance)
                                        <td>
                                            @if (is_array($attendance->attendance_mark) || is_object($attendance->attendance_mark))
                                    
                                                @if(in_array( $s3st->st_regno,$attendance->attendance_mark))
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
                                            if($s3_coursecount !=0)
                                            {
                                                $percentage= $st_count /$s3_coursecount  ;
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
                                                {{$count3s - count($attendance->attendance_mark)}}     
                        
                                            @else
                                                <p>0</p>
                                            @endif  
                                        </th>
                                    @endforeach    
                                </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
@endsection