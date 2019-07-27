@extends('admin.layouts.master')

@section('title', 'Admin | Input Warga')
@section('content')
  <div class="row">
    <div class="col-md-12 d-flex align-items-stretch grid-margin">
      <div class="row flex-grow">
        <div class="col-md-8">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Input Nomor KK Baru</h4>
              {!!Form::open(['route' => ['resident.store'],'method'=>'post', 'id'=>'form-resident', 'class'=>'forms-sample']) !!}
                <div class="form-group">
                  <label for="exampleInputEmail1">Nomor KK</label>
                  <input type="text" class="form-control" pattern="\d*" maxlength="16" name="kk_number_add" placeholder="Nomor KK">
                  <input type="hidden" class="form-control" name="type" value="kk">
                </div>
                <button type="submit" class="btn btn-success mr-2">Tambah</button>
                <button type="button" class="btn btn-light" onclick="location.reload(true);">Reset</button>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
            <h4 class="card-title">Input Warga</h4>
            {!!Form::open(['route' => ['resident.store'],'method'=>'post', 'id'=>'form-resident', 'class'=>'forms-sample row']) !!}
            <div class="col-md-6">
               <div class="form-group">
                <label for="kk_number">Nomor KK</label>
                <input type="text" pattern="\d*" maxlength="16" class="form-control" id="kk_number" name="kk_number" placeholder="No KK">
                <i id="right-status" class="left-status-kk fa fa-check text-success "></i>
                <i id="wrong-status" class="left-status-kk fa fa-times text-danger"></i>              
               </div>
               <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" pattern="\d*" maxlength="16" class="form-control" id="nik" name="nik" placeholder="NIK">
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
                <input onfocus="(this.type='date')" class="form-control" name="date_of_birth" id="date_of_birth" placeholder="Tanggal Lahir" value="2000-01-01">
               </div>                             
            </div>
            <div class="col-md-6">
               <div class="form-group">
                <label for="citizenship">Kewarganegaraan</label>
                <input type="text" class="form-control" name="citizenship" id="citizenship" placeholder="Kewarganegaraan">
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
                <label for="rt-rw">Alamat</label>
                <input type="text" class="form-control" name="address" id="address" placeholder="Alamat">
               </div>
               <div class="form-group">
                <label for="sex">RT</label>
                <select class="form-control" name="rt">
                  <option selected disabled value="">-- Pilih Domisili --</option>
                  <option value="1">RT 1</option>
                  <option value="2">RT 2</option>
                  <option value="3">RT 3</option>
                  <option value="4">RT 4</option>
                  <option value="5">RT 5</option>
                  <option value="6">RT 6</option>
                </select>
               </div>  
               <div class="form-group">
                <div class="form-check form-check-flat">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="marital_status" id="marital-status"> Menikah
                  <i class="input-helper"></i></label>
                </div>
               </div>                           
            </div>            
            <button type="submit" class="btn btn-success mr-2">Tambah</button>
            <button type="button" onclick="location.reload(true);" class="btn btn-light">Reset</button>
          {!! Form::close() !!}
        </div>
      </div>
    </div>

  </div>
@endsection

@section('extra-js')
  <script src="../../../js/view/resident/admin-add.js" type="text/javascript"></script>
@endsection
