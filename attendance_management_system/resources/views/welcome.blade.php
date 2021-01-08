<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="SMART, Attendance ManagmentSystem">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Smart Attendance Management System</title>
    <link rel = "icon" href ="http://lms.jfn.ac.lk/lms/pluginfile.php/1/core_admin/logo/0x150/1585272725/UoJ_logo.png" type = "image/x-icon"> 
        
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/nicepage.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" media="screen">
    <script class="u-script" type="text/javascript" src="{{ asset('js/jquery.js') }}" defer="">
    </script>
    <script class="u-script" type="text/javascript" src="{{ asset('js/nicepage.js') }}" defer="">
    </script>
    <meta name="generator" content="Nicepage 3.3.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">


    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "",
            "url": "index.html",
            "logo": "{{ asset('image/uojlogo.png') }}"
        }

    </script>
    <meta property="og:title" content="login">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
</head>

<body class="u-body u-overlap u-overlap-contrast u-overlap-transparent">
    <header class="u-clearfix u-header u-header" id="sec-0b4f">
        <div class="u-clearfix u-sheet u-sheet-1">
            <a href="http://www.jfn.ac.lk/" class="u-align-left u-image u-logo u-image-1" data-image-width="300"
                data-image-height="300">
                <img src="{{ asset('image/uojlogo.png') }}" class="u-logo-image u-logo-image-1"
                    data-image-width="64">
            </a>
            <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
                <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700;">
                    <a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                        href="#">
                        <svg>
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
                        </svg>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;">
                                    <rect y="1" width="16" height="2"></rect>
                                    <rect y="7" width="16" height="2"></rect>
                                    <rect y="13" width="16" height="2"></rect>
                                </symbol>
                            </defs>
                        </svg>
                    </a>
                </div>
                <div class="u-custom-menu u-nav-container">
                    <ul class="u-nav u-spacing-20 u-unstyled u-nav-1">
                        {{--<li class="u-nav-item"><a
                                class="u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-custom-color-2"
                                href="login.html" target="_blank" style="padding: 10px;">login</a>
                        </li>
                        <li class="u-nav-item"><a
                                class="u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-custom-color-2"
                                target="_blank" style="padding: 10px;">register</a>
                        </li>--}}
                        @if (Route::has('login'))
                            <div class="top-right links">
                            @auth
                                <a class="u-button-style u-text-active-palette-1-base u-text-hover-custom-color-2" href="{{ url('/home') }}">Home</a>
                        @else
                            <a class="u-button-style u-text-active-palette-1-base u-text-hover-custom-color-2" href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a class="u-button-style u-text-active-palette-1-base u-text-hover-custom-color-2" href="{{ route('register') }}">Register</a>
                            @endif
                            @endauth
                            </div>
                        @endif
                    </ul>
                </div>
                <div class="u-custom-menu u-nav-container-collapse">
                    <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                                {{--<li class="u-nav-item"><a class="u-button-style u-nav-link" href="login.html"
                                        target="_blank" style="padding: 10px 0px;">login</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" target="_blank"
                                        style="padding: 10px 0px;">register</a>
                                </li>--}}
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
                            </ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
        </div>
    </header>
    <section class="u-align-center u-clearfix u-custom-color-2 u-valign-middle u-section-1" id="carousel_990d">
        <img class="u-expand-resize u-expanded-width u-image u-image-1"
            src="{{ asset('image/uni2.jpg') }}">
        <div class="u-container-style u-expanded-width u-gradient u-group u-group-1">
            <div class="u-container-layout u-container-layout-1">
                <h1 class="u-align-center u-custom-font u-font-oswald u-text u-text-custom-color-1 u-text-1">SMART</h1>
                <h2 class="u-align-center u-text u-text-white u-text-2" data-animation-name="bounceIn"
                    data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">
                    <span style="font-size: 3.75rem;">Attendance </span>
                    <span style="font-size: 3.75rem;">Managment</span>
                    <br>
                    <span style="font-size: 3.75rem;">System</span>
                    <br>
                </h2>
            </div>
        </div>
    </section>


    <footer class="u-align-center u-clearfix u-custom-color-1 u-footer u-footer" id="sec-23aa">
        <div class="row">
                <div class="col-sm-6 text-left">

                  <p class="u-small-text u-text">&copy;2020 DEPARTMENT OF COMPUTER SCIENCE ALL RIGHTS RESERVED - JAFFNA</p>

                </div>
                <div class="col-sm-6 text-right">
                  <p class="u-small-text u-text"><a href="http://www.jfn.ac.lk/" class="external">UNIVERSITY OF JAFFNA</a></p>
                  <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                </div>
              </div>
    </footer>
</body>

</html>
