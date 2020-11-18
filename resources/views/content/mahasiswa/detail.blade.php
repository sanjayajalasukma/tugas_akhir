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
                                        <li class="breadcrumb-item active">Detail Mahasiswa</li>
                                        <li class="breadcrumb-item active">{{ $mahasiswas->nama }}</li>
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
                            <div class="col-md-6 col-12 mr-auto ml-auto">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                      <thead>
                                          <th colspan="2" class="text-disable">NPM: {{ $mahasiswas->npm }}</th>
                                      </thead>
                                          <tbody>
                                              <tr>
                                                  <td>KD Prodi</td>
                                                  <td>{{ $mahasiswas->kd_prodi }}</td>
                                              </tr>
                                              <tr>
                                                  <td>Kelas Reguler</td>
                                                  <td>{{ $mahasiswas->kelas_reguler }}</td>
                                              </tr>
                                              <tr>
                                                  <td>Angkatan</td>
                                                  <td>{{ $mahasiswas->angkatan }}</td>
                                              </tr>
                                            <tr>
                                                <td>Nama</td>
                                                <td>{{ $mahasiswas->nama }}</td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td>{{ $mahasiswas->alamat }}</td>
                                            </tr>
                                            <tr>
                                                <td>Kota Asal</td>
                                                <td>{{ $mahasiswas->kota_asal }}</td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>{{ $mahasiswas->email }}</td>
                                            </tr>
                                            <tr>
                                                <td>No. Handphone</td>
                                                <td>{{ $mahasiswas->handphone }}</td>
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