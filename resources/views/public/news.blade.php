@php
    $post = [
        'title'=>'Новости',
        'image'=>'',
        'text'=>'
        <h4>Уже готовим осеннее обновление музыкальной коллекции! /2022-07-13</h4>
<p>К первому сентября традиционно обновляем плей-лист новыми музыкальными композициями.</p>
<br></br>
<h4>О влиянии звуков и музыки:  /2022-06-15</h4>
<p>33% покупателей заявили, что они задержались бы в магазине, чтобы дослушать песню, которая им особенно понравилась.</p>
<p>28% покупателей говорят, что музыка замедляет их покупки.</p>
<p>24% покупателей считают, что музыка заставляет их оставаться в супермаркете дольше.</p>
<p>17% любят поп-музыку, 10% — рок, 9% — джаз/блюз, 6% — R&B/хип-хоп. Классическая музыка в винных магазинах провоцирует покупку более дорогих товаров.</p>
<p>Читать полностью - источник https://belretail.by </p>
<br></br>
<h4>Пост-приветствие  /2022-04-17</h4>
<p>Друзья! Приветствуем вас!</p>
<p>Здесь мы планируем делиться полезной информацией, отвечать на ваши вопросы и принимать заявки на создание музыкального эфира для вашего бизнеса.</p>
<p>Мы открыты для общения и будем рады знакомству!</p>
        ',
];
@endphp
@extends('layouts.public')
@section('content')

    <div id="banner-area" class="banner-area"
        style="background-image:url({{ asset('vendor/constra/images/slider-main/slider1.jpg') }})">
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
                                <div class="gap-40"></div>
                            </div>

                        </div>

                        <div class="gap-40"></div>
                        

                        <div class="row">
                            <div class="col-md-12">

                            </div><!-- col end -->
                        </div><!-- 1st row end-->
                        <div class="gap-40"></div>

                        

                    </div><!-- Content inner end -->
                </div><!-- Content Col end -->


            </div><!-- Main row end -->
        </div><!-- Conatiner end -->
    </section><!-- Main container end -->

@endsection
@section('js')
    
@endsection