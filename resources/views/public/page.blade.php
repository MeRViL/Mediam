@extends('layouts.public')
@section('content')

    <div id="banner-area" class="banner-area" style="background-image:url({{ asset($post->category->big_image->url) }})">
        <div class="baner-background-top">
            <div class="banner-text">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 ">
                            <div class="banner-heading">
                                <h1 class="banner-title">{{ $post->category->name }}</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="/">Главная</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{ $post->category->name }}
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div><!-- Col end -->
                    </div><!-- Row end -->
                </div><!-- Container end -->
            </div><!-- Banner text end -->
        </div>
    </div><!-- Banner area end -->

    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="content-inner-page">
                        <h2 class="column-title mrt-0">{{ $post->name }}</h2>
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="latest-post-media">
                                    <a href="#" class="latest-post-img">
                                        <img loading="lazy" src="{{ asset($post->image->url) }}" alt="img">
                                    </a>
                                </div>
                                @isset($post->audio)
                                    <div id="player">
                                        <audio crossorigin preload="none">
                                            <source src="{{ asset($post->audio->url) }}" type="audio/mpeg">
                                        </audio>
                                    </div>
                                @endisset


                                <div class="gap-20"></div>
                            </div>
                            <div class="col-lg-12">
                              {!! $post->description !!}
                            </div>

                        </div>

                        <div class="gap-20"></div>


                        <div class="row">
                            <div class="col-md-12">

                            </div><!-- col end -->
                        </div><!-- 1st row end-->
                        <div class="gap-20"></div>

                    </div><!-- Content inner end -->
                </div><!-- Content Col end -->
            </div><!-- Main row end -->

            <div class="row">
                <div class="col-md-12">
                    <h3 class="column-title">Получите ответ на запрос в течение 1 часа.</h3>
                    <!-- h5 class="column-sub-title">Отправить запрос:</h5>-->
                    <div class="container" style="width:65%">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <button type="button" class="close" category-dismiss="alert">×</button>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" category-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                    </div>
                    <!-- contact form works with formspree.io  -->
                    <!-- contact form activation doc: https://docs.themefisher.com/constra/contact-form/ -->
                    <form method="category" action="#" class="space-y-4">
                        @csrf
                        <div class="error-container"></div>
                        <div class="form-group">
                            <label>Сообщение / Количество и площади объектов для музыкального оформления</label>
                            <textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="5"
                                required></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Имя</label>
                                    <input class="form-control form-control-name" name="name" id="name"
                                        placeholder="" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control form-control-email" name="email" id="email"
                                        placeholder="" type="email" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            {{-- {!! RecaptchaV3::initJs() !!}
              {!! RecaptchaV3::field('contact') !!} --}}
                            @error('g-recaptcha-response')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="text-right"><br>
                            <button class="btn btn-primary solid blank" type="submit">Отправить сообщение</button>
                        </div>
                    </form>
                </div>

            </div><!-- Content row -->

        </div><!-- Conatiner end -->
    </section><!-- Main container end -->

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
