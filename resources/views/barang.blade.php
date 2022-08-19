@php
$title='Barang';
@endphp

@extends('layouts.main')
@section('content')
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form class="form-control" id="formBarang">
                        <div class="mb-3">
                          <label for="validationTextarea" class="form-label">Nama Barang</label>
                          <input name="txt_barang" type="text" class="form-control" id="txt_barang" placeholder="Nama Barang">
                          <div class="invalid-feedback">
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="validationTextarea" class="form-label">Harga Barang</label>
                          <input name="txt_harga" type="text" class="form-control" id="txt_harga" placeholder="Harga Barang">
                          <div class="invalid-feedback">
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="validationTextarea" class="form-label">Stok</label>
                          <input name="txt_stok" type="text" class="form-control" id="txt_stok" value="Stok Barang" required>
                          <div class="invalid-feedback">
                          </div>
                        </div>
                        <div class="mb-3">
                            <label for="validationTextarea" class="form-label">Kategori Barang</label>
                            <select name="txt_kategori_barang" id="txt_kategori_barang" class="form-select" required aria-label="select example">
                              <option value="" selected disabled>Kategori Barang</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                            <div class="invalid-feedback">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                  <h4>Data Barang</h4>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Tambah Data
                        </button>
                    </div>
                    <div class="table-responsive">
                        <table id="table-barang" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                <th>No</th>
                                <th>Barang</th>
                                <th>Harga</th>
                                <th>Kategori Barang</th>
                                <th>Stok</th>
                                <th>Aksi</th>
                                </tr>
                            </thead>
                            @php
                                $i=1;
                            @endphp
                            @foreach ($data as $d)
                            <tbody>
                              <tr>
                                <td>{{$i++}}</td>
                                <td>{{$d['nama_barang']}}</td>
                                <td>{{$d['harga']}}</td>
                                <td>{{$d['stok_id']}}</td>
                                <td>{{$d['jenis_barang_id']}}</td>
                                <td>
                                    <button type="button" class="btn btn-secondary">Edit</button>
                                    <button type="button" class="btn btn-danger">Hapus</button>
                                </td>
                              </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>     

@include('partials.footer')

<script type="text/javascript">
    $(function () {
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
  
    var table = $('#table-barang').DataTable({
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, 'All'],
        ],
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

     

  $('#createNewData').click(function () {
      $("#saveBtn").prop( "disabled", false);
      $('#txt_id').val('');
      $('#formBarang').trigger("reset");
      $('#modalHeading').html("Tambah Data Vulnerability");
      $('#ajaxModal').modal('show');
  });

  $('#formBarang').on('submit', function(e){
    e.preventDefault();
        $.ajax({
            data: $('#formBarang').serialize(),
            url: "{{ route('data-vulnerability.save') }}",
            type: "POST",
            dataType: 'json',
            beforeSend:function(){
                $("#saveBtn").prop("disabled", true);
                $('#saveBtn').html('<i class="fas fa-spinner fa-spin"></i> Mengirim');
            },
            success: function (data) {
                
            },
            error: function (data) {
                console.log('Error:', data);
                $('#saveBtn').html('Simpan Data');
            }
        });
    });


  });
  </script>

@endsection