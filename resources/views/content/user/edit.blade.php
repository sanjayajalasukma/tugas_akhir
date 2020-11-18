@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-rose card-header-icon">
                            <div class="row">
                                <div class="col-md-8">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Daftar User</li>
                                        <li class="breadcrumb-item active">Update User</li>
                                        <li class="breadcrumb-item active">{{ $users->name }}</li>
                                    </ol>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-right card-title">
                                        <button class="btn btn-fill btn-kembali">
                                            <a href="{{ url('/user') }}">
                                                <i class="fa fa-arrow-left"></i> Kembali
                                            </a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="col-md-6 col-12 mr-auto ml-auto border-form">
                                <form action="{{ url('user/update', $users->id) }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">NRK</label>
                                        <div class="col-md-9">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating"></label>
                                                <input type="text" class="form-control text-disable" name="nrk" value="{{ $users->nrk }}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">Nama</label>
                                        <div class="col-md-9">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating"></label>
                                                <input type="text" class="form-control" name="name" value="{{ $users->name }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">Email</label>
                                        <div class="col-md-9">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating"></label>
                                                <input type="email" class="form-control" name="email" value="{{ $users->email }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">Password</label>
                                        <div class="col-md-9">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating"></label>
                                                <input type="password" class="form-control" name="password" value="{{ $users->password }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">No Handphone</label>
                                        <div class="col-md-9">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating"></label>
                                                <input type="text" class="form-control" name="handphone" value="{{ $users->handphone }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-fill btn-success">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection