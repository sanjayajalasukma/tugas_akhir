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
                                        <li class="breadcrumb-item active">Daftar Mahasiswa</li>
                                        <li class="breadcrumb-item active">Tambah Mahasiswa</li>
                                    </ol>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-right card-title">
                                        <button class="btn btn-fill btn-kembali">
                                            <a href="{{ url('/mahasiswa') }}">
                                                <i class="fa fa-arrow-left"></i> Kembali
                                            </a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="col-md-6 col-12 mr-auto ml-auto border-form">
                                <form action="{{ url('mahasiswa/update', $mahasiswas->slug) }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">NPM</label>
                                        <div class="col-md-9">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating"></label>
                                                <input type="text" class="form-control text-disable" name="npm" disabled value="{{ $mahasiswas->npm }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">Nama</label>
                                        <div class="col-md-9">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating">{{ $mahasiswas->nama }}</label>
                                                <input type="text" class="form-control" name="nama" value="{{ $mahasiswas->nama }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">No Handphone</label>
                                        <div class="col-md-9">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating">masukan nomor handphone</label>
                                                <input type="text" class="form-control" name="handphone" value="{{ $mahasiswas->handphone }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">Email</label>
                                        <div class="col-md-9">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating"></label>
                                                <input type="email" class="form-control" name="email" value="{{ $mahasiswas->email }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">KD Prodi</label>
                                        <div class="col-md-9">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating"></label>
                                                <input type="email" class="form-control" name="kd_prodi" disabled value="{{ $mahasiswas->kd_prodi }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">Kelas Reguler</label>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <select name="kelas_reguler" class="form-control selectpicker" data-style="btn btn-link">
                                                    <option value="{{ $mahasiswas->kelas_reguler }}">----</option>
                                                    <option value="A">A</option>
                                                    <option value="B1">B1</option>
                                                    <option value="B2">B2</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">Angkatan</label>
                                        <div class="col-md-9">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating"></label>
                                                <input type="text" class="form-control" name="angkatan" value="{{ $mahasiswas->angkatan }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">Kota Asal</label>
                                        <div class="col-md-9">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating">masukan kota asal mahasiswa</label>
                                                <input type="text" class="form-control" name="kota_asal" value="{{ $mahasiswas->kota_asal }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">Alamat</label>
                                        <div class="col-md-9">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating">masukan alamat mahasiswa</label>
                                                <textarea name="alamat" class="form-control" value="{{ $mahasiswas->alamat }}">{{ $mahasiswas->alamat }}</textarea>
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