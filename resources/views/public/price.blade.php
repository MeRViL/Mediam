
@php
    $post = [
        'title'=>'Цены',
        'image'=>'',
        'text'=>'
            <h4>Тариф зависит только от площади озвучивания вашего объекта.</h4>
            <p>Лицензия на музыку гарантирует законное использование фоновой музыки для бизнеса. Никаких скрытых или дополнительных платежей.</p>
        ',
];
@endphp
@php
    $nalog = 1/87*100/94*100;
    $kurs = 0.0444;
    $music =  (1200 * $kurs)*$nalog;
    $diktor = (500 * $kurs)*$nalog;
    $sound =  (500 * $kurs)*$nalog;
    $pribil = 1.07;
    $scenario = (1000 * $kurs)*$nalog;
    $price = $diktor + $sound + $music + $pribil;
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
                                <div class="gap-10"></div>
                            </div>

                        </div>

                        <div class="gap-10"></div>
                        

                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">

                                    <div class="col-lg-4 col-md-6">
                                      <div class="ts-pricing-box">
                                        <div class="ts-pricing-header">
                                          <h2 class="ts-pricing-name">Музыка для магазина</h2>
                                          <h2 class="ts-pricing-price">
                                            <strong><small class="currency">от</small> {{ round( ($sound + $music*0.005) * ($pribil*0.1+0.02),0) }} <small>BYN</small></strong><small>в день</small>
                                          </h2>
                                        </div><!-- Pricing header -->
                                        <div class="ts-pricing-features">
                                          <ul class="list-unstyled">
                                            <li>Для объектов до 2000 м.кв.</li>
                                            <li>Более 70 000 музыкальных треков.</li>
                                            <li>Обновление ежемесячно на 100 треков.</li>
                                            <li>Гарантия законности звучания.</li>
                                            <li>Онлайн-доступ к медиа-плану.</li>
                                            <li>Ваша реклама в эфире без конкурентов.</li>
                                          </ul>
                                        </div><!-- Features end -->
                                        <div class="plan-action">
                                          <a href="/contact" class="btn btn-dark">Отправить заявку</a>
                                        </div>
                                      </div><!-- Plan 1 end -->
                                    </div><!-- Col end -->
                            
                                    <div class="col-lg-4 col-md-6">
                                      <div class="ts-pricing-box ts-pricing-featured">
                                        <div class="ts-pricing-header">
                                          <h2 class="ts-pricing-name">Музыка для ТЦ</h2>
                                          <h2 class="ts-pricing-price">
                                            <strong><small class="currency">от</small> {{ round( ($sound + $music*0.005) * ($pribil*0.2+0.02) ,0) }} <small>BYN</small></strong><small>в день</small>
                                          </h2>
                                        </div><!-- Pricing header -->
                                        <div class="ts-pricing-features">
                                          <ul class="list-unstyled">
                                            <li>Для объектов до 10 000 м.кв.</li>
                                            <li>Более 70 000 музыкальных треков.</li>
                                            <li>Обновление ежемесячно на 100 треков.</li>
                                            <li>Гарантия законности звучания.</li>
                                            <li>Онлайн-доступ к медиа-плану.</li>
                                            <li>Ваша реклама в эфире без конкурентов.</li>
                                          </ul>
                                        </div><!-- Features end -->
                                        <div class="plan-action">
                                          <a href="/contact" class="btn btn-primary">Отправить заявку</a>
                                        </div>
                                      </div><!-- Plan 1 end -->
                                    </div><!-- Col end -->
                            
                                    <div class="col-lg-4 col-md-6">
                                      <div class="ts-pricing-box">
                                        <div class="ts-pricing-header">
                                          <h2 class="ts-pricing-name">Музыка+ для бизнеса</h2>
                                          <h2 class="ts-pricing-price">
                                            <strong><small class="currency">от</small> {{ round( ($sound + $music*0.005) * ($pribil*0.4+0.02) ,0) }} <small>BYN</small></strong><small>в день</small>
                                          </h2>
                                        </div><!-- Pricing header -->
                                        <div class="ts-pricing-features">
                                          <ul class="list-unstyled">
                                            <li>Для объектов до 10 000 м.кв. и больше.</li>
                                            <li>Более 150 000 музыкальных треков.</li>
                                            <li>Обновление ежемесячно на 500 треков.</li>
                                            <li>Гарантия законности звучания.</li>
                                            <li>Онлайн-доступ к медиа-плану.</li>
                                            <li>Ваша реклама в эфире без конкурентов.</li>
                                            <li>Бонус 10 роликов для брендирования эфира.</li>
                                          </ul>
                                        </div><!-- Features end -->
                                        <div class="plan-action">
                                          <a href="/contact" class="btn btn-dark">Отправить заявку</a>
                                        </div>
                                      </div><!-- Plan 2 end -->
                                    </div><!-- Col end -->
                            
                                    <!-- <div class="col-lg-3 col-md-6">
                                      <div class="ts-pricing-box">
                                        <div class="ts-pricing-header">
                                          <h2 class="ts-pricing-name">Сценарий</h2>
                                          <h2 class="ts-pricing-price">
                                            <strong><small class="currency">от</small> {{ round( ($scenario) * ($pribil+0.17) ,0) }} <small>BYN</small></strong><small>до 30 секунд</small>
                                          </h2>
                                        </div>
                                        <div class="ts-pricing-features">
                                          <ul class="list-unstyled">
                                            <li>Помогаем определить Целевую аудиторию</li>
                                            <li>Учитываем место размещения ролика</li>
                                            <li>Подбираем голоса</li>
                                            <li>От 3 до 6 вариантов текста</li>
                                            <li>Срок изготовления 2-4 дня</li>
                                          </ul>
                                        </div>
                                        <div class="plan-action">
                                          <a href="/contact" class="btn btn-dark">Заказать</a>
                                        </div>
                                      </div>
                                    </div> -->
                            
                                  </div>
                                  <!--/ Content row end -->
                            </div><!-- col end -->
                        </div><!-- 1st row end-->
                        <div class="gap-20"></div>

                        

                    </div><!-- Content inner end -->
                </div><!-- Content Col end -->


            </div><!-- Main row end -->
        </div><!-- Conatiner end -->
    </section><!-- Main container end -->

@endsection

@section('js')
    
@endsection
