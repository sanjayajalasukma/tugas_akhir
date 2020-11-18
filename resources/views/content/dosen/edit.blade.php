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
                                        <li class="breadcrumb-item active">Daftar Dosen</li>
                                        <li class="breadcrumb-item active">Edit Dosen</li>
                                        <li class="breadcrumb-item active">{{ $dosens->nama }}</li>
                                    </ol>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-right card-title">
                                        <button class="btn btn-fill btn-kembali">
                                            <a href="{{ url('/dosen') }}">
                                                <i class="fa fa-arrow-left"></i> Kembali
                                            </a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="col-md-6 col-12 mr-auto ml-auto border-form">
                                <form action="{{ url('dosen/update', $dosens->slug) }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">NRK</label>
                                        <div class="col-md-9">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating"></label>
                                                <input type="text" class="form-control text-disable" name="nrk" value="{{ $dosens->nrk }}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">Nama</label>
                                        <div class="col-md-9">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating"></label>
                                                <input type="text" class="form-control" name="nama_dosen" value="{{ $dosens->nama_dosen }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">Tempat, Tanggal Lahir</label>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group bmd-form-group">
                                                        <label class="bmd-label-floating"></label>
                                                        <input type="text" name="tempat_lahir" class="form-control text-disable" value="{{ $dosens->tempat_lahir }}" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group bmd-form-group">
                                                        <label class="bmd-label-floating"></label>
                                                        <input type="text" name="tgl_lahir" class="form-control text-disable" value="{{ $dosens->tgl_lahir }}" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">Jenis Kelamin</label>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <select name="jenis_kelamin" class="form-control selectpicker" data-style="btn btn-link">
                                                    <option value="{{ $dosens->jenis_kelamin }}">----</option>
                                                    <option value="L">Laki-Laki</option>
                                                    <option value="P">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">Status Pernikahan</label>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <select name="status_pernikahan" class="form-control selectpicker" data-style="btn btn-link">
                                                    <option value="{{ $dosens->status_pernikahan }}">----</option>
                                                    <option value="KAWIN">KAWIN</option>
                                                    <option value="BELUM">BELUM</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">Nama Sekolah</label>
                                        <div class="col-md-9">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating"></label>
                                                <input type="text" class="form-control" name="nama_sekolah" value="{{ $dosens->nama_sekolah }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">Tahun</label>
                                        <div class="col-md-9">
                                            <div class="form-group bmd-form-group">
                                                <input type="text" class="form-control yearpicker" placeholder="Tahun Lulus" name="tahun_lulus" value="{{ $dosens->tahun_lulus }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">Nama Jabatan</label>
                                        <div class="col-md-9">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating"></label>
                                                <input type="text" class="form-control" name="nama_jabatan" value="{{ $dosens->nama_jabatan }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">Nama Organisasi</label>
                                        <div class="col-md-9">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating"></label>
                                                <input type="text" class="form-control" name="nama_organisasi" value="{{ $dosens->nama_organisasi }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">Nama Pendidikan</label>
                                        <div class="col-md-9">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating"></label>
                                                <input type="text" class="form-control" name="nama_pendidikan" value="{{ $dosens->nama_pendidikan }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">Nama Kantor</label>
                                        <div class="col-md-9">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating"></label>
                                                <input type="text" class="form-control" name="nama_kantor" value="{{ $dosens->nama_kantor }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">Email</label>
                                        <div class="col-md-9">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating"></label>
                                                <input type="email" class="form-control" name="email" value="{{ $dosens->email }}">
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