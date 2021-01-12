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
        <div class="panel-body">
            <section class="landing">
                <hr/>
                <dl class="row">
                    <dt class="col-sm-3 text-right">Course Code : </dt>
                    <dd class="col-sm-9 text-left">{{ $course}}</dd>
                    <dt class="col-sm-3 text-right">Course Name: </dt>
                    <dd class="col-sm-9 text-left">
                        @foreach($m3_cname as $m3cname)
                                                      @if ($m3cname ->course_code ==  $course )
                                                       {{ $m3cname->course_name }}
                                                      @endif
                                                    @endforeach
                    </dd>
                    <dt class="col-sm-3 text-right">Total Number of Students: </dt>
                    <dd class="col-sm-9 text-left">{{  $count3m}}</dd>
                    <dt class="col-sm-3 text-right">Total Number of Lectures: </dt>
                    <dd class="col-sm-9 text-left">{{  $m3_coursecount}}</dd>
                </dl>  
                <hr/>    
            </section>
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
                            <th>total</th>
                            <th>Attendance Percentage</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($m3_st as $m3st)
                      <tr>
                         
                        <td>{{ $m3st->st_regno }}</td>
                        @php  $st_count=0;  @endphp
                       @foreach($attendances as $attendance)
                        <td>
                        @if (is_array($attendance->attendance_mark) || is_object($attendance->attendance_mark))
                                
                            @if(in_array( $m3st->st_regno,$attendance->attendance_mark))
                             <p>1</p>  
                             @php $st_count=$st_count+1;  @endphp
                            @else
                             <p>0</p>
                            @endif
                        @else
                           <p>0</p>
                        @endif  
                        </td>
                        
                      @endforeach  
                    <th> @php echo $st_count;  @endphp </th>
                     <th>
                     @php 
                     $percentage= $st_count /$m3_coursecount  ;
                     echo  $percentage*100;
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
                        {{$count3m - count($attendance->attendance_mark)}}     
                        
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
    </div>
   
@endsection