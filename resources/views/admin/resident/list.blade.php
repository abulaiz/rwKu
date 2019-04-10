@extends('admin.layouts.master')

@section('title', 'Admin | List Warga')
@section('content')
  <div class="row" ng-app="myApp" ng-controller="main">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Daftar Warga</h4>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Warga</th>
                  <th>Jenis Kelamin</th>
                  <th>RT</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @php  $i=1; @endphp
                @foreach($data as $item)
                <tr>
                  <td class="py-1">{{ $i++ }}</td>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->sex }}</td>
                  <td>{{ $item->rt }}</td>
                  <td>
                    <button type="button" class="btn btn-outline-info dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                    <div class="dropdown-menu" x-placement="bottom-start">
                        <button class="dropdown-item"><i class="fa fa-th-list mr-2"></i>Detail</button>
                        <button class="dropdown-item"><i class="fa fa-pencil mr-2"></i>Edit</button>             
                        <button class="dropdown-item"><i class="fa fa-trash-o mr-2"></i>Hapus</button>             
                    </div>                    
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

<style type="text/css">
  .dropdown-item{
    padding: 15px !important;
  }
</style>

@endsection

@section('extra-js') 
    <script src="../../../js/residenController.js"></script>
@endsection
