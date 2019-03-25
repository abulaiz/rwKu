@extends('layouts.master')

@section('title', 'RW-ku | Layanan')

@section('banner-title')
  <h2>Layanan</h2>
@endsection

@section('banner-detail')
  <p>Pilih layanan yang anda butuhkan</p>
@endsection

@section('content')
  <!--================Feature Area =================-->
  <section class="">
      <div class="container">
          <div class="row feature_inner">
              <div class="col-lg-4 col-sm-6">
                  <div class="feature_item">
                      <div class="f_icon">
                          <img src="{{ asset('main/img/icon/f-icon-1.png') }}" alt="">
                      </div>
                      <h4>Surat pengantar</h4>
                      <p>Ajukan surat pengantar sesuai kebutuhan ke RT dan RW</p>
                      <a class="more_btn" href="/service/covering-letter">Buat</a>
                  </div>
              </div>
              <div class="col-lg-4 col-sm-6">
                  <div class="feature_item">
                      <div class="f_icon">
                          <img src="{{ asset('main/img/icon/f-icon-1.png') }}" alt="">
                      </div>
                      <h4>Layanan lainnya</h4>
                      <p>Layanan lainnya yang disediakan oleh RW setempat</p>
                      <a class="more_btn" href="#">Buka</a>
                  </div>
              </div>
              <div class="col-lg-4 col-sm-6">
                  <div class="feature_item">
                      <div class="f_icon">
                          <img src="{{ asset('main/img/icon/f-icon-1.png') }}" alt="">
                      </div>
                      <h4>Layanan lainnya</h4>
                      <p>Layanan lainnya yang disediakan oleh RW setempat</p>
                      <a class="more_btn" href="#">Buka</a>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--================End Feature Area =================-->
@endsection

@section('extra-js')

@endsection
