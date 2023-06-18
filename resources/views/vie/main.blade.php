@extends('layouts.vie')
<!-- ==================== Start about ==================== -->



@section('css')
    
@endsection
@section('slider')
<header class="slider slider-prlx fixed-slider text-center">
    <div class="swiper-container parallax-slider">
        <div class="swiper-wrapper">
            {{-- <div class="swiper-slide">
                <div class="bg-img valign" data-background="https://mediam.by/vendor/vie/vie-dark/img/slid/01.jpg" data-overlay-dark="6">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-10">
                                <div class="caption center mt-30">
                                    <h1>Business <span class="color-font">value</span> <br> <span
                                            class="color-font">through</span> digital <span
                                            class="color-font">products</span></h1>
                                    <a href="#0" class="butn bord curve mt-30">
                                        <span>Look More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-img valign" data-background="https://mediam.by/vendor/vie/vie-dark/img/slid/03.jpg" data-overlay-dark="6">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7 col-md-9">
                                <div class="caption center mt-30">
                                    <h1 class="color-font">Digital <br> Design Awards</h1>
                                    <p>If you need to redesign your new project, new visual strategy, ux structure
                                        or you do have some cool ideas for collaboration.</p>
                                    <a href="#0" class="butn bord curve mt-30">
                                        <span>Look More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="bg-img valign" data-background="https://mediam.by/vendor/vie/vie-dark/img/slid/02.jpg" data-overlay-dark="6">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7 col-md-9">
                                <div class="caption center mt-30">
                                    <h1 class="color-font">Original Solutions</h1>
                                    <p>If you need to redesign your new project, new visual strategy, ux structure
                                        or you do have some cool ideas for collaboration.</p>
                                    <a href="#0" class="butn bord curve mt-30">
                                        <span>Look More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

             @foreach ($sliders as $slider)
            {{-- <div class="banner-carousel-item" style="background-image:url({{ asset('storage/'.$slider->image->url) }})">
                <div class="text-{{ $slider['align'] }} slider-content">
                    <div class="container h-100">
                        <div class="row align-items-center h-100">
                            <div class="text-center col-md-12">
                                <h3 class="slide-sub-title" data-animation-in="slideInRight">{{ $slider->name }}</h3>
                                <h2 class="slide-title" data-animation-in="slideInLeft">{{ $slider->description }}</h2>

                                <p data-animation-in="slideInLeft" data-duration-in="1.2">
                                    {!! $slider['text'] !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="swiper-slide">
                <div class="bg-img valign" data-background="{{ asset('storage/'.$slider->image->url) }}" data-overlay-dark="6">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7 col-md-9">
                                <div class="caption center mt-30">
                                    <h1 class="color-font">{{ $slider->name }}</h1>
                                    <p>{{ $slider->description }}</p>
                                    <a href="{{ $slider->url }}" class="butn bord curve mt-30">
                                        <span>{{ $slider->action }}</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        @endforeach
        </div>

        <!-- slider setting -->
        <div class="setone setwo">
            <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                <i class="fas fa-chevron-right"></i>
            </div>
            <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                <i class="fas fa-chevron-left"></i>
            </div>
        </div>
        <div class="swiper-pagination top botm "></div>

        {{-- <div class="social-icon">
            <a href="#0"><i class="fab fa-facebook-f"></i></a>
            <a href="#0"><i class="fab fa-twitter"></i></a>
            <a href="#0"><i class="fab fa-behance"></i></a>
            <a href="#0"><i class="fab fa-pinterest-p"></i></a>
        </div> --}}
    </div>
</header>
@endsection
@section('content')
    {!! $post->description ?? "" !!}
@endsection
@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log('#player')
            GreenAudioPlayer.init({
                selector: '#player',
                stopOthersOnPlay: true,
                enableKeystrokes: true
            });
        });
    </script>
@endsection
