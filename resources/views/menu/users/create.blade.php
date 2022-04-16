@extends('layouts.app')

@section('content')

<div class="content">
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800 font-weight-bold">{{ __('Add Event') }}</h1>

        <div class="row">
            <div class="col-lg-12">
                @if ($message = Session::get('success'))
                <div class="alert alert-primary alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{ $message }}
                </div>
                @endif

                <div class="card">

                    <form action="{{ route('pelatih.store') }}" method="POST">
                        @csrf

                        <div class="card-body col-lg-8">


                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Name</span>
                                </div>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="{{ __('Name') }}" required>
                            </div>
                            @error('name')
                            <div class="form-group custom-control">
                                <label class="">{{ $message }}</label>
                            </div>
                            @enderror

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Email</span>
                                </div>
                                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('Email') }}" required>
                            </div>
                            @error('email')
                            <div class="form-group custom-control">
                                <label class="">{{ $message }}</label>
                            </div>
                            @enderror

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Password</span>
                                </div>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" required>
                            </div>
                            @error('password')
                            <div class="form-group custom-control">
                                <label class="">{{ $message }}</label>
                            </div>
                            @enderror

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Role</span>
                                </div>
                                <select class="form-control @error('akun') is-invalid @enderror" name="akun" placeholder="{{ __('Akun ID') }}" onfocus='this.size=6;' onblur='this.size=1;' onchange='this.size=1; this.blur();' required>
                                    <option value="">--Select Role--</option>
                                    
                                    <option value="pelatih">Pelatih</option>
                                    <option value="asisten pelatih">Asisten Pelatih</option>
                                    <option value="pemain">Pemain</option>
                                    
                                </select>

                            </div>
                            @error('akun')
                            <div class="form-group custom-control">
                                <label class="">{{ $message }}</label>
                            </div>
                            @enderror

                            
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection