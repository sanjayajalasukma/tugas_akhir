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
                                        <li class="breadcrumb-item active">Daftar Nilai KP</li>
                                        <li class="breadcrumb-item active">Detail Nilai KP</li>
                                        <li class="breadcrumb-item active">{{ $nilai->kerja_praktek->mahasiswa->nama }}</li>
                                    </ol>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-right card-title">
                                        <button class="btn btn-fill btn-kembali">
                                            <a href="{{ url('/nilai-kp') }}">
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
                                                  <td>{{ $nilai->kerja_praktek->mahasiswa->nama }}</td>
                                              </tr>
                                              <tr>
                                                  <td>NPM</td>
                                                  <td>{{ $nilai->kerja_praktek->npm }}</td>
                                              </tr>
                                              <tr>
                                                  <td>Alamat Mahasiswa</td>
                                                  <td>
                                                      {{ $nilai->kerja_praktek->mahasiswa->alamat }}
                                                      <p>Telp  :<span> {{ $nilai->kerja_praktek->mahasiswa->handphone }}</span> </p>
                                                      <p>Email :<span> {{ $nilai->kerja_praktek->mahasiswa->email }}</span></p>
                                                  </td>
                                              </tr>
                                            <tr>
                                                <td>Topik / Judul KP</td>
                                                <td>{{ $nilai->kerja_praktek->judul_kp }}</td>
                                            </tr>
                                            <tr>
                                                <td>Pembimbing Kampus</td>
                                                <td>{{ $nilai->kerja_praktek->dosen->nama_dosen }}</td>
                                            </tr>
                                            <tr>
                                                <td>Batas Waktu Bimbingan</td>
                                                <td>{{ \Carbon\Carbon::parse($nilai->kerja_praktek->awal_bimbingan)->format('d-m-Y') }} s/d {{ \Carbon\Carbon::parse($nilai->kerja_praktek->akhir_bimbingan)->format('d-m-Y') }}</td>
                                            </tr>
                                            <tr>
                                                <td>Bimbingan & Tata Tulis</td>
                                                <td>{{ $nilai->nilai_tulis }}</td>
                                            </tr>
                                            <tr>
                                                <td>Presentasi Hasil KP</td>
                                                <td>{{ $nilai->nilai_presentasi }}</td>
                                            </tr>
                                            <tr>
                                                <td>Nilai Huruf</td>
                                                <td>{{ $nilai->nilai_huruf }}</td>
                                            </tr>
                                            <tr>
                                                <td>Keterangan</td>
                                                <td>{{ $nilai->keterangan }}</td>
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