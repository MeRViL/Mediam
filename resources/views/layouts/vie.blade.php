<!DOCTYPE html>
<html lang="zxx">

<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="{{$setting->keywords ?? ''}}" />
    <meta name="description" content="{{$setting->keywords ?? ''}}" />
    <meta name="author" content="Media Meridian" />

    <!-- Title  -->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset($setting->favicon->url ?? '') }}" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('') }}vendor/vie/vie-dark/css/plugins.css" />

    <!-- Core Style Css -->
    <link rel="stylesheet" href="{{ asset('') }}vendor/vie/vie-dark/css/style.css" />
    @livewireStyles
    @yield('css')
</head>

<body>


    <!-- ==================== Start Loading ==================== -->

    <div class="loading">
        <span>З</span>
        <span>а</span>
        <span>г</span>
        <span>р</span>
        <span>у</span>
        <span>з</span>
        <span>к</span>
        <span>а</span>
    </div>

    <div id="preloader">
    </div>

    <!-- ==================== End Loading ==================== -->



    <!-- ==================== Start progress-scroll-button ==================== -->

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- ==================== End progress-scroll-button ==================== -->



    <!-- ==================== Start cursor ==================== -->

    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!-- ==================== End cursor ==================== -->



    <!-- ==================== Start Navbar ==================== -->

    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <!-- Logo -->
            <a class="logo" href="#">
                <img src="{{ asset($setting->logo->url ?? '') }}" alt="logo">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    @foreach ($menu as $item)
                        @if ($item->children->count() > 0)
                        <li class="nav-item dropdown" style="text-transform: uppercase;">
                            <a class="nav-link dropdown-toggle"  data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false">{{$item->name}}</a>
                            <div class="dropdown-menu">
                                @foreach ($item->children as $itemc)
                                <a class="dropdown-item" href="{{$itemc->url}}">{{$itemc->name}}</a>
                                @endforeach
                            </div>
                        </li>
                        @else
                        <li class="nav-item"><a style="text-transform: uppercase;" class="nav-link" href="{{$item->url}}">{{$item->name}}</a></li>
                        @endif
                        
                    @endforeach
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Home</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="index.html">Main Home</a>
                            <a class="dropdown-item" href="index2.html">Creative Agency</a>
                            <a class="dropdown-item" href="index5.html">Digital Agency</a>
                            <a class="dropdown-item" href="index4.html">Business One Page</a>
                            <a class="dropdown-item" href="index3.html">Corporate Business</a>
                            <a class="dropdown-item" href="index6.html">Modern Agency</a>
                            <a class="dropdown-item" href="index7.html">Freelancer</a>
                            <a class="dropdown-item" href="index8.html">Architecture</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Works</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="showcase.html">Showcase Parallax</a>
                            <a class="dropdown-item" href="showcase4.html">Showcase Carousel</a>
                            <a class="dropdown-item" href="showcase3.html">Showcase Circle</a>
                            <a class="dropdown-item" href="works.html">Portfolio Masonry</a>
                            <a class="dropdown-item" href="works2.html">Portfolio Filtering</a>
                            <a class="dropdown-item" href="works3.html">Portfolio Gallery</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Blog</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="blog.html">Blog Standerd</a>
                            <a class="dropdown-item" href="blog-list.html">Blog List</a>
                            <a class="dropdown-item" href="blog-grid.html">Blog Grid</a>
                            <a class="dropdown-item" href="blog-details.html">Blog Details</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>

    <!-- ==================== End Navbar ==================== -->



    <!-- ==================== Start Slider ==================== -->
    @yield('slider')
    

    <!-- ==================== End Slider ==================== -->



    <div id="app" class="main-content">
        
            @yield('content')
            @if ($category->posts->count() <= 1)
                {!! $category->posts->first()->description !!}                
            @endif

        

        <!-- ==================== End call-to-action ==================== -->



        <!-- ==================== Start Footer ==================== -->

        <footer class="sub-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="item md-mb50">
                            <div class="title">
                                <h5>Контакты</h5>
                            </div>
                            <ul>
                                <li>
                                    <span class="icon pe-7s-map-marker"></span>
                                    <div class="cont">
                                        {{$setting->address ?? ''}}
                                    </div>
                                </li>
                                <li>
                                    <span class="icon pe-7s-mail"></span>
                                    <div class="cont">
                                        <h6>Электронная почта</h6>
                                        <p><a
                                            href="mailto:{{$setting->email ?? ''}}">{{$setting->email ?? ''}}</a></p>
                                    </div>
                                </li>
                                <li>
                                    <span class="icon pe-7s-call"></span>
                                    <div class="cont">
                                        <h6>Телефон</h6>
                                        <p>{{$setting->phones ?? ''}}</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="item md-mb50">
                            <div class="title">
                                <h5>Recent News</h5>
                            </div>
                            <ul>
                                <li>
                                    <div class="img">
                                        <img src="{{ asset('') }}vendor/vie/vie-dark/img/blog/1.jpg" alt="">
                                    </div>
                                    <div class="sm-post">
                                        <p>The Start-Up Ultimate Guide to Make Your WordPress
                                            Journal.</p>
                                        <span class="date">14 sep 2021</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="img">
                                        <img src="{{ asset('') }}vendor/vie/vie-dark/img/blog/2.jpg" alt="">
                                    </div>
                                    <div class="sm-post">
                                        <p>The Start-Up Ultimate Guide to Make Your WordPress
                                            Journal.</p>
                                        <span class="date">14 sep 2021</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="subscribe">
                                        <input type="text" placeholder="Type Your Email">
                                        <span class="subs pe-7s-paper-plane"></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="item">
                            <div class="logo">
                                <img src="{{ asset($setting->logo->url ?? '') }}" alt="">
                            </div>
                            {{-- <div class="social">
                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                <a href="#0"><i class="fab fa-twitter"></i></a>
                                <a href="#0"><i class="fab fa-instagram"></i></a>
                                <a href="#0"><i class="fab fa-youtube"></i></a>
                            </div> --}}
                            <div class="copy-right">
                                <p>© 2021, Vie Template. Made with passion by <a href="#0">UI-ThemeZ</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- ==================== End Footer ==================== -->


    </div>






    <!-- jQuery -->
    <script src="{{asset('') }}vendor/vie/vie-dark/js/jquery-3.0.0.min.js"></script>
    <script src="{{asset('') }}vendor/vie/vie-dark/js/jquery-migrate-3.0.0.min.js"></script>

    <!-- plugins -->
    <script src="{{asset('') }}vendor/vie/vie-dark/js/plugins.js"></script>

    <!-- custom scripts -->
    <script src="{{asset('') }}vendor/vie/vie-dark/js/scripts.js"></script>

</body>

</html>