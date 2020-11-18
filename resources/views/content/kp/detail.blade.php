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
                                        <li class="breadcrumb-item active">Daftar KP</li>
                                        <li class="breadcrumb-item active">Detail KP</li>
                                        <li class="breadcrumb-item active">{{ $kerja_praktek->mahasiswa->nama }}</li>
                                    </ol>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-right card-title">
                                        <button class="btn btn-fill btn-kembali">
                                            <a href="{{ url('/kerja-praktek') }}">
                                                <i class="fa fa-arrow-left"></i> Kembali
                                            </a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="col-md-7 col-12 mr-auto ml-auto">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                          <tbody>
                                              <tr>
                                                  <td>Nama Mahasiswa</td>
                                                  <td>{{ $kerja_praktek->mahasiswa->nama }}</td>
                                              </tr>
                                              <tr>
                                                  <td>NPM</td>
                                                  <td>{{ $kerja_praktek->npm }}</td>
                                              </tr>
                                              <tr>
                                                  <td>Alamat Mahasiswa</td>
                                                  <td>
                                                      {{ $kerja_praktek->mahasiswa->alamat }}
                                                      <p>Telp  :<span> {{ $kerja_praktek->mahasiswa->handphone }}</span> </p>
                                                      <p>Email :<span> {{ $kerja_praktek->mahasiswa->email }}</span></p>
                                                  </td>
                                              </tr>
                                            <tr>
                                                <td>Topik / Judul KP</td>
                                                <td>{{ $kerja_praktek->judul_kp }}</td>
                                            </tr>
                                            <tr>
                                                <td>Pembimbing Kampus</td>
                                                <td>{{ $kerja_praktek->dosen->nama_dosen }}</td>
                                            </tr>
                                            <tr>
                                                <td>Batas Waktu Bimbingan</td>
                                                <td>{{ \Carbon\Carbon::parse($kerja_praktek->awal_bimbingan)->format('d-m-Y') }} s/d {{ \Carbon\Carbon::parse($kerja_praktek->akhir_bimbingan)->format('d-m-Y') }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="text-center">
                                            <button type="button" class="btn btn-fill btn-social btn-tumblr">
                                                <a href="{{ url('kerja-praktek/kartu-bimbingan', $kerja_praktek->slug) }}" target="_blank">
                                                    <i class="fa fa-print"></i> Kartu Bimbingan
                                                </a>
                                            </button>
                                            <button type="button" class="btn btn-fill btn-social btn-tumblr">
                                                <a href="{{ url('kerja-praktek/formulir-nilai', $kerja_praktek->slug) }}" target="_blank">
                                                    <i class="fa fa-print"></i> Formulir Nilai
                                                </a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection