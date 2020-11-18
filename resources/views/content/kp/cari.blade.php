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
                                        <li class="breadcrumb-item active">Kerja Praktek</li>
                                        <li class="breadcrumb-item active">{{ $kps->mahasiswa->nama }}</li>
                                    </ol>
                               </div>
                               <div class="col-md-4">
                                   <div class="text-right card-title">
                                       <button class="btn btn-fill btn-tambah">
                                           <a href="{{ url('kerja-praktek/tambah') }}">
                                                <i class="fa fa-plus"></i> Form KP  
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
                                                <th>Nama Mahasiswa</th>
                                                <th>Judul KP</th>
                                                <th>Pembimbing Kampus</th>
                                                <th>Pembimbing Lapangan</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $kps->mahasiswa->nama }}</td>
                                                <td>{{ $kps->judul_kp }}</td>
                                                <td>{{ $kps->dosen->nama_dosen }}</td>
                                                <td>{{ $kps->pembimbing_lapangan }}</td>
                                                <td class="td-actions">
                                                    <button type="button" rel="tooltip" class="btn btn-info btn-round btn-action">
                                                        <a href="{{ url('kerja-praktek/detail', $kps->slug) }}">
                                                            <i class="fa fa-info"></i>
                                                        </a>
                                                    </button>
                                                </td>
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