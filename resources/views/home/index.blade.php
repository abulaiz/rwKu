@extends('layouts.master')

@section('title', 'RW-ku | Home')

@section('banner-title')
  <h2>Home</h2>
@endsection

@section('banner-detail')
  <p>Halaman Utama RW-ku</p>
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
                      <h4>Layanan RW-ku</h4>
                      <p>Menyediakan berbagai layanan untuk kebutuhan warga RW</p>
                      <a class="more_btn" href="/service">Buka</a>
                  </div>
              </div>
              <div class="col-lg-4 col-sm-6">
                  <div class="feature_item">
                      <div class="f_icon">
                          <img src="{{ asset('main/img/icon/f-icon-2.png') }}" alt="">
                      </div>
                      <h4>Galery RW-ku</h4>
                      <p>Menampilkan dokumentasi kegiatan yang dilakukan di RW</p>
                      <a class="more_btn" href="/galery">Buka</a>
                  </div>
              </div>
              <div class="col-lg-4 col-sm-6">
                  <div class="feature_item">
                      <div class="f_icon">
                          <img src="{{ asset('main/img/icon/f-icon-3.png') }}" alt="">
                      </div>
                      <h4>Berita RW-ku</h4>
                      <p>Menampilkan berita dan informasi terkini seputar RW</p>
                      <a class="more_btn" href="/news">Buka</a>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--================End Feature Area =================-->

  <!--================The best slider Area =================-->
  <section class="best_3d_area">
      <div class="left_3d">
          <div class="shap_slider_inner owl-carousel">
              <div class="item">
                  <h4>“They are the best”</h4>
                  <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus.</p>
                  <div class="media">
                      <img src="{{ asset('main/img/team/people/people-5.jpg') }}" alt="">
                      <div class="media-body">
                          <h5>Chriss Turner</h5>
                          <h6>CEO Enterprise</h6>
                      </div>
                  </div>
              </div>
              <div class="item">
                  <h4>“They are the best”</h4>
                  <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus.</p>
                  <div class="media">
                      <img src="{{ asset('main/img/team/people/people-5.jpg') }}" alt="">
                      <div class="media-body">
                          <h5>Chriss Turner</h5>
                          <h6>CEO Enterprise</h6>
                      </div>
                  </div>
              </div>
              <div class="item">
                  <h4>“They are the best”</h4>
                  <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus.</p>
                  <div class="media">
                      <img src="{{ asset('main/img/team/people/people-5.jpg') }}" alt="">
                      <div class="media-body">
                          <h5>Chriss Turner</h5>
                          <h6>CEO Enterprise</h6>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="right_text">
          <div class="right_text_inner">
              <div class="text_3d">
                  <div class="l_title">
                      <img src="{{ asset('main/img/icon/title-icon.png') }}" alt="">
                      <h6>Discover the features</h6>
                      <h2>We don’t hide, we stand tall in front of chalenge</h2>
                  </div>
                  <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros dignissim ultrices. </p>
              </div>
              <div class="shap_mobile">
                  <img src="{{ asset('main/img/iphone4.png') }}" alt="">
              </div>
          </div>
      </div>
  </section>
  <!--================End The best slider Area =================-->
@endsection

@section('extra-js')

@endsection
