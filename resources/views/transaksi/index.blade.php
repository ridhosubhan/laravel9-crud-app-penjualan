@php
$title='Kategori Barang';
@endphp

@extends('layouts.main')
@section('content')

    {{-- <div class="container"> --}}
        <div class="row" >
          <div class="col-4">
            <div class="card mt-4">
                <div class="card-header">
                  <h4>Cari Barang</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="table-cari-barang" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>No</td>
                                <td>Nama Barang</td>
                                <td>Harga Barang</td>
                                <td>Aksi</td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
          </div>

          <div class="col-8">
            <div class="card mt-4">
                <div class="card-header">
                  <h4>Cari Barang</h4>
                </div>
                <div class="card-body">
                    <form class="form-control mb-2" action="{{route('/kategori-barang/tambah-data/save')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="txt_tanggal" id="txt_tanggal" value="{{$tanggal}}" readonly>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table id="table-kasir" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th width="2%;">Jumlah</th>
                                <th>Total</th>
                                <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>No</td>
                                <td>Nama Barang</td>
                                <td><input type="number" class="form-control" name="txt_kuantiti" id="txt_kuantiti"></td>
                                <td>Nama Barang</td>
                                <td>Nama Barang</td>
                              </tr>
                            </tbody>
                        </table>
                    </div>

                    <hr>
                    <form class="form-control mb-2" action="{{route('/kategori-barang/tambah-data/save')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Grand Total</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="txt_tanggal" id="txt_tanggal" value="{{$tanggal}}" readonly>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
          </div>
        </div>


    {{-- </div> --}}

@include('partials.footer')

<script type="text/javascript">
    $(function () {
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      $('#table-cari-barang').DataTable({
        "processing": true,
        "dom":
            "<'row'<'col-sm-12 col-md-12'f>>" +
            "<'row'<'col-sm-12'tr>>" +
            "<'row'<'col-sm-12 col-md-12'p>>",
        "renderer": 'bootstrap'
      });

    $('#table-kasir').DataTable({
        "processing": true,
        "buttons": [
          {extend: 'excel', text:'<i class="fas fa-file-excel"></i> Excel', className: 'btn-primary'},
          {extend: 'csv', text:'<i class="fas fa-file-csv"></i> Csv', className: 'btn-primary'},
          {extend: 'pdf', text:'<i class="fas fa-file-pdf"></i> Pdf', className: 'btn-primary'},
        ],
        "dom":
            "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
            "<'row'<'col-sm-12'tr>>" +
            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
        "renderer": 'bootstrap'
    });


  });
  </script>

@endsection
