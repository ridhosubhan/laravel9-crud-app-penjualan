@php
$title='Data Vulnerability';
@endphp

@extends('layouts.main')
@section('content')
    
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
              Featured
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
                        <tr>
                        <td>2</td>
                        <td>smae</td>
                        <td>smae@gmail.com</td>
                        <td>10/11/22</td>
                        </tr>
                        <tr>
                        <td>3</td>
                        <td>Jhon doe3</td>
                        <td>Jhondoe3@gmail.com</td>
                        <td>10/10/22</td>
                        </tr>
                        <tr>
                        <td>4</td>
                        <td>Jhon doe4</td>
                        <td>Jhondoe4@gmail.com</td>
                        <td>10/10/24</td>
                        </tr>
                        <tr>
                        <td>5</td>
                        <td>Jhon doe5</td>
                        <td>Jhondoe5@gmail.com</td>
                        <td>10/10/21</td>
                        </tr>
                        
                    </tbody>
                    </table>
            </div>
          </div>
      </div>

@include('partials.footer')

@endsection