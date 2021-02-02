

<div class="table-responsive" style="display:flex !important;">
        <table class="table table-striped table-hover table-bordered">
            <thead class="thead-dark" style="background: #053469; color:#fff;">
                <tr>
                    <th colspan="3">Course Code</th>
                   
                    @foreach($course as $c)
                     @foreach($s3_hourssum as $hourssum)  
                       @if($hourssum->course_code ==$c->course_code )
                         <th colspan="2">
                           @php 
                             if($hourssum ->sum !=0)
                             {
                              echo   $c->course_code;
                             }
                            @endphp  
                         </th>
                        @endif  
                      @endforeach      

                    @endforeach   
                </tr>

                <tr>
                    <th colspan="3">No.of Lecture Hours</th>
                   
                    @foreach($course as $c)
                     @foreach($s3_hourssum as $hourssum)  
                       @if($hourssum->course_code ==$c->course_code )
                         <th colspan="2">
                           @php 
                             if($hourssum ->sum !=0)
                             {
                              echo $hourssum ->sum ;
                             }
                            @endphp  
                         </th>
                        @endif  
                      @endforeach      

                    @endforeach   
                </tr>
                
                <tr>
                    <th>No</th>
                    <th>Registration No</th>
                    <th>Full Name</th>
                    @foreach($course as $c)
                     @foreach($s3_hourssum as $hourssum)  
                       @if($hourssum->course_code ==$c->course_code )
                         <th>Attn</th>
                         <th>%</th>
                        @endif  
                      @endforeach      

                    @endforeach   
                </tr>
                

            </thead>
            <tbody>
            @foreach($s3_st as $key => $s3st)
                <tr>
                    <td>{{$s3_st ->firstitem()+$key}}</td> 
                    <td>{{ $s3st->st_regno }}</td>
                    <td>{{ $s3st->st_name }}</td>

                        @foreach($course as $c)     
                            @php  
                              $st_hours=0; 
                            @endphp

                            @foreach($attendances as $attendance)
                                @if($c->course_code == $attendance->course_code)
                                     @if (is_array($attendance->attendance_mark) || is_object($attendance->attendance_mark))
                                        @if(in_array( $s3st->st_regno,$attendance->attendance_mark))  
                                                @php 
                                                    $st_hours=$st_hours+ $attendance->hours;
                                                @endphp
                                        @endif
                                    @endif 
                                @endif  
                            @endforeach

                            @foreach($s3_hourssum as $hourssum)  
                                @if($hourssum->course_code ==$c->course_code )
                                    <td>
                                        @php 
                                            echo $st_hours;  
                                        @endphp 
                                    </td>
                                @endif  
                            @endforeach 

                            @foreach($s3_hourssum as $hourssum)  
                                @if($hourssum->course_code ==$c->course_code )
                                    <td>
                                        @php 
                                            if($hourssum ->sum !=0)
                                            {
                                                $percentage= $st_hours /$hourssum->sum  ;
                                                echo round( $percentage*100,2);
                                            }
                                            else{
                                                echo 0; 
                                            }
                                        @endphp  
                                    </td>
                                @endif  
                            @endforeach   
                        @endforeach
                </tr> 
            @endforeach 
            </tbody>
        </table>  
    </div>
    {{ $s3_st->appends(request()->input())->links() }} 

    

  
  
