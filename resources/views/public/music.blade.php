@php
    $post = [
        'title'=>'Музыка MUZFON',
        'image'=>'',
        'text'=>'
        <h4>Только лицензионный контент</h4>
<p>Мы гарантируем использование лицензионного контента. Безопасность бизнеса - приоритетная ценность.</p>

<h4>Огромная музыкальная коллекция</h4>
<p>Более 150 000 музыкальных композиций, подходящих именно для фонового звучания! Выбор стилей и направлений.</p>

<h4>Регулярные обновления</h4>
<p>Ежемесячно музыкальная база пополняется на 500 композиций.</p>

<h4>Плей-листы фоновой музыки для бизнеса</h4>
<p>Предоставим готовый плей-лист для вашего бизнеса.</p>
<p>Или составим плей-лист с учётом ваших пожеланий. Можно корректировать плей-лист, наш звукорежиссёр учтёт пожелания и обратную связь от персонала на объекте.</p>

<h4>Фоновая музыка - ваш собственный рекламный канал без конкурентов</h4>
<p>Ваша реклама вместо конкурентов! Размещайте только свои аудио-ролики или ваших арендаторов. Реклама прямо в местах продаж - одна из самых эффективных.</p>

<h4>Как получить музыку для бизнеса?</h4>
<p>Заключить договор на услугу по выбранному тарифу.</p>
<p>Для начала сотрудничества отправьте нам Количество и Площади объектов для музыкального оформления.</p>

        ',
];
$musics = [
    [
        'name' => 'Electronic',
        'photo' => 'vendor/music/superstore_Electronic_min_cover_46_68101.png',
        'demo' => 'vendor/music/Electronic_file_46_37972.mp3',
    ],
    [
        'name' => 'Electronic',
        'photo' => 'vendor/music/superstore_Electronic_min_cover_46_68101.png',
        'demo' => 'vendor/music/Electronic_file_46_37972.mp3',
    ],
    [
        'name' => 'Electronic',
        'photo' => 'vendor/music/superstore_Electronic_min_cover_46_68101.png',
        'demo' => 'vendor/music/Electronic_file_46_37972.mp3',
    ],
    [
        'name' => 'Electronic',
        'photo' => 'vendor/music/superstore_Electronic_min_cover_46_68101.png',
        'demo' => 'vendor/music/Electronic_file_46_37972.mp3',
    ],
    [
        'name' => 'Electronic',
        'photo' => 'vendor/music/superstore_Electronic_min_cover_46_68101.png',
        'demo' => 'vendor/music/Electronic_file_46_37972.mp3',
    ],
    [
        'name' => 'Electronic',
        'photo' => 'vendor/music/superstore_Electronic_min_cover_46_68101.png',
        'demo' => 'vendor/music/Electronic_file_46_37972.mp3',
    ],
];
@endphp
@extends('layouts.public')
@section('content')

    <div id="banner-area" class="banner-area"
        style="background-image:url({{ asset('vendor/constra/images/banner/bg_round_center_1600_300.svg') }})">
        <div class="baner-background-top">
            <div class="banner-text">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 ">
                            <div class="banner-heading">
                                <h1 class="banner-title">{{$post['title']}}</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="/test">Главная</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{$post['title']}}</li>
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
                        <h2 class="column-title mrt-0">{{$post['title']}}</h2>
                        <div class="row">
                            
                            <div class="col-lg-12">

                                {!! $post['text'] !!}
                                <div class="gap-10"></div>
                            </div>

                        </div>

                        <div class="gap-40"></div>
                        

                        <div class="row">
                            <div class="col-md-12">

                            </div><!-- col end -->
                        </div><!-- 1st row end-->
                        <div class="gap-10"></div>

                        

                    </div><!-- Content inner end -->
                </div><!-- Content Col end -->


            </div><!-- Main row end -->
        </div><!-- Conatiner end -->
    </section><!-- Main container end -->
    <section id="project-area" class="project-area solid-bg">
        <div class="container">
            <div class="text-center row">
                <div class="col-lg-12">

                    <h3 class="section-sub-title">Примеры музыки</h3>
                </div>
            </div>
            <!--/ Title row end -->
            <livewire:music-index />
            
        </div>
        <!--/ Container end -->
    </section><!-- Project area end -->
@endsection
@section('js')
    
@endsection