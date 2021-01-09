@extends('layouts.admin')
@section('pagetitle', 'Attandance/level3/3G')
@section('content')
<div class="container-fluid"> 
    <div class="row bg-white has-shadow pt-3">
        <div class="col-lg-12">
            <div class="row card-deck">
            @if(isset($s3_courses))
            @foreach($s3_courses as $s3_course)
            <div class="col-lg-2 col-md-4 col-4">
                <div class="card text-white bg-dark" style="border-radius: 5%;">
                    <div class="card-body">
                        <form method="POST" action="{{ url('/attendance') }}">
                        @csrf
                            <div class="form-group row">
                                <input id="s3_course" type="text" class="d-none form-control" name="s3_course" value="{{ $s3_course->course_code }}" required autocomplete="s3_course">
                                    <button type="submit" class="btn btn-dark btn-sm btn-block text-center buttonfont">
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