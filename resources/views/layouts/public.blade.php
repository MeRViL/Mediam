
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!-- Basic Page Needs
================================================== -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Mobile Specific Metas
================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content="{{$setting->keywords}}">
    <meta name="keywords" content="{{$setting->keywords}}">
    <meta name="author" content="Media Meridian">

    <meta property="og:type" content="website">
    <meta property="og:title" content="MUZFON">
    <meta property="og:description"
        content="{{$setting->keywords}} {{$setting->phones}}">
    <meta property="og:image" content="{{ asset('') }}vendor/constra/images/logopart.svg">
    <meta property="og:url" content="https://muzfon.by">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

    <!-- Favicon
================================================== -->
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset($setting->favicon->url) }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('') }}vendor/constra/favicon_package/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('') }}vendor/constra/favicon_package/favicon-16x16.png">
    <link rel="manifest" href="{{ asset('') }}vendor/constra/favicon_package/site.webmanifest">
    <link rel="mask-icon" href="{{ asset('') }}vendor/constra/favicon_package/safari-pinned-tab.svg"
        color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- CSS
================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('') }}vendor/constra/plugins/bootstrap/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('') }}vendor/constra/plugins/fontawesome/css/all.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="{{ asset('') }}vendor/constra/plugins/animate-css/animate.css">
    <!-- slick Carousel -->
    <link rel="stylesheet" href="{{ asset('') }}vendor/constra/plugins/slick/slick.css">
    <link rel="stylesheet" href="{{ asset('') }}vendor/constra/plugins/slick/slick-theme.css">
    <!-- Colorbox -->
    <link rel="stylesheet" href="{{ asset('') }}vendor/constra/plugins/colorbox/colorbox.css">
    <!-- Template styles-->
    <link rel="stylesheet" href="{{ asset('') }}vendor/constra/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}vendor/green-audio-player/css/green-audio-player.css">
   
    <!-- Цвета сайта
    #83A638
    #F2A30F
    #F2780C
    #D93D1A
    #F2F2F2 -->
    
   
    
    @livewireStyles
    @yield('css')
</head>

