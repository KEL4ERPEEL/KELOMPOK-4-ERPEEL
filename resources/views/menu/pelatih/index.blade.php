@extends('layouts.app')

@section('custom_styles')
<link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 font-weight-bold">Pelatih</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{route('pelatih.create')}}" class="btn btn-primary m-0 font-weight-bold">Tambah Pelatih</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-borderless table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>Name</th>
                            <th>Email Address</th>
                            <th>Age</th>
                    </thead>
                    <tbody class="text-dark">
                        @foreach($pelatih as $pel)
                        <tr>
                            <td>{{ $pel->user->name }}</td>
                            <td>{{ $pel->user->email }}</td>
                            <td>{{ $pel->age }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection

@section('custom_scripts')
<!-- Page level custom scripts -->
<script src="{{ asset('js/datatables-demo.js') }}"></script>
@endsection