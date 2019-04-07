@extends('admin.layouts.master')

@section('title', 'Admin | Pengajuan')
@section('content')
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Daftar Pengajuan Surat Pengantar</h4>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Warga</th>
                  <th>Kebutuhan</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-1">
                    1
                  </td>
                  <td>Herman Beck</td>
                  <td>
                    Pengantar Beasiswa Anak
                  </td>
                  <td>
                    <center>
                      <label class="badge badge-danger">Di Tolak</label>
                    </center>
                  </td>
                  <td>
                    <div class="btn-group open">
      								<button data-toggle="dropdown" class="btn btn-primary dropdown-toggle margin" aria-expanded="true">Action <span class="caret"></span></button>
      								<ul class="dropdown-menu">
      									<li>
                          <a href="#">Lihat</a>
                        </li>
                        <li>
                          <a href="#">Ubah</a>
                        </li>
                        <li>
                          <a href="#">Tolak</a>
                        </li>
                        <li>
                          <a href="#">Hapus</a>
                        </li>
                        <li>
                          <a href="#">Setujui</a>
                          {{-- Tanda tangan langsung masuk --}}
                        </li>
                        <li>
                          <a href="#">Kirim Ke RW</a>
                          {{-- Muncul ketika telah di setujui --}}
                        </li>
      								</ul>
      							</div>
                  </td>
                </tr>
                <tr>
                  <td class="py-1">
                    2
                  </td>
                  <td>Messsy Adam</td>
                  <td>
                    Pengantar Usulan Sembako
                  </td>
                  <td>
                    <center>
                      <label class="badge badge-warning">Menunggu Persetujuan</label>
                    </center>
                  </td>
                  <td>
                    <div class="btn-group open">
      								<button data-toggle="dropdown" class="btn btn-primary dropdown-toggle margin" aria-expanded="true">Action <span class="caret"></span></button>
      								<ul class="dropdown-menu">
      									<li>
                          <a href="#">Lihat</a>
                        </li>
                        <li>
                          <a href="#">Ubah</a>
                        </li>
                        <li>
                          <a href="#">Tolak</a>
                        </li>
                        <li>
                          <a href="#">Hapus</a>
                        </li>
                        <li>
                          <a href="#">Setujui</a>
                          {{-- Tanda tangan langsung masuk --}}
                        </li>
                        <li>
                          <a href="#">Kirim Ke RW</a>
                          {{-- Muncul ketika telah di setujui --}}
                        </li>
      								</ul>
      							</div>
                  </td>
                </tr>
                <tr>
                  <td class="py-1">
                    3
                  </td>
                  <td>Messsy Adam</td>
                  <td>
                    Pengantar Tidur
                  </td>
                  <td>
                    <center>
                      <label class="badge badge-success">Terkirim ke RW</label>
                    </center>
                  </td>
                  <td>
                    <div class="btn-group open">
      								<button data-toggle="dropdown" class="btn btn-primary dropdown-toggle margin" aria-expanded="true">Action <span class="caret"></span></button>
      								<ul class="dropdown-menu">
      									<li>
                          <a href="#">Lihat</a>
                        </li>
                        <li>
                          <a href="#">Ubah</a>
                        </li>
                        <li>
                          <a href="#">Tolak</a>
                        </li>
                        <li>
                          <a href="#">Hapus</a>
                        </li>
                        <li>
                          <a href="#">Setujui</a>
                          {{-- Tanda tangan langsung masuk --}}
                        </li>
                        <li>
                          <a href="#">Kirim Ke RW</a>
                          {{-- Muncul ketika telah di setujui --}}
                        </li>
      								</ul>
      							</div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('extra-js')

@endsection
