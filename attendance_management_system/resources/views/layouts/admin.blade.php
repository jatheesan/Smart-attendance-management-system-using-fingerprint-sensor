<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>{{ config('app.name', 'Smart_Attendance_Management_System') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer="defer"></script>
        <!-- <script src="{{ asset('js/first.js') }}" defer></script> -->
        <script src="{{ asset('js/third.js') }}" defer="defer"></script>
        <script
            defer="defer"
            src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
            integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
            crossorigin="anonymous"></script>
        <script
            defer="defer"
            src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
            integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
            crossorigin="anonymous"></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- <link href="{{ asset('css/first.css') }}" rel="stylesheet"> -->
        <link href="{{ asset('css/third.css') }}" rel="stylesheet">
    </head>

    <body>
        <header class="header">
            <nav class="navbar navbar-toggleable-md navbar-dark pt-0 pb-0 ">
                <!-- <button class="navbar-toggler navbar-toggler-right" type="button"
                data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle
                navigation"> <span class="navbar-toggler-icon"></span> </button> -->
                <a class="navbar-brand p-0 mr-5" href="#"><img
                    src="{{url('/image/uojlogo.png')}}"
                    width="30"
                    height="30"
                    class="d-inline-block align-top"
                    alt="">
                    SAMS</a>
                <div class="float-left">
                    <a href="#" class="button-left">
                        <span class="fa fa-fw fa-bars"></span></a>
                </div>
                <div class="collapse navbar-collapse flex-row-reverse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown  user-menu">
                            <a
                                class="nav-link dropdown-toggle"
                                href="http://example.com"
                                id="navbarDropdownMenuLink"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false">
                                <img
                                    src="http://via.placeholder.com/160x160"
                                    class="user-image"
                                    alt="User Image">
                                <span class="hidden-xs">{{ Auth::user()->name }}</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a
                                    class="dropdown-item"
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form
                                    id="logout-form"
                                    action="{{ route('logout') }}"
                                    method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                                <!-- <a class="dropdown-item" href="#">Something else here</a> -->
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- <div class="page"> <div class="container-fluid pad"> -->

        <div class="page">
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
                                        width="100%"
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
            <main class="py-5 px-5 left position-absolute formalign">
                @yield('content')
            </main>
            <div class="main">
                <aside>
                    <div class="sidebar left position-absolute">
                        <div class="user-panel">
                            <div class="pull-left image">
                                <img
                                    src="http://via.placeholder.com/160x160"
                                    class="rounded-circle"
                                    alt="User Image">
                            </div>
                            <div class="pull-left info">
                                <p>{{ Auth::user()->name }}</p>
                                <a href="#">
                                    <i class="fa fa-circle text-success"></i>
                                    Online</a>
                            </div>
                        </div>
                        <ul class="list-sidebar bg-defoult">
                            <li>
                                <a href="#">
                                    <svg
                                        width="1.5em"
                                        height="1.5em"
                                        viewbox="0 0 16 16"
                                        class="bi bi-house-door"
                                        fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            fill-rule="evenodd"
                                            d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
                                        <path
                                            fill-rule="evenodd"
                                            d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                    </svg>
                                    <span class="nav-label">Dashboards</span></a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    data-toggle="collapse"
                                    data-target="#products"
                                    class="collapsed active">
                                    <svg
                                        width="1.5em"
                                        height="1.5em"
                                        viewbox="0 0 16 16"
                                        class="bi bi-person-plus"
                                        fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            fill-rule="evenodd"
                                            d="M8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10zM13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                                    </svg>
                                    <span class="nav-label">Register</span>
                                    <span class="fa fa-chevron-left pull-right"></span>
                                </a>
                                <ul class="sub-menu collapse" id="products">
                                    <li class="active">
                                        <a href="{{ url('/student') }}">Student</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/lecturer') }}">Lecturer</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/admin') }}">Admin</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ url('/course') }}">
                                    <svg
                                        width="1.5em"
                                        height="1.5em"
                                        viewbox="0 0 16 16"
                                        class="bi bi-journals"
                                        fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3 2h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2z"/>
                                        <path
                                            d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2zM1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                                    </svg>
                                    <span class="nav-label">Course</span></a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    data-toggle="collapse"
                                    data-target="#tables"
                                    class="collapsed active">
                                    <svg
                                        width="1.5em"
                                        height="1.5em"
                                        viewbox="0 0 16 16"
                                        class="bi bi-table"
                                        fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            fill-rule="evenodd"
                                            d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
                                    </svg>
                                    <span class="nav-label">Attendances</span>
                                    <span class="fa fa-chevron-left pull-right"></span></a>
                                <ul class="sub-menu collapse" id="tables">
                                    <li>
                                        <a href="">
                                            1S/1G</a>
                                    </li>
                                    <li>
                                        <a href="">
                                            2S/2G</a>
                                    </li>
                                    <li>
                                        <a href="">
                                            3S/3M/3G</a>
                                    </li>
                                    <li>
                                        <a href="">
                                            4S/4M</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fa fa-files-o"></i>
                                    <span class="nav-label">Setting</span></a>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
            <!-- <main class="py-5 px-5 left position-absolute">
                @yield('content')
            </main> -->
        </div>
    </body>
</html>