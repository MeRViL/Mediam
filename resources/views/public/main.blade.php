@extends('layouts.public')
@php
// $sliders = [
//     [
//         'align' => 'center',
//         'title' => 'Музыка для бизнеса',
//         'sub_title' => 'фон для ваших продаж',
//         'text' => '',
//         'image' => 'vendor/constra/images/slider-main/slider3.jpg',
//     ],
//     [
//         'align' => 'center',
//         'title' => 'Интеграция рекламы',
//         'sub_title' => 'размещайте свою рекламу, а не конкурентов',
//         'text' => '',
//         'image' => 'vendor/constra/images/slider-main/slider4.jpg',
//     ],
// ];
$services = [
    [
        'image' => 'vendor/constra/images/icon-image/play-button.svg',
        'title' => 'Музыка онлайн',
        'description' => 'Плейлист для каждого объекта получаете в виде уникальной интернет-ссылки. Для её запуска подойдёт любое устройство с интернетом: ПК, планшет, телефон. Сотрудник на объекте подключается к музыкальному эфиру в один клик.',
    ],
    [
        'image' => 'vendor/constra/images/icon-image/play-button.svg',
        'title' => 'Музыка на плеере',
        'description' => 'Плейлист для каждого объекта получаете на плеере. Музыка звучит без интернета. Включение/выключение плеера автоматическое по расписанию.',
    ],
    [
        'image' => 'vendor/constra/images/icon-image/play-button.svg',
        'title' => 'Фоновая музыка',
        'description' => 'Подбор хорошей музыки - кропотливый труд. Наши музыкальные редакторы постоянно ведут работу по сбору подходящих треков, чтобы создать идеальный фон для вашего бизнеса.',
    ],
    [
        'image' => 'vendor/constra/images/icon-image/play-button.svg',
        'title' => 'Аудио-ролики для уникальности эфира',
        'description' => 'Делаем брендовое оформление вашего музыкального эфира. Изготавливаем аудио-ролики "одежды" эфира. Специальные цены для клиентов фоновой музыки.',
    ],  
];
$musics = [
    [
        'name' => 'Магазинам',
        'photo' => 'vendor/music/01_stores.png',
        'demo' => 'vendor/music/mag0010 Sinan Kaya - No Negotiation (Original Mix).mp3',
    ],
    [
        'name' => 'Торговым центрам',
        'photo' => 'vendor/music/02_malls.png',
        'demo' => 'vendor/music/tc0004 AcousticBro - Calm Future Bass.mp3',
    ],
    [
        'name' => 'АЗС',
        'photo' => 'vendor/music/04_AZS_small.png',
        'demo' => 'vendor/music/azs0005 Alex Tasty - Be My Inspiration.mp3',
    ],
    [
        'name' => 'Банкам',
        'photo' => 'vendor/music/04_banks.png',
        'demo' => 'vendor/music/bank0008 Andreas Beutling - Be in Love.mp3',
    ],
    [
        'name' => 'Медицинским центрам',
        'photo' => 'vendor/music/05_med.png',
        'demo' => 'vendor/music/med0002 Oaskc - Start to Sleep.mp3',
    ],
    [
        'name' => 'Кафе',
        'photo' => 'vendor/music/06_cafe.png',
        'demo' => 'vendor/music/cafe0003 Henryk Wieczynski - Charleston.mp3',
    ],
];
$clients = [
    [
        'image' => 'vendor/constra/images/clients/client1.png',
    ],
    [
        'image' => 'vendor/constra/images/clients/client2.png',
    ],
    [
        'image' => 'vendor/constra/images/clients/client3.png',
    ],
    [
        'image' => 'vendor/constra/images/clients/client4.png',
    ],
    [
        'image' => 'vendor/constra/images/clients/client5.png',
    ],
    [
        'image' => 'vendor/constra/images/clients/client6.png',
    ],
];
@endphp
@section('css')
    <style>
        .ts-facts-img svg path {
            fill: #83A638;
        }

    </style>
