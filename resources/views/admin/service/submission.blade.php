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
                @php $i = 1; @endphp
                @foreach($data as $item)
                  <tr>
                    <td class="py-1">{{ $i++ }}</td>
                    <td>{{ $item->resident->name }}</td>
                    <td>{{ $item->necessity }}</td>
                    @if($item->status == 1)
                    <td><center><label class="badge badge-info">Antrian</label></center></td>                    
                    @endif @if( $item->status == 2 )
                    <td><center><label class="badge badge-warning">Menunggu</label></center></td>
                    @endif @if($item->status == 3)
                    <td><center><label class="badge badge-danger">Ditolak</label></center></td>
                    @endif @if($item->status == 4)
                    <td><center><label class="badge badge-success">Diterima</label></center></td>
                    @endif
                    <td>
                      <button type="button" class="btn btn-outline-info dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                      <div class="dropdown-menu" x-placement="bottom-start">
                          @if($item->status != 3)
                          <button onclick="cetak({{ $item->id }} )" class="dropdown-item"><i class="fa fa-print mr-2"></i>Cetak</button>
                          @endif

                          @if($item->status == 3)
                          <button onclick="hapus({{ $item->id }} )" class="dropdown-item"><i class="fa fa-trash mr-2"></i>Hapus</button>     
                          @endif

                          @if($item->status == 1 || (Auth::user()->hasRole('rw') && $item->status != 4) )
                          <button onclick="tolak({{ $item->id }} )" class="dropdown-item"><i class="fa fa-times mr-2"></i>Tolak</button>             
                          @endif

                          @if($item->status == 1)
                          <button onclick="teruskan({{ $item->id }} )" class="dropdown-item"><i class="fa fa-share mr-2"></i>Teruskan</button>
                          @endif

                          @if(Auth::user()->hasRole('rw') && $item->status == 2)
                          <button onclick="terima({{ $item->id }} )" class="dropdown-item"><i class="fa fa-check mr-2"></i>Terima</button>
                          @endif
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

<form id="ideapad" action="{{ route('manip') }}" method="POST" style="display: none;">
  {{ csrf_field() }}
  <input type="hidden" id="id_an" name="id">
  <input type="hidden" id="type_an" name="type">
</form>

<style type="text/css">
  .dropdown-item{
    padding: 15px !important;
  }
</style>

@endsection

@section('extra-js')
<script src="{{ URL::asset('js/plugin/SimpleEnc.js') }}"></script>

<script type="text/javascript">
  function tolak(id) {
    _confirm(1 , function(){
      $('#id_an').val(id);
      $('#type_an').val( 3 );
      event.preventDefault();document.getElementById('ideapad').submit();
    });  
  }
  function teruskan(id) {
    _confirm(0 , function(){
      $('#id_an').val(id);
      $('#type_an').val( 2 );
      event.preventDefault();document.getElementById('ideapad').submit();
    });
  }
  function terima(id) {
    _confirm(2 , function(){
      $('#id_an').val(id);
      $('#type_an').val( 4 );
      event.preventDefault();document.getElementById('ideapad').submit();      
    });

  }  
  function hapus(id){
      $('#id_an').val(id);
      $('#type_an').val( 3 );
      event.preventDefault();document.getElementById('ideapad').submit();    
  }
  function cetak(id) {
    window.open('/pdf/'+SimpleEnc.encrypt(id),'_blank');
  }  
</script>

@endsection
