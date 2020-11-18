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
                                    </ol>
                               </div>
                               <div class="col-md-4">
                                   <div class="text-right card-title">
                                       <button class="btn btn-fill btn-tambah">
                                           <a href="{{ url('nilai-kp/tambah') }}">
                                                <i class="fa fa-plus"></i> Form Nilai
                                            </a>
                                       </button>
                                   </div>
                               </div>
                           </div>
                        </div>
                        <div class="card-body">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                  <table class="table table-bordered table-hover tc">
                                    <thead>
                                        <tr>
                                            <th>NPM</th>
                                            <th>nama mahasiswa</th>
                                            <th>Judul KP</th>
                                            <th>Dosen Pembimbing</th>
                                            <th>Nilai</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @foreach ($nilais as $nilai)
                                        <tbody>
                                            <tr>
                                                <td>{{ $nilai->kerja_praktek->npm }}</td>
                                                <td>{{ $nilai->kerja_praktek->mahasiswa->nama }}</td>
                                                <td>{{ $nilai->kerja_praktek->judul_kp }}</td>
                                                <td>{{ $nilai->kerja_praktek->dosen->nama_dosen }}</td>
                                                <td>{{ $nilai->nilai_huruf }}</td>
                                                <td class="td-actions">
                                                    <button type="button" rel="tooltip" class="btn btn-info btn-round btn-action">
                                                        <a href="{{ url('nilai-kp/detail', $nilai->slug) }}">
                                                            <i class="fa fa-info"></i>
                                                        </a>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                  </table>
                                  {{ $nilais->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection