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
                                        <li class="breadcrumb-item active">Daftar Tugas Akhir</li>
                                    </ol>
                               </div>
                               <div class="col-md-4">
                                   <div class="text-right card-title">
                                       <button class="btn btn-fill btn-tambah">
                                           <a href="{{ url('tugas-akhir/tambah') }}">
                                                <i class="fa fa-plus"></i> Form TA
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
                                            <th>Judul TA</th>
                                            <th>Pembimbing Kampus</th>
                                            <th>Pembimbing Lapangan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @foreach ($tugas_akhirs as $tugas_akhir)
                                        <tbody>
                                            <tr>
                                                <td>{{ $tugas_akhir->mahasiswa->nama }}</td>
                                                <td>{{ $tugas_akhir->judul_kp }}</td>
                                                <td>{{ $tugas_akhir->dosen->nama_dosen }}</td>
                                                <td>{{ $tugas_akhir->pembimbing_lapangan }}</td>
                                                <td class="td-actions">
                                                    <button type="button" rel="tooltip" class="btn btn-info btn-round btn-action">
                                                        <a href="{{ url('tugas-akhir/detail', $tugas_akhir->slug) }}">
                                                            <i class="fa fa-info"></i>
                                                        </a>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                  </table>
                                  {{ $tugas_akhirs->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection