@extends('layouts.admin')
@section('pagetitle','3S Attendance')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                {{--<div class="card-header text-center">
                    {{ __('STUDENT REGISTER') }}
                </div>--}}
                <div class="card-body">
                    <form method="POST" action="{{ route('attendance_3_s__students.attendance_3_s__student.store') }}" accept-charset="UTF-8">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row d-lg-none">
                                    <div class="col text-center">
                                        <img src="{{url('/image/uojlogo.png')}}" alt="image" height="200px" width="200px">
                                    </div>
                                </div>
                            </div>
                            {{--<div class="col-lg-4">
                                <div class="form-group row">
                                    <div class="col-lg-12 d-none d-lg-block text-center">
                                        <img src="{{url('/image/uojlogo.png')}}" alt="image" height="200px" width="200px">
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col-lg-12 d-none d-lg-block">
                                        <h1 class="text-center display-3">UOJ</h1>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col-lg-12 d-none d-lg-block">
                                        <h4 class="text-center h4font">JAFFNA</h4>
                                    </div>                       
                                </div>
                            </div>
                            <div class="col-lg-1 d-none d-lg-block">
                                <hr class="vl">
                            </div>--}}

                            <div class="col-lg-12">
    
                                <div class="form-group row">
                                    <label for="course_code" class="col-lg-4 col-form-label text-lg-right">{{ __('Course code') }}</label>
                                    <div class="col-lg-6">
                                        <input id="course_code" type="text" class="form-control @error('course_code') is-invalid @enderror" name="course_code" value="{{ old('course_code') }}" placeholder="Course Code" required autocomplete="course_code">
                                        @error('course_code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="date" class="col-lg-4 col-form-label text-lg-right">{{ __('Date') }}</label>
                                    <div class="col-lg-6">
                                        <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" placeholder="--/--/----" required autocomplete="date">
                                        @error('date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="hours" class="col-lg-4 col-form-label text-lg-right">{{ __('Hours') }}</label>
                                    <div class="col-lg-6">
                                        <input id="hours" type="number" class="form-control @error('hours') is-invalid @enderror" name="hours" value="{{ old('hours') }}" required autocomplete="hours">
                                        @error('hours')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="hall" class="col-lg-4 col-form-label text-lg-right">{{ __('Hall') }}</label>
                                    <div class="col-lg-6">
                                        <select id="hall" class="form-control @error('hall') is-invalid @enderror" name="hall">
                                            <option>Select Level</option>
                                            <option value="CUL-1">CUL-1</option>
                                            <option value="CUL-2">CUL-2</option>
                                            <option value="CSL">CSL</option>
                                            <option value="LAB-1">LAB-1</option>
                                        </select>
                                        @error('hall')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="attendance_mark[]" class="col-lg-4 col-form-label text-lg-right">{{ __('Students') }}</label>
                                    <div class="col-lg-6">
                                        @foreach($students as $student)
                                            <label for="{{ $student -> st_regno }}" class="checkbox-inline">
                                                <input id="{{ $student -> st_regno }}" class="required" name="attendance_mark[]" type="checkbox" value="{{ $student -> st_regno }}" >
                                                {{ $student -> st_regno }}
                                            </label>
                                        @endforeach

                                        @error('attendance_mark')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-lg-6 offset-lg-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection