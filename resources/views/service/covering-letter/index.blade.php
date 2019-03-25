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
                  <form class="contact_us_form row" onsubmit="return confirm()" method="POST" id="contactForm" action="{{ route('hai') }}" novalidate="novalidate" style="margin-top: 0px;">
                    {{ csrf_field() }}
                      <div class="form-group col-lg-12">
                        <input type="text" class="form-control inp" id="no_kk" name="no_kk" placeholder="No KK">
                      </div>
                      <div class="form-group col-lg-12">
                          <select class="form-control inp" name="nik" id="nik">
                            <option value="" disabled selected>-- Pilih NIK anda --</option>
                            <option class="nik-list" value="0">32012441209235</option>
                            <option class="nik-list" value="1">32012488209235</option>
                            <option class="nik-list" value="2">32012441211235</option>
                            <option class="nik-list" value="3">32012441934535</option>
                          </select>
                      </div>
                      <div class="form-group col-lg-12">
                          <input type="text" class="form-control inp" id="name" name="name" placeholder="Nama*">
                      </div>
                      <div class="form-group col-lg-12">
                          <input type="text" class="form-control inp" id="sex" name="sex" placeholder="Jenis Kelamin*">
                      </div>
                      <div class="form-group col-lg-12">
                          <input type="text" class="form-control inp" id="place-birth" name="place_birth" placeholder="Tempat Lahir*">
                      </div>
                      <div class="form-group col-lg-12">
                          <input onfocus="(this.type='date')" class="form-control inp" id="date-birth" name="date_birth" placeholder="Tanggal Lahir*">
                      </div>
                      <div class="form-group col-lg-12">
                          <input type="text" class="form-control inp" id="citizenship" name="citizenship" placeholder="Kewarganegaraan*">
                      </div>
                      <div class="form-group col-lg-12">
                          <select class="form-control inp" name="marital_status" id="marital-status">
                            <option value="" disabled selected>-- Status pernikahan --</option>
                            <option value="1">Menikah</option>
                            <option value="0">Belum Menikah</option>
                          </select>
                      </div>
                      <div class="form-group col-lg-12">
                          <input type="text" class="form-control inp" id="job" name="job" placeholder="Pekerjaan*">
                      </div>
                      <div class="form-group col-lg-12">
                          <input type="text" class="form-control inp" id="religion" name="religion" placeholder="Agama*">
                      </div>
                      <div class="form-group col-lg-12">
                          <textarea class="form-control inp" id="address" name="address" placeholder="Alamat Tinggal*" style="height: 100px;"></textarea>
                      </div>                      
                      <div class="form-group col-lg-12">
                          <textarea class="form-control inp" id="necessity" name="necessity" placeholder="Keperluan*"></textarea>
                      </div>
                      <div class="form-group col-lg-12">
                          <button type="button" data-toggle="modal" data-target="#bootstrap" value="submit" onclick="preview()" class="btn submit_btn form-control">Lihat Surat</button> <p class="mr-1 ml-1" style="display: inline;">atau</p>
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
  <script src="../../../js/swal/sweetalert.min.js" type="text/javascript"></script>
  <script src="../../../js/sementara.js" type="text/javascript"></script>

  @if(Session::has('_msg'))
    <script type="text/javascript">
      swal("Sukses", "Permintaan anda sudah terkirim, silahkan tunggu kofirmasi lebih lanjut", "success");
    </script>
  @endif

    <div class="modal fade text-left" id="bootstrap" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h4 class="modal-title" style="color:white">Print Preview</h4>
                    <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">

                    <div id="loader" class="form-control">
                        Harap Tunggu ...
                    </div>    

                  <iframe id="preview" src="" width="100%" height="300"></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Mengerti</button>
                </div>

            </div>
        </div>
    </div>
@endsection
