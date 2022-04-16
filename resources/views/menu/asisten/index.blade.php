@extends('layouts.app')

@section('custom_styles')
<link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 font-weight-bold">Asisten Pelatih</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        {{-- <div class="card-header py-3">
            <a href="#" class="btn btn-primary m-0 font-weight-bold">Add User</a>
        </div> --}}
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
                        @foreach($asisten as $asis)
                        <tr>
                            <td>{{ $asis->user->name }}</td>
                            <td>{{ $asis->user->email }}</td>
                            <td>{{ $asis->age }}</td>
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