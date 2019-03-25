@extends('layouts.master')

@section('title', 'RW-ku | Layanan')

@section('banner-title')
  <h2>Galery</h2>
@endsection

@section('banner-detail')
  <p>Dokumentasi Kegiatan RW</p>
@endsection

@section('content')
  <section class="portfolio_area">
      <div class="container">
          <div class="portfolio_filter">
              <ul>
                  <li class="" data-filter="*"><a href="#">Semua</a></li>
                  <li data-filter=".brand" class=""><a href="#">Kegiatan Mingguan</a></li>
                  <li data-filter=".design" class=""><a href="#">Pengajian Rutin</a></li>
                  <li data-filter=".arc" class=""><a href="#">Rapat RW</a></li>
                  <li data-filter=".photo" class="active"><a href="#">Warga</a></li>
              </ul>
          </div>
      </div>
      <div class="ms_portfolio_inner" style="position: relative; height: 335.75px;">
          <div class="ms_p_item wd_25 brand arc photo" style="position: absolute; left: 0%; top: 0px;">
              <img src="{{ asset('main/img/portfolio/ms-portfolio/kegiatan-1.jpg') }}" alt="">
          </div>
          <div class="ms_p_item wd_25 brand arc photo" style="position: absolute; left: 24.9442%; top: 0px;">
              <img src="{{ asset('main/img/portfolio/ms-portfolio/kegiatan-2.jpg') }}" alt="">
          </div>
          <div class="ms_p_item wd_50 brand" style="position: absolute; left: 49.9628%; top: 0px; display: none;">
              <img src="{{ asset('main/img/portfolio/ms-portfolio/kegiatan-3.png') }}" alt="">
          </div>
          <div class="ms_p_item wd_25 brand arc photo" style="position: absolute; left: 49.9628%; top: 0px;">
              <img src="{{ asset('main/img/portfolio/ms-portfolio/kegiatan-4.jpg') }}" alt="">
          </div>
          <div class="ms_p_item wd_25 brand arc photo" style="position: absolute; left: 74.9814%; top: 0px;">
              <img src="{{ asset('main/img/portfolio/ms-portfolio/kegiatan-4.jpg') }}" alt="">
          </div>
          <div class="ms_p_item wd_50" style="position: absolute; left: 0%; top: 671px; display: none;">
              <img src="{{ asset('main/img/portfolio/ms-portfolio/ms-p-6.jpg') }}" alt="">
          </div>
          <div class="ms_p_item wd_25 design arc" style="position: absolute; left: 0%; top: 335px; display: none;">
              <img src="{{ asset('main/img/portfolio/ms-portfolio/ms-p-7.jpg') }}" alt="">
          </div>
          <div class="ms_p_item wd_25 design arc" style="position: absolute; left: 24.9442%; top: 335px; display: none;">
              <img src="{{ asset('main/img/portfolio/ms-portfolio/ms-p-8.jpg') }}" alt="">
          </div>
          <div class="ms_p_item wd_25 design arc" style="position: absolute; left: 49.9628%; top: 335px; display: none;">
              <img src="{{ asset('main/img/portfolio/ms-portfolio/ms-p-9.jpg') }}" alt="">
          </div>
          <div class="ms_p_item wd_25 design arc" style="position: absolute; left: 74.9814%; top: 335px; display: none;">
              <img src="{{ asset('main/img/portfolio/ms-portfolio/ms-p-10.jpg') }}" alt="">
          </div>
      </div>
  </section>
@endsection

@section('extra-js')
  <script src="{{ asset('main/vendors/circle-bar/circle-progress.min.js') }}"></script>
  <script src="{{ asset('main/vendors/circle-bar/plugins.js') }}"></script>
  <script src="{{ asset('main/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('main/vendors/isotope/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('main/js/circle-active.js') }}"></script>
@endsection
