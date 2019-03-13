@extends('layouts.bases')

@section('content')
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Daftar Sparepart</h2>
                            <p>Berikut ini adalah beberapa sparpart yang tersedia.</p>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Harga</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>Nama</td>
                                        <td>Harga</td>
                                    </tr>

                                </tbody>
                                <tfoot><tr></tr></tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection