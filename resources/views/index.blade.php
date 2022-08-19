@php
$title='Data Vulnerability';
@endphp

@extends('layouts.main')
@section('content')
    
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
              Data Barang
            </div>
            <div class="card-body">
                <table id="datatable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>createdAt</th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Jhon doe</td>
                        <td>Jhondoe@gmail.com</td>
                        <td>10/10/22</td>
                      </tr>
                    </tbody>
                    </table>
            </div>
          </div>
      </div>

@include('partials.footer')

@endsection