<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/third.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html,body{
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

         

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
          
          
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif



            <div class="content">
                <div class="container-fluid pad float-left">
                    <!-- </div> -->
                    <!-- Counts Section -->
                    <section class="dashboard-counts section-padding">
                        <div class="container-fluid">
                            <div class="row">
                                <!-- HEADING-->
                                <div class="col-xl-6 col-md-6 col-6">
    
                                    <div class="ml-1 py-5 text-center">
                                        <h1>SMART</h1>
                                        <h1>ATTENDANCES</h1>
                                        <h1>MANAGEMENT</h1>
                                        <h1>SYSTEM</h1>
                                    </div>
    
                                    <div class="row ml-1 py-5">
                                        <!-- Count item widget-->
                                        <div class="col-xl-3 col-md-3 col-6">
                                            <div class="wrapper count-title d-flex"></div>
                                        </div>
                                        <!-- Count item widget-->
                                        <div class="col-xl-3 col-md-3 col-6">
                                            <div class="wrapper count-title d-flex">
                                                <div class="count-number">
                                                    <h2>400+</h2>
                                                    <div class="name">students</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Count item widget-->
                                        <div class="col-xl-3 col-md-3 col-6">
                                            <div class="wrapper count-title d-flex">
                                                <div class="count-number">
                                                    <h2>50+</h2>
                                                    <div class="name">lectures</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Count item widget-->
                                        <div class="col-xl-3 col-md-3 col-6">
                                            <div class="wrapper count-title d-flex">
                                                <div class="count-number">
                                                    <h2>100+</h2>
                                                    <div class="name">couress</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                </div>
                                <!-- IMAGE-->
                                <div class="col-xl-6 col-md-6 col-6">
                                    <div class="m-5">
                                        <img
                                            src="{{url('/image/phone.png')}}"
                                            width="80%"
                                            height="100%"
                                            class="rounded mx-auto d-block"
                                            alt="Responsive image">
                                    </div>
                                </div>
    
                            </div>
                        </div>
                    </section>
                    <!-- <hr style="width: 100%; color: black; height: 1px; background-color:black;"
                    /> -->
                </div>
             
                




            </div>

      


            
    </div>  
    
    </body>
</html>