@endsection
@section('content')
    <div class="mb-0 banner-carousel banner-carousel-1">
        @foreach ($sliders as $slider)
            <div class="banner-carousel-item" style="background-image:url({{ asset('storage/'.$slider->image->url) }})">
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
            </div>
        @endforeach

    </div>
    <section class="call-to-action-box no-padding">
        <div class="container">
            <div class="action-style-box">
                <div class="row align-items-center">
                    <div class="text-center col-md-8 text-md-left">
                        <div class="call-to-action-text">
                            <h3 class="action-title">Получите консультацию удобным способом</h3>
                        </div>
                    </div><!-- Col end -->
                    <div class="mt-3 text-center col-md-4 text-md-right mt-md-0">
                        <div class="call-to-action-btn">
                            <a class="btn btn-dark" href="/contact">Контакты</a>
                        </div>
                    </div><!-- col end -->
                </div><!-- row end -->
            </div><!-- Action style box -->
        </div><!-- Container end -->
    </section><!-- Action end -->
    <section id="ts-features" class="ts-features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ts-intro">
                        <h2 class="into-title">О нас</h2>
                        <h3 class="into-sub-title">Музыка для бизнеса</h3>
                        <p>Музыкальная коллекция более 150 000 треков.</p>
                        <p>Гарантия соблюдения авторских прав.</p>
                        <p>Ваш рекламный эфир без конкурентов.</p>
                    </div><!-- Intro box end -->

                    <div class="gap-20"></div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="ts-service-box">
                                <span class="ts-service-icon">
                                    <i class="fas fa-trophy"></i>
                                </span>
                                <div class="ts-service-box-content">
                                    <h3 class="service-box-title">У нас отличная репутация</h3>
                                </div>
                            </div><!-- Service 1 end -->
                        </div><!-- col end -->

                        <div class="col-md-6">
                            <div class="ts-service-box">
                                <span class="ts-service-icon">
                                    <i class="fas fa-sliders-h"></i>
                                </span>
                                <div class="ts-service-box-content">
                                    <h3 class="service-box-title">Готовы с сотрудничеству</h3>
                                </div>
                            </div><!-- Service 2 end -->
                        </div><!-- col end -->
                    </div><!-- Content row 1 end -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="ts-service-box">
                                <span class="ts-service-icon">
                                    <i class="fas fa-thumbs-up"></i>
                                </span>
                                <div class="ts-service-box-content">
                                    <h3 class="service-box-title">Соблюдаем договорённости</h3>
                                </div>
                            </div><!-- Service 1 end -->
                        </div><!-- col end -->

                        <div class="col-md-6">
                            <div class="ts-service-box">
                                <span class="ts-service-icon">
                                    <i class="fas fa-users"></i>
                                </span>
                                <div class="ts-service-box-content">
                                    <h3 class="service-box-title">Команда профессионалов</h3>
                                </div>
                            </div><!-- Service 2 end -->
                        </div><!-- col end -->
                    </div><!-- Content row 1 end -->
                </div><!-- Col end -->

                <div class="mt-4 col-lg-6 mt-lg-0">
                    <h3 class="into-sub-title">Наши преимущества</h3>
                    <p>Мы занимаемся фоновой музыкой для бизнеса с 2013 года. Поможем решить задачи по музыкальному оформлению и аудио-маркетингу. Получите собственный рекламный канал без конкурентов.</p>

                    <div class="accordion accordion-group" id="our-values-accordion">
                        <div class="card">
                            <div class="p-0 bg-transparent card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="text-left btn btn-block" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Качество
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#our-values-accordion">
                                <div class="card-body">
                                    Нам доверяют крупные компании и бренды с мировым именем.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="p-0 bg-transparent card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="text-left btn btn-block collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Скорость
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#our-values-accordion">
                                <div class="card-body">
                                    Создание и настройка плей-листа занимает 1-2 дня.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="p-0 bg-transparent card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="text-left btn btn-block collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Цена
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#our-values-accordion">
                                <div class="card-body">
                                    Зависит только от площади помещения. Скидки для сетей магазинов и Торговых центров.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Accordion end -->

                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- Feature are end -->
    <section id="facts" class="facts-area dark-bg">
        <div class="container">
            <div class="facts-wrapper">
                <div class="row">
                    <div class="col-md-3 col-sm-6 ts-facts">
                        <div class="ts-facts-img">
                            <img loading="lazy" style="width:60px;"
                                src="{{ asset('') }}vendor/constra/images/icon-image/play-button.svg" alt="facts-img">
                        </div>
                        <div class="ts-facts-content">
                            <h2 class="ts-facts-num"><span class="counterUp" data-count="152896">0</span></h2>
                            <h3 class="ts-facts-title">Музыкальных треков</h3>
                        </div>
                    </div><!-- Col end -->

                    <div class="mt-5 col-md-3 col-sm-6 ts-facts mt-sm-0">
                        <div class="ts-facts-img">
                            <img loading="lazy" style="width:60px;"
                                src="{{ asset('') }}vendor/constra/images/icon-image/microphone.svg" alt="facts-img">
                        </div>
                        <div class="ts-facts-content">
                            <h2 class="ts-facts-num"><span class="counterUp" data-count="530">0</span></h2>
                            <h3 class="ts-facts-title">Роликов в эфире</h3>
                        </div>
                    </div><!-- Col end -->

                    <div class="mt-5 col-md-3 col-sm-6 ts-facts mt-md-0">
                        <div class="ts-facts-img">
                            <img loading="lazy" style="width:60px; "
                                src="{{ asset('') }}vendor/constra/images/icon-image/clock.svg" alt="facts-img">
                        </div>
                        <div class="ts-facts-content">
                            <h2 class="ts-facts-num"><span class="counterUp" data-count="7644">0</span></h2>
                            <h3 class="ts-facts-title">Часа музыки</h3>
                        </div>
                    </div><!-- Col end -->

                    <div class="mt-5 col-md-3 col-sm-6 ts-facts mt-md-0">
                        <div class="ts-facts-img">
                            <img loading="lazy" style="width:60px;"
                                src="{{ asset('') }}vendor/constra/images/icon-image/like.svg" alt="facts-img">
                        </div>
                        <div class="ts-facts-content">
                            <h2 class="ts-facts-num"><span class="counterUp" data-count="365000">0</span></h2>
                            <h3 class="ts-facts-title">Слушателей эфира</h3>
                        </div>
                    </div><!-- Col end -->

                </div> <!-- Facts end -->
            </div>
            <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </section><!-- Facts end -->
    <section id="ts-service-area" class="pb-0 ts-service-area">
        <div class="container">
            <div class="text-center row">
                <div class="col-12">
                    <h2 class="section-title">Мы специалисты в том,</h2>
                    <h3 class="section-sub-title">Что мы делаем</h3>
                </div>
            </div>
            <!--/ Title row end -->

            <div class="row">
                @foreach ($services as $service)
                    <div class="ts-service-box d-flex col-lg-6">
                        <div class="ts-service-box-img">
                            <img loading="lazy" style="height:60px; " src="{{ asset($service['image']) }}"
                                alt="service-icon">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title">{{ $service['title'] }}</h3>
                            <p>{{ $service['description'] }}</p>
                        </div>
                    </div><!-- Service 1 end -->
                @endforeach


            </div><!-- Content row end -->

        </div>
        <!--/ Container end -->
    </section><!-- Service end -->
    <section id="project-area" class="project-area solid-bg">
        <div class="container">
            <div class="text-center row">
                <div class="col-lg-12">

                    <h3 class="section-sub-title">Примеры музыки</h3>
                </div>
            </div>
            <!--/ Title row end -->

            <div class="row">
                @foreach ($musics as $music)
                    @include('public.partials.music_card')
                @endforeach
            </div>
            <!--/ Content row end -->
            <div class="mt-4 text-center general-btn">
                <a class="btn btn-primary" href="/voices">Больше примеров</a>
            </div>
        </div>
        <!--/ Container end -->
    </section><!-- Project area end -->

    <section id="facts" class="facts-area dark-bg">
        <div class="container">
            <div class="facts-wrapper">
                <div class="row">
                    <div class="mt-5 col-md-12 col-sm-6 ts-facts mt-md-0">
                        <div class="ts-facts-img">
                            <img loading="lazy" style="width:60px;"
                                src="{{ asset('') }}vendor/constra/images/icon-image/like.svg" alt="facts-img">
                        </div>
                        <div class="ts-facts-content">
                        <!-- <h2 class="ts-facts-num"><span class="counterUp" data-count="3">0</span></h2>-->
                            <h2 class="ts-facts-num" href="/price">3 рубля в день!<p>За 3500 часов фоновой музыки +ваша реклама.</h2></p>                        
                        </div>
                    </div><!-- Col end -->

                </div> <!-- Facts end -->
            </div>
            <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </section><!-- Facts end -->

    <section class="content">
        <div class="container">
        <div class="text-center row">
                <div class="col-lg-12">
                    <h3 class="section-sub-title">Отзывы</h3>
                </div>
            </div>
                               <div id="testimonial-slide" class="testimonial-slide">
                        <div class="item">
                            <div class="quote-item">
                                <span class="quote-text">
                                    Учли все наши пожелания к плей-листу. Огромное спасибо!
                                </span>

                                <div class="quote-item-footer">
                                    <img loading="lazy" class="testimonial-thumb" style="width:60px;"
                                        src="{{ asset('') }}vendor/constra/images/icon-image/like.svg"
                                        alt="testimonial">
                                    <div class="quote-item-info">
                                        <h3 class="quote-author">ТЦ "Материк", Минск</h3>
                                        <span class="quote-subtext">Проект: Плейлист новогодней музыки для экспозиции подвижных фигур.</span>
                                    </div>
                                </div>
                            </div><!-- Quote item end -->
                        </div>
                        <!--/ Item 1 end -->

                        <div class="item">
                            <div class="quote-item">
                                <span class="quote-text">
                                    Отличная музыка! Быстро запустили наш проект и все ролики добавили. Получилось Радио "BURVIN"))
                                </span>

                                <div class="quote-item-footer">
                                    <img loading="lazy" class="testimonial-thumb" style="width:60px;"
                                        src="{{ asset('') }}vendor/constra/images/icon-image/like.svg"
                                        alt="testimonial">
                                    <div class="quote-item-info">
                                        <h3 class="quote-author">Магазины одежды "BURVIN", Беларусь</h3>
                                        <span class="quote-subtext"> Проект: Сезонный плейлист для сети магазинов.</span>
                                    </div>
                                </div>
                            </div><!-- Quote item end -->
                        </div>
                        <!--/ Item 2 end -->

                        <div class="item">
                            <div class="quote-item">
                                <span class="quote-text">
                                    Спасибо, всей команде! С вами приятно сотрудничать!
                                </span>

                                <div class="quote-item-footer">
                                    <img loading="lazy" class="testimonial-thumb" style="width:60px;"
                                        src="{{ asset('') }}vendor/constra/images/icon-image/like.svg"
                                        alt="testimonial">
                                    <div class="quote-item-info">
                                        <h3 class="quote-author">Магазины "Вияр", Беларусь</h3>
                                        <span class="quote-subtext">Проект: Фоновая музыка для сети магазинов.</span>
                                    </div>
                                </div>
                            </div><!-- Quote item end -->
                        </div>
                        <!--/ Item 3 end -->

                        <div class="item">
                            <div class="quote-item">
                                <span class="quote-text">
                                    Озвучили и кафе, и торговый центр. Музыка радует) спасибо
                                </span>

                                <div class="quote-item-footer">
                                    <img loading="lazy" class="testimonial-thumb" style="width:60px;"
                                        src="{{ asset('') }}vendor/constra/images/icon-image/like.svg"
                                        alt="testimonial">
                                    <div class="quote-item-info">
                                        <h3 class="quote-author">ТЦ «Анженко», Беларусь, Светлогорск</h3>
                                        <span class="quote-subtext">Проект: Фоновая музыка.</span>
                                    </div>
                                </div>
                            </div><!-- Quote item end -->
                        </div>
                        <!--/ Item 4 end -->

                    </div>
                    <!--/ Testimonial carousel end-->
                </div><!-- Col end -->

                <!--/ <div class="mt-5 col-lg-6 mt-lg-0">

                    <h3 class="column-title">Наши клиенты</h3>

                    <div class="row all-clients">
                        @foreach ($clients as $client)
                            <div class="col-sm-4 col-6">
                                <figure class="clients-logo">
                                    <a href="#!"><img loading="lazy" class="img-fluid"
                                            src="{{ asset($client['image']) }}" alt="clients-logo" /></a>
                                </figure>
                            </div>
                        @endforeach


                    </div>
                </div>-->

                </div><!-- Col end -->
            </div>
            <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </section><!-- Content end -->
    <section class="content">
        <div class="container">
        <div class="text-center row">
                <div class="col-lg-12">
                    <h3 class="section-sub-title">Ответы на вопросы</h3>
                    <p></p>
                </div>
            </div>
                    <div class="accordion accordion-group" id="our-values-accordion">
                        <div class="card">
                            <div class="p-0 bg-transparent card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="text-left btn btn-block" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Как часто обновляется музыка?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#our-values-accordion">
                                <div class="card-body">
                                Музыкальная коллекция пополняется ежемесячно. Музыкальный плейлист для ваших объектов будет подбираться, исходя из маркетинговых задач: с учётом целевой аудитории, часов пик покупательского потока. Звукорежиссёр составляет плей-лист и корректирует его, руководствуясь полученной от вас обратной связью.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="p-0 bg-transparent card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="text-left btn btn-block collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Музыка звучит всегда в одном порядке?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#our-values-accordion">
                                <div class="card-body">
                                    Нет. Порядок звучания композиций ежедневно изменяется в автоматическом режиме.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="p-0 bg-transparent card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="text-left btn btn-block collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Размещение рекламы есть?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#our-values-accordion">
                                <div class="card-body">
                                    Да. Фоновая музыка – ваш собственный рекламный эфир без конкурентов. Ролики можно размещать по всей торговой сети, в выборочной группе или только на одном объекте. Количество размещаемых роликов, в том числе роликов рекламодателей, количество выходов роликов в час – на стоимость услуг не влияют. 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="p-0 bg-transparent card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <button class="text-left btn btn-block collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Можно увидеть, где размещён ролик?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-parent="#our-values-accordion">
                                <div class="card-body">
                                    Да. Вы получаете возможность контролировать онлайн медиа-план размещения роликов для каждого из объектов.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="p-0 bg-transparent card-header" id="headingFive">
                                <h2 class="mb-0">
                                    <button class="text-left btn btn-block collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        У вас можно заказать ролик?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                data-parent="#our-values-accordion">
                                <div class="card-body">
                                Да. Доступна услуга изготовления роликов - со скидкой для клиентов фоновой музыки. Примеры работ https://audioreklama.by/ 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="p-0 bg-transparent card-header" id="headingSix">
                                <h2 class="mb-0">
                                    <button class="text-left btn btn-block collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Лицензия указана в договоре?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                data-parent="#our-values-accordion">
                                <div class="card-body">
                                Да. Все лицензионные отчисления авторских вознаграждений за использование музыкальных произведений включены в стоимость по Договору.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="p-0 bg-transparent card-header" id="headingSeven">
                                <h2 class="mb-0">
                                    <button class="text-left btn btn-block collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        А что с отчётностью по лицензии?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                                data-parent="#our-values-accordion">
                                <div class="card-body">
                                Порядок. Наша лицензия на фоновую музыку избавляет вас от учёта звучания композиций и ежемесячной отчётности – отчётность нами автоматизирована в режиме реального времени.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="p-0 bg-transparent card-header" id="headingEight">
                                <h2 class="mb-0">
                                    <button class="text-left btn btn-block collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        Как начать сотрудничать с MUZFON?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseEight" class="collapse" aria-labelledby="headingEight"
                                data-parent="#our-values-accordion">
                                <div class="card-body">
                                Отправьте нам Количество и Площади объектов для музыкального оформления. Заключаем договор на услугу по выбранному тарифу и готово!
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Accordion end -->

                </div><!-- Col end -->
            </div>
            <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </section><!-- Content end -->
    <section class="subscribe no-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="subscribe-call-to-acton">
                        <h3>Остались вопросы?</h3>
                        <h4>+375(29)399-40-66</h4>
                    </div>
                </div><!-- Col end -->

                <div class="col-lg-8">
                    <div class="ts-newsletter row align-items-center">
                        <div class="col-md-5 newsletter-introtext">
                            <h4 class="mb-0 text-white">Подписка на новости</h4>
                            <p class="text-white">Только полезная информация для вас, и не чаще раза в месяц.</p>
                        </div>

                        <div class="col-md-7 newsletter-form">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label for="newsletter-email" class="content-hidden">Подписка на новости</label>
                                    <input type="email" name="email" id="newsletter-email"
                                        class="form-control form-control-lg"
                                        placeholder="Введите адрес вашей почты и нажмите Enter" autocomplete="off">
                                </div>
                            </form>
                        </div>
                    </div><!-- Newsletter end -->
                </div><!-- Col end -->

            </div><!-- Content row end -->
        </div>
        <!--/ Container end -->
    </section>
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
