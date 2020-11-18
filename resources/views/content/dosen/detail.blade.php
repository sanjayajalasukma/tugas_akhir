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
                                        <li class="breadcrumb-item active">Detail Dosen</li>
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
                            <div class="col-md-6 col-12 mr-auto ml-auto">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                      <thead>
                                          <th colspan="2" class="text-disable">NRK: {{ $dosens->nrk }}</th>
                                      </thead>
                                          <tbody>
                                              <tr>
                                                  <td>Nama</td>
                                                  <td>{{ $dosens->nama_dosen }}</td>
                                              </tr>
                                              <tr>
                                                  <td>Tempat, Tanggal Lahir</td>
                                                  <td>{{ $dosens->tempat_lahir }}, {{ $dosens->tgl_lahir }}</td>
                                              </tr>
                                              <tr>
                                                  <td>Jenis Kelamin</td>
                                                  <td>{{ $dosens->jenis_kelamin }}</td>
                                              </tr>
                                            <tr>
                                                <td>Status Pernikahan</td>
                                                <td>{{ $dosens->status_pernikahan }}</td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>{{ $dosens->email }}</td>
                                            </tr>
                                            <tr>
                                                <td>Nama Sekolah / Tahun Lulus</td>
                                                <td>{{ $dosens->nama_sekolah }} / {{ $dosens->tahun_lulus }}</td>
                                            </tr>
                                            <tr>
                                                <td>Nama Jabatan</td>
                                                <td>{{ $dosens->nama_jabatan }}</td>
                                            </tr>
                                            <tr>
                                                <td>Nama Organisasi</td>
                                                <td>{{ $dosens->nama_organisasi }}</td>
                                            </tr>
                                            <tr>
                                                <td>Nama Pendidikan</td>
                                                <td>{{ $dosens->nama_pendidikan }}</td>
                                            </tr>
                                            <tr>
                                                <td>Nama Kantor</td>
                                                <td>{{ $dosens->nama_kantor }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection