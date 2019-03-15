@extends('admin.layouts.master')

@section('title', 'Admin | Input Warga')
@section('content')
  <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Input Warga</h4>
          <form class="forms-sample">
            <div class="form-group">
              <label for="kk_number">Nomor KK</label>
              <select class="form-control" id="kk_number" name="kk_number">
                <option selected disabled>-- Pilih Nomor KK --</option>
                <option>123546</option>
                <option>654321</option>
              </select>
            </div>
            <div class="form-group">
              <label for="nik">NIK</label>
              <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK">
            </div>
            <div class="form-group">
              <label for="sex">Jenis Kelamin</label>
              <select class="form-control" id="sex" name="sex">
                <option selected disabled>-- Pilih Jenis Kelamin --</option>
                <option>Laki-laki</option>
                <option>Perempuan</option>
              </select>
            </div>
            <div class="form-group">
              <label for="place-birth">Tempat Lahir</label>
              <input type="text" class="form-control" name="place-birth" id="place-birth" placeholder="Tempat Lahir">
            </div>
            <div class="form-group">
              <label for="date-birth">Tanggal Lahir</label>
              <input onfocus="(this.type='date')" class="form-control" name="date-birth" id="date-birth" placeholder="Tanggal Lahir">
            </div>
            <div class="form-group">
              <label for="citizenship">Kewarganegaraan</label>
              <input type="text" class="form-control" name="citizenship" id="citizenship" placeholder="Kewarganegaraan">
            </div>
            <div class="form-group">
              <div class="form-check form-check-flat">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" name="marital-status" id="marital-status"> Menikah
                <i class="input-helper"></i></label>
              </div>
            </div>
            <div class="form-group">
              <label for="job">Pekerjaan</label>
              <input type="text" class="form-control" name="job" id="job" placeholder="Pekerjaan">
            </div>
            <div class="form-group">
              <label for="religion">Agama</label>
              <input type="text" class="form-control" name="religion" id="religion" placeholder="Agama">
            </div>
            <div class="form-group">
              <label for="rt-rw">RT/RW</label>
              <input type="text" class="form-control" name="rt-rw" id="rt-rw" placeholder="RT/RW">
            </div>
            <div class="form-group">
              <label for="kel-village">Kelurahan / Desa</label>
              <input type="text" class="form-control" name="kel-village" id="kel-village" placeholder="Kelurahan/Desa">
            </div>
            <div class="form-group">
              <label for="sub-district">Kecamatan</label>
              <input type="text" class="form-control" name="sub-district" id="sub-district" placeholder="Kecamatan">
            </div>
            <button type="submit" class="btn btn-success mr-2">Tambah</button>
            <button class="btn btn-light">Reset</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-6 d-flex align-items-stretch grid-margin">
      <div class="row flex-grow">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Input Nomor KK Baru</h4>
              <form class="forms-sample">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nomor KK</label>
                  <input type="email" class="form-control" id="kk_number" placeholder="Nomor KK">
                </div>
                <button type="submit" class="btn btn-success mr-2">Tambah</button>
                <button class="btn btn-light">Reset</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('extra-js')

@endsection
