@extends('admin.layouts.master')

@section('title', 'Admin | Input Warga')
@section('content')
  <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Input Warga</h4>
          {!!Form::open(['route' => ['resident.store'],'method'=>'post', 'id'=>'form-resident', 'class'=>'forms-sample']) !!}
            <div class="form-group">
              <label for="kk_number">Nomor KK</label>
<!--               <select class="form-control" id="kk_number" name="kk_number">
                <option selected disabled>-- Pilih Nomor KK --</option>
                @foreach ($kk as $data)
                  <option value="{{ $data->id }}">{{ $data->number }}</option>
                @endforeach
              </select> -->
              <input type="text" pattern="\d*" maxlength="16" class="form-control" id="kk_number" name="kk_number" placeholder="No KK">
              <i id="right-status" class="fa fa-check text-success" style="position: absolute; left: 85%; top: 100px; display: none;"></i>
              <i id="wrong-status" class="fa fa-times text-danger" style="position: absolute; left: 85%; top: 100px; display: none;"></i>              
            </div>
            <div class="form-group">
              <label for="nik">NIK</label>
              <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK">
            </div>
            <div class="form-group">
              <label for="name">Nama</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Nama">
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
              <label for="place_of_birth">Tempat Lahir</label>
              <input type="text" class="form-control" name="place_of_birth" id="place_of_birth" placeholder="Tempat Lahir">
            </div>
            <div class="form-group">
              <label for="date_of_birth">Tanggal Lahir</label>
              <input onfocus="(this.type='date')" class="form-control" name="date_of_birth" id="date_of_birth" placeholder="Tanggal Lahir">
            </div>
            <div class="form-group">
              <label for="citizenship">Kewarganegaraan</label>
              <input type="text" class="form-control" name="citizenship" id="citizenship" placeholder="Kewarganegaraan">
            </div>
            <div class="form-group">
              <div class="form-check form-check-flat">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" name="marital_status" id="marital-status"> Menikah
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
              <label for="rt-rw">Address</label>
              <input type="text" class="form-control" name="address" id="address" placeholder="Address">
            </div>
            <div class="form-group">
              <label for="rt-rw">RT</label>
              <input type="text" class="form-control" name="rt" id="rt" placeholder="RT">
            </div>
            <div class="form-group">
              <label for="rt-rw">RW</label>
              <input type="text" class="form-control" name="rw" id="rw" placeholder="RW">
            </div>
            <div class="form-group">
              <label for="kel_village">Kelurahan / Desa</label>
              <input type="text" class="form-control" name="kel_village" id="kel_village" placeholder="Kelurahan/Desa">
            </div>
            <div class="form-group">
              <label for="sub_district">Kecamatan</label>
              <input type="text" class="form-control" name="sub_district" id="sub_district" placeholder="Kecamatan">
            </div>
            <button type="submit" class="btn btn-success mr-2">Tambah</button>
            <button class="btn btn-light">Reset</button>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
    <div class="col-md-6 d-flex align-items-stretch grid-margin">
      <div class="row flex-grow">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Input Nomor KK Baru</h4>
              {!!Form::open(['route' => ['resident.store'],'method'=>'post', 'id'=>'form-resident', 'class'=>'forms-sample']) !!}
                <div class="form-group">
                  <label for="exampleInputEmail1">Nomor KK</label>
                  <input type="text" class="form-control" id="kk_number" name="kk_number" placeholder="Nomor KK">
                  <input type="hidden" class="form-control" name="type" value="kk">
                </div>
                <button type="submit" class="btn btn-success mr-2">Tambah</button>
                <button class="btn btn-light">Reset</button>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('extra-js')
  <script src="../../../js/view/resident/admin-add.js" type="text/javascript"></script>
@endsection
