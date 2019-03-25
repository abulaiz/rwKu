@extends('layouts.master')

@section('title', 'RW-ku | Berita')

@section('banner-title')
  <h2>Berita</h2>
@endsection

@section('banner-detail')
  <p>Berita-berita terkini seputar RW</p>
@endsection

@section('content')
  <!--================Blog Main Area =================-->
  <section class="blog_main_area p_100">
      <div class="container">
          <div class="row">
              <div class="col-lg-9">
                  <div class="blog_main_inner">
                      <div class="blog_main_item">
                          <div class="blog_img">
                              <img class="img-fluid" src="{{ asset('main/img/blog/blog-1-1.jpg') }}" alt="">
                              <div class="blog_date">
                                  <h4>18</h4>
                                  <h5>Maret, 2019</h5>
                              </div>
                          </div>
                          <div class="blog_text">
                              <a href="#"><h4>Anies: Saya Titipkan kepada Pak RW Rp 100 Juta untuk Uang Mendadak</h4></a>
                              <div class="blog_author">
                                  <a href="#">By Nibras Nada Nailufar</a>
                                  <a href="#">Kompas.com</a>
                              </div>
                              <p>JAKARTA, KOMPAS.com - Gubernur DKI Jakarta Anies Baswedan mengunjungi korban kebakaran di Krukut, Tamansari, Jakarta Barat, Senin (18/3/2019).</p>
                              <p>Dalam kunjungannya, Anies menyumbang Rp 100 juta kepada korban kebakaran.</p>
                              <p>Sumber: <a href="https://megapolitan.kompas.com/read/2019/03/18/20430401/anies-saya-titipkan-kepada-pak-rw-rp-100-juta-untuk-uang-mendadak">Kompas.com</a></p>
                              <a class="more_btn" href="#">Selengkapnya</a>
                          </div>
                      </div>
                      <div class="blog_main_item">
                          <div class="blog_img">
                              <img class="img-fluid" src="{{ asset('main/img/blog/blog-2-2.jpg') }}" alt="">
                              <div class="blog_date">
                                  <h4>04</h4>
                                  <h5>Januari, 2019</h5>
                              </div>
                          </div>
                          <div class="blog_text">
                              <a href="#"><h4>Pemkot Bekasi Targetkan Bank Sampah Tersedia di Tiap RW</h4></a>
                              <div class="blog_author">
                                  <a href="#">By Dean Pahrevi</a>
                                  <a href="#">Kompas.com</a>
                              </div>
                              <p>BEKASI, KOMPAS.com - Pemerintah Kota Bekasi menargetkan 70 persen RW (Rukun Warga) di Kota Bekasi tersedia bank sampah.</p>
                              <p>Kabid Penaatan dan dan Peningkatan Kapasitas pada Dinas Lingkungan Hidup Kota Bekasi Ferdinan mengatakan, saat ini, bank sampah baru tersedia di 220 RW.</p>
                              <p>Sumber: <a href="https://megapolitan.kompas.com/read/2019/03/18/20430401/anies-saya-titipkan-kepada-pak-rw-rp-100-juta-untuk-uang-mendadak">Kompas.com</a></p>
                              <a class="more_btn" href="#">Selengkapnya</a>
                          </div>
                      </div>
                      <div class="blog_main_item">
                          <div class="blog_img">
                              <img class="img-fluid" src="{{ asset('main/img/blog/blog-3-3.jpg') }}" alt="">
                              <div class="blog_date">
                                  <h4>07</h4>
                                  <h5>September, 2019</h5>
                              </div>
                          </div>
                          <div class="blog_text">
                              <a href="#"><h4>Dua Kali Menolak, DPRD Akhirnya Setujui Anggaran Pendamping Rapat RW</h4></a>
                              <div class="blog_author">
                                  <a href="#">By NIbras Nada Nailufar</a>
                                  <a href="#">Kompas.com</a>
                              </div>
                              <p>AKARTA, KOMPAS.com - Badan Anggaran (Banggar) DPRD DKI Jakarta akhirnya menyetujui anggaran perekrutan dan pelatihan untuk pendamping pada rapat RW dan musyawarah rencana pembangunan (musrenbang). Anggaran sebesar Rp 1,6 miliar itu sebelumnya telah dua kali ditolak.</p>
                              <p>"Pendampingan RW ini untuk memperbaiki Jakarta 10 hingga 15 tahun ke depan, nilai edukasinya baik sekali untuk generasi selanjutnya. Kalau Pak Gembong (Warsono) bilang mencurigakan, mencurigakan apa? Pengalihannya ada, bahwa angka ini untuk jasa transportasi anak-anak yang memberikan pendampingan. Kita saja di forum ini masih ada salah persepsi, bagaimana di bawah sana di tingkat RW?" kata Sekretaris Saefullah dalam rapat pembahasan Kebijakan Umum Anggaran (KUA) dan Priorotas Plafon Anggaran Sementara (PPAS) 2018, Jumat (7/9/2018).</p>
                              <p>Sumber: <a href="https://megapolitan.kompas.com/read/2019/03/18/20430401/anies-saya-titipkan-kepada-pak-rw-rp-100-juta-untuk-uang-mendadak">Kompas.com</a></p>
                              <a class="more_btn" href="#">Selengkapnya</a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3">
                  <div class="blog_right_sidebar">
                      <aside class="r_widget search_widget">
                          <div class="input-group">
                              <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                              <span class="input-group-btn">
                                  <button class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
                              </span>
                          </div>
                      </aside>
                      <aside class="r_widget categories_widget">
                          <div class="r_w_title">
                              <h3>Kategori</h3>
                          </div>
                          <ul>
                              <li><a href="#">Kegiatan Rutin</a></li>
                              <li><a href="#">Kerjasama</a></li>
                              <li><a href="#">Bantuan</a></li>
                              <li><a href="#">Kunjungan</a></li>
                              <li><a href="#">Prestasi Warga</a></li>
                          </ul>
                      </aside>
                      <aside class="r_widget insta_widget">
                          <div class="r_w_title">
                              <h3>Instagram</h3>
                          </div>
                          <ul>
                              <li><a href="https://www.instagram.com/?hl=en">
                                  <img class="img-fluid" src="{{ asset('main/img/instagram/right-instagram/r-in-1.jpg') }}" alt="">
                              </a></li>
                              <li><a href="https://www.instagram.com/?hl=en">
                                  <img class="img-fluid" src="{{ asset('main/img/instagram/right-instagram/r-in-2.jpg') }}" alt="">
                              </a></li>
                              <li><a href="https://www.instagram.com/?hl=en">
                                  <img class="img-fluid" src="{{ asset('main/img/instagram/right-instagram/r-in-3.jpg') }}" alt="">
                              </a></li>
                              <li><a href="https://www.instagram.com/?hl=en">
                                  <img class="img-fluid" src="{{ asset('main/img/instagram/right-instagram/r-in-4.jpg') }}" alt="">
                              </a></li>
                              <li><a href="https://www.instagram.com/?hl=en">
                                  <img class="img-fluid" src="{{ asset('main/img/instagram/right-instagram/r-in-5.jpg') }}" alt="">
                              </a></li>
                              <li><a href="https://www.instagram.com/?hl=en">
                                  <img class="img-fluid" src="{{ asset('main/img/instagram/right-instagram/r-in-6.jpg') }}" alt="">
                              </a></li>
                          </ul>
                      </aside>
                      <aside class="r_widget tag_widget">
                          <div class="r_w_title">
                              <h3>Tags</h3>
                          </div>
                          <ul>
                              <li><a href="#">branding</a></li>
                              <li><a href="#">identity</a></li>
                              <li><a href="#">design</a></li>
                              <li><a href="#">inspiration</a></li>
                              <li><a href="#">web design</a></li>
                              <li><a href="#">video</a></li>
                              <li><a href="#">photography</a></li>
                          </ul>
                      </aside>
                      <aside class="r_widget quote_widget">
                          <div class="r_w_title">
                              <h3>Quote</h3>
                          </div>
                          <img src="{{ asset('main/img/icon/quote-icon.png') }}" alt="">
                          <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volut pat. Donec fermen tum convallis.</p>
                      </aside>
                      <aside class="r_widget add_widget">
                          <div class="r_w_title">
                              <h3>Add</h3>
                          </div>
                          <img class="img-fluid" src="{{ asset('main/img/add.jpg') }}" alt="">
                      </aside>
                  </div>
              </div>
          </div>
          <nav aria-label="Page navigation example" class="pagination_area">
              <ul class="pagination">
                  <li class="page-item active"><a class="page-link" href="#">01.</a></li>
                  <li class="page-item"><a class="page-link" href="#">02.</a></li>
                  <li class="page-item"><a class="page-link" href="#">03.</a></li>
                  <li class="page-item"><a class="page-link" href="#">04.</a></li>
              </ul>
          </nav>
      </div>
  </section>
  <!--================End Blog Main Area =================-->
@endsection

@section('extra-js')
  <script src="{{ asset('main/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('main/vendors/isotope/isotope.pkgd.min.js') }}"></script>
@endsection