<body>
    <div class="body-inner">

        <div id="top-bar" class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <ul class="text-center top-info text-md-left">
                            <li><i class="fas fa-map-marker-alt"></i>
                                <p class="info-text">{{$setting->address}}</p>
                            </li>
                        </ul>
                    </div>
                    <!--/ Top info end -->

                    <div class="text-center col-lg-4 col-md-4 top-social text-md-right">
                        <ul class="list-unstyled">
                            <li>
                                <a title="Facebook" href="https://www.facebook.com/MUZFONBY">
                                    <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                                <!--/</a>
                                <a title="VK" href="https://vk.com/public204384303">
                                    <span class="social-icon"><i class="fab fa-vk"></i></span>
                                </a>-->
                                <a title="Telegram" href="https://telegram.me/MUZFONBY">
                                    <span class="social-icon"><i class="fab fa-telegram"></i></span>
                                </a>
                                <a title="Viber" href="viber://chat?number=%2B375293994066">
                                    <span class="social-icon"><i class="fab fa-viber"></i></span>
                                </a>


                            </li>
                        </ul>
                    </div>
                    <!--/ Top social end -->
                </div>
                <!--/ Content row end -->
            </div>
            <!--/ Container end -->
        </div>
        <!--/ Topbar end -->
        <!-- Header start -->
        <header id="header" class="header-one">
            <div class="bg-white">
                <div class="container">
                    <div class="logo-area">
                        <div class="row align-items-center">
                            <div class="mb-3 text-center logo col-lg-3 text-lg-left mb-md-5 mb-lg-0">
                                <a class="d-block" href="/">
                                    <img loading="lazy" src="{{ asset($setting->logo->url) }}"
                                        alt="Constra">
                                </a>
                            </div><!-- logo end -->

                            <div class="col-lg-9 header-right">
                                <ul class="top-info-box">
                                    <li>
                                        <div class="info-box">
                                            <div class="info-box-content">
                                                <p class="info-box-title">Телефон</p>
                                                <p class="info-box-subtitle"><a href="tel:+{{$setting->phones}}"><i
                                                            class="fas fa-phone "></i> {{$setting->phones}} </a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info-box">
                                            <div class="info-box-content">
                                                <p class="info-box-title">Email</p>
                                                <p class="info-box-subtitle"><a
                                                        href="mailto:{{$setting->email}}">{{$setting->email}}</a></p>
                                            </div>
                                        </div>
                                    </li>
                                </ul><!-- Ul end -->
                            </div><!-- header right end -->
                        </div><!-- logo area end -->

                    </div><!-- Row end -->
                </div><!-- Container end -->
            </div>

            <div class="site-navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="p-0 navbar navbar-expand-lg navbar-dark">
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div id="navbar-collapse" class="collapse navbar-collapse">
                                    <ul class="mr-auto nav navbar-nav">
                                        @foreach ($menu as $item)
                                        <li class="nav-item"><a class="nav-link" href="{{$item->url}}">{{$item->name}}</a></li>
                                        @endforeach
                                        
                                        
                                        {{-- <li class="nav-item"><a class="nav-link" href="/licence">Лицензия</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="/music">Музыка</a></li>
                                        <li class="nav-item"><a class="nav-link" href="/price">Цены</a></li>
                                        <li class="nav-item"><a class="nav-link" href="/news">Новости</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="/contact">Контакты</a></li> --}}
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!--/ Col end -->
                    </div>
                    <!--/ Row end -->


                </div>
                <!--/ Container end -->

            </div>
            <!--/ Navigation end -->
        </header>
        <!--/ Header end -->
        <div id="app">
            @yield('content')
        </div>


        <footer id="footer" class="footer bg-overlay">
            <div class="footer-main">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-4 col-md-6 footer-widget footer-about">
                            <h3 class="widget-title">О нас</h3>
                            <img loading="lazy" class="footer-logo"
                                src="{{ asset($setting->logo->url) }}" alt="Constra">
                            <p>MUZFON - и ваш бизнес звучит профессионально! </p>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="https://facebook.com/MUZFONBY" aria-label="Facebook"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                     <!--<li><a href="https://vk.com/public204384303" aria-label="VK"><i
                                                class="fab fa-vk"></i></a></li>-->
                                    <li><a href="https://telegram.me/MUZFONBY" aria-label="Telegram"><i
                                                class="fab fa-telegram"></i></a></li>
                                    <li><a href="viber://chat?number=%2B{{$setting->phone}}" aria-label="Github"><i
                                                class="fab fa-viber"></i></a></li>
                                    <li><a href="e-mail:{{$setting->email}}"><i class="fas fa-box"> {{$setting->email}} </i>
                                        </a></li>
                                    <li><a href="tel:+{{$setting->phones}}"><i class="fas fa-phone "> {{$setting->phones}} </i>
                                        </a></li>
                                   
                                </ul>
                            </div><!-- Footer social end -->
                        </div><!-- Col end -->

                        <div class="mt-5 col-lg-4 col-md-6 footer-widget mt-md-0">
                            <h3 class="widget-title">График работы</h3>
                            <div class="working-hours">
                                {!! $setting->work_time!!}
                            </div>
                        </div><!-- Col end -->

                        <div class="mt-5 col-lg-4 col-md-6 mt-lg-0 footer-widget">
                            <h3 class="widget-title">Услуги</h3>
                            <ul class="list-arrow">
                                <li>Фоновая музыка для Торгового центра</li>
                                <li>Фоновая музыка для Магазина</li>
                                <li>Фоновая музыка для АЗС</li>
                                <li>Фоновая музыка для Медицинского центра</li>
                                <li>Фоновая музыка для Банка</li>
                                <li>Фоновая музыка для Салона красоты</li>

                            </ul>
                        </div><!-- Col end -->
                    </div><!-- Row end -->
                </div><!-- Container end -->
            </div><!-- Footer main end -->

            <div class="copyright">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="text-center copyright-info">
                                <span>Copyright &copy; 2013 - 
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script>, Yauhen
                                </span>
                            </div>
                        </div>
                    </div><!-- Row end -->

                    <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
                        <button class="btn btn-primary" title="Наверх">
                            <i class="fa fa-angle-double-up"></i>
                        </button>
                    </div>

                </div><!-- Container end -->
            </div><!-- Copyright end -->
        </footer><!-- Footer end -->


        <!-- Javascript Files
  ================================================== -->

        <!-- initialize jQuery Library -->
        <script src="{{ asset('') }}vendor/constra/plugins/jQuery/jquery.min.js"></script>
        <!-- Bootstrap jQuery -->
        <script src="{{ asset('') }}vendor/constra/plugins/bootstrap/bootstrap.min.js" defer></script>
        <!-- Slick Carousel -->
        <script src="{{ asset('') }}vendor/constra/plugins/slick/slick.min.js"></script>
        <script src="{{ asset('') }}vendor/constra/plugins/slick/slick-animation.min.js"></script>
        <!-- Color box -->
        <script src="{{ asset('') }}vendor/constra/plugins/colorbox/jquery.colorbox.js"></script>
        <!-- shuffle -->
        <script src="{{ asset('') }}vendor/constra/plugins/shuffle/shuffle.min.js" defer></script>
        @livewireScripts

        <!-- Google Map API Key-->
        {{-- <script src="{{ asset('') }}vendor/constra/https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script> --}}
        <!-- Google Map Plugin-->
        {{-- <script src="{{ asset('') }}vendor/constra/plugins/google-map/map.js" defer></script> --}}

        <!-- Template custom -->
        <script src="{{ asset('') }}vendor/constra/js/script.js"></script>
        <script src="{{ asset('') }}vendor/green-audio-player/js/green-audio-player.js"></script>

        @yield('js')
    </div><!-- Body inner end -->
</body>

</html>
