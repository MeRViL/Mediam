@extends('layouts.public')
@section('content')

<div id="banner-area" class="banner-area" style="background-image:url({{ asset('vendor/constra/images/slider-main/slider1.jpg') }})">
    <div class="banner-text">
      <div class="container">
          <div class="row">
            <div class="col-lg-12">
                <div class="banner-heading">
                  <h1 class="banner-title">Контакты</h1>
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="/test">Главная</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Контакты</li>
                      </ol>
                  </nav>
                </div>
            </div><!-- Col end -->
          </div><!-- Row end -->
      </div><!-- Container end -->
    </div><!-- Banner text end -->
  </div><!-- Banner area end -->

  <section id="main-container" class="main-container">
    <div class="container">

      <div class="text-center row">
        <div class="col-12">
          <h2 class="section-title">Формы связи</h2>
          <h3 class="section-sub-title">Свяжитесь с нами</h3>
        </div>
      </div>
      <!--/ Title row end -->

      <div class="row">

      <div class="col-md-4">
          <div class="text-center ts-service-box-bg h-100">
            <span class="ts-service-icon icon-round">
              <i class="mr-0 fas fa-map-marker-alt"></i>
            </span>
            <div class="ts-service-box-content">
              <h4>Viber, Telegram, WhatsApp</h4>
              <p>+375(29)399-40-66</p>
            </div>
          </div>
        </div><!-- Col 1 end -->

        <div class="col-md-4">
          <div class="text-center ts-service-box-bg h-100">
            <span class="ts-service-icon icon-round">
              <i class="mr-0 fa fa-phone-square"></i>
            </span>
            <div class="ts-service-box-content">
              <h4>Телефон</h4>
              <p>+375(29)399-40-66</p>
            </div>
          </div>
        </div><!-- Col 2 end -->

        <div class="col-md-4">
          <div class="text-center ts-service-box-bg h-100">
            <span class="ts-service-icon icon-round">
              <i class="mr-0 fa fa-envelope"></i>
            </span>
            <div class="ts-service-box-content">
              <h4>Email</h4>
              <p>info@muzfon.by</p>
            </div>
          </div>
        </div><!-- Col 3 end -->

      </div><!-- 1st row end -->

      <div class="gap-60"></div>



      <div class="gap-40"></div>

      <div class="row">
        <div class="col-md-12">
          <h3 class="column-title">Получите ответ на запрос в течение 1 часа.</h3>
          <!-- <h5 class="column-sub-title">Отправить запрос:</h5> -->
          <div class="container" style="width:65%">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
            </div>
            @endif
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
            </div>
            @endif
            </div>
          <!-- contact form works with formspree.io  -->
          <!-- contact form activation doc: https://docs.themefisher.com/constra/contact-form/ -->
          <form method="POST" action="#"  class="space-y-4" >
            @csrf
            <div class="error-container"></div>
            <div class="form-group">
              <label>Сообщение</label>
              <textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="5"
                required></textarea>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Имя</label>
                  <input class="form-control form-control-name" name="name" id="name" placeholder="" type="text" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Email</label>
                  <input class="form-control form-control-email" name="email" id="email" placeholder="" type="email"
                    required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Тема</label>
                  <input class="form-control form-control-subject" name="subject" id="subject" placeholder="" required>
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

    
@endsection