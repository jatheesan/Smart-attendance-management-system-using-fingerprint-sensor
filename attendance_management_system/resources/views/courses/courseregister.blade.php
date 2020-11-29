
@extends('layouts.admin')
@section('content')

<style>
    .a{
        float: center;
        padding-top: 2px;
         padding-left: 30%;
         font-weight: bold;
         font-family: 'Times New Roman', Times, serif
         
      
    }
    .vl{
    border-left: 3px solid black;
    height: 350px;
    position: absolute ;
    left:35%;
    margin-left:-1px;
    top:-1;
    }
    .card-header{
        font-size:40px;
        background-color:lightgray;
        float: center;
        padding-left: 5%;
        font-family: 'Times New Roman', Times, serif
        
    }
    .card-body{
        padding-top: 30px;
    }
    .row-content{
        padding-top:40px; 
        float: center;
    }
    .card{
        border-color:rgb(203, 212, 229); 
    }
  
}

</style>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Smart Attendance Management System') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="row">
                        <div class="col-12 col-sm-4 ">
                            <div class="form-group row">
                                <div class="col-md-6">
                                <img src="{{url('/image/uojlogo.png')}}" alt="image" height="200px" width="200px">
                            </div>  
                            </div>

                            <div class ="col" >
                                <h1 class="a" > UOJ</h1></div>
                                <h4 class="a">JAFFNA</h4>
                        </div>
                        <div ><hr class="vl"> </div>

                        <div class="col col-sm">
                            <div>
                                <h3 class="a">COURSE REGISTER</h3><br>
                            </div>
                            <div class="form-group row">
                                <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('ID') }}</label>
    
                                <div class="col-md-6">
                                    <input id="id" type="text" class="form-control @error('id') is-invalid @enderror" name="id" value="{{ old('id') }}" required autocomplete="id" autofocus>
    
                                    @error('id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="ccode" class="col-md-4 col-form-label text-md-right">{{ __('Course Code') }}</label>
    
                                <div class="col-md-6">
                                    <input id="ccode" type="text" class="form-control @error('ccode') is-invalid @enderror" name="ccode" value="{{ old('ccode') }}" required autocomplete="ccode">
    
                                    @error('ccode')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cname" class="col-md-4 col-form-label text-md-right">{{ __('CourseName') }}</label>
    
                                <div class="col-md-6">
                                    <input id="cname" type="text" class="form-control @error('cname') is-invalid @enderror" name="cname " value="{{ old('cname') }}" required autocomplete="cname">
    
                                    @error('cname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Lecturer Name') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="acname" class="col-md-4 col-form-label text-md-right">{{ __('Assistant Lecturer Name') }}</label>
    
                                <div class="col-md-6">
                                    <input id="acname" type="text" class="form-control @error('acname') is-invalid @enderror" name="acname" value="{{ old('acname') }}" required autocomplete="acname">
    
                                    @error('acname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
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
