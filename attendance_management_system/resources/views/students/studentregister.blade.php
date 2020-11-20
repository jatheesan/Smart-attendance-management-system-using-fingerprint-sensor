
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
    height: 270px;
    position: absolute ;
    left:33%;
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
                <div class="card-header text-center">{{ __('STUDENT REGISTER') }}</div>

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
                            {{--<div>
                                <h3 class="a">STUDENT REGISTER</h3><br>
                            </div>
                            --}}
                            <div class="form-group row d-none">
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
                                <label for="fname" class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>
    
                                <div class="col-md-6">
                                    <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname">
    
                                    @error('fname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="stregno" class="col-md-4 col-form-label text-md-right">{{ __('Registration No') }}</label>
    
                                <div class="col-md-6">
                                    <input id="stregno" type="text" class="form-control @error('stregno') is-invalid @enderror" name="stregno" value="{{ old('stregno') }}" required autocomplete="stregno">
    
                                    @error('Stregno')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="level" class="col-md-4 col-form-label text-md-right">{{ __('Level') }}</label>
    
                                <div class="col-md-6">
                                    <input id="level" type="text" class="form-control @error('level') is-invalid @enderror" name="level" value="{{ old('level') }}" required autocomplete="level">
    
                                    @error('level')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="acyear" class="col-md-4 col-form-label text-md-right">{{ __('Academic Year') }}</label>
    
                                <div class="col-md-6">
                                    <input id="acyear" type="text" class="form-control @error('acyear') is-invalid @enderror" name="acyear" value="{{ old('acyear') }}" required autocomplete="acyear">
    
                                    @error('acyear')
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
