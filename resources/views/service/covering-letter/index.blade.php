@extends('layouts.master')

@section('title', 'RW-ku | Layanan')

@section('banner-title')
  <h2>Surat Pengantar</h2>
@endsection

@section('banner-detail')
  <p>Lengkapi semua isian untuk pengajuan</p>
@endsection

@section('content')
  <section class="get_in_touch_area p_100">
      <div class="container">
          <div class="row get_touch_inner justify-content-md-center">
              <div class="col-lg-6">
                  <form class="contact_us_form row" id="contactForm" novalidate="novalidate" style="margin-top: 0px;">
                      <div class="form-group col-lg-12">
                        <input type="text" class="form-control" id="no_kk" name="no_kk" placeholder="No KK">
                      </div>
                      <div class="form-group col-lg-12">
                          <select class="form-control" name="nik" id="nik">
                            <option value="" disabled selected>-- Pilih NIK anda --</option>
                            <option class="nik-list" value="0">32012441209235</option>
                            <option class="nik-list" value="1">32012488209235</option>
                            <option class="nik-list" value="2">32012441211235</option>
                            <option class="nik-list" value="3">32012441934535</option>
                          </select>
                      </div>
                      <div class="form-group col-lg-12">
                          <input type="text" class="form-control" id="name" name="name" placeholder="Nama*">
                      </div>
                      <div class="form-group col-lg-12">
                          <input type="text" class="form-control" id="sex" name="sex" placeholder="Jenis Kelamin*">
                      </div>
                      <div class="form-group col-lg-12">
                          <input type="text" class="form-control" id="place-birth" name="place-birth" placeholder="Tempat Lahir*">
                      </div>
                      <div class="form-group col-lg-12">
                          <input onfocus="(this.type='date')" class="form-control" id="date-birth" name="date-birth" placeholder="Tanggal Lahir*">
                      </div>
                      <div class="form-group col-lg-12">
                          <input type="text" class="form-control" id="citizenship" name="citizenship" placeholder="Kewarganegaraan*">
                      </div>
                      <div class="form-group col-lg-12">
                          <select class="form-control" name="marital-status" id="marital-status">
                            <option value="" disabled selected>-- Status pernikahan --</option>
                            <option value="1">Menikah</option>
                            <option value="0">Belum Menikah</option>
                          </select>
                      </div>
                      <div class="form-group col-lg-12">
                          <input type="text" class="form-control" id="job" name="job" placeholder="Pekerjaan*">
                      </div>
                      <div class="form-group col-lg-12">
                          <input type="text" class="form-control" id="religion" name="religion" placeholder="Agama*">
                      </div>
                      <div class="form-group col-lg-12">
                          <textarea class="form-control" id="necessity" name="necessity" placeholder="Keperluan*"></textarea>
                      </div>
                      <div class="form-group col-lg-12">
                          <button type="submit" value="submit" class="btn submit_btn form-control">Kirim</button>
                      </div>
                  </form>
              </div>
              <div class="col-lg-6">
                  <div class="team_img_inner">
                      <div class="row">
                          <div class="col-lg-6 col-6">
                              <div class="team_img_item">
                                  <img src="{{ asset('main/img/team/people/people-1.jpg') }}" alt="">
                              </div>
                          </div>
                          <div class="col-lg-6 col-6">
                              <div class="team_img_item">
                                  <img src="{{ asset('main/img/team/people/people-2.jpg') }}" alt="">
                              </div>
                          </div>
                          <div class="col-lg-6 col-6">
                              <div class="team_img_item">
                                  <img src="{{ asset('main/img/team/people/people-3.jpg') }}" alt="">
                              </div>
                          </div>
                          <div class="col-lg-6 col-6">
                              <div class="team_img_item">
                                  <img src="{{ asset('main/img/team/people/people-4.jpg') }}" alt="">
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

@endsection

@section('extra-js')
  <!-- Sementara We -->
  <script src="../../../js/sementara.js" type="text/javascript"></script>
@endsection
