@extends('layouts.admin')

@section('content')
<div class="container-fluid"> 
    <div class="row bg-white has-shadow pt-3">
        <div class="col-lg-12">
            <div class="row card-deck">
            @if(isset($s3_courses))
            @foreach($s3_courses as $s3_course)
            <div class="col-lg-2 col-md-4 col-sm-4">
                {{--<div><h1>{{$s3_course->course_code}},</h1></div>--}}
                <div class="card text-white bg-dark" style="border-radius: 5%;">
                    <div class="card-body">
                        {{--<h5 class="card-title">Dark card title</h5>--}}
                        {{--<p class="text-center">{{$s3_course->course_code}}</p>--}}
                        <form method="POST" action="{{ url('/attendance') }}">
                        @csrf
                            <div class="form-group row">
                                <input id="s3_course" type="text" class="d-none form-control" name="s3_course" value="{{ $s3_course->course_code }}" required autocomplete="s3_course">
                                <button type="submit" class="btn btn-dark btn-sm btn-block text-center">
                                {{$s3_course->course_code}}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
            </div>
        </div>

        <section>
            <div class="col-lg-12">
                @yield('levelcontent')
            </div>
        </section>
    </div>
</div>    

@endsection