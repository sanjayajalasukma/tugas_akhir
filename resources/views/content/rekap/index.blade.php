@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-rose card-header-icon">
                           <div class="row">
                               <div class="col-md-6">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Rekap Peserta</li>
                                    </ol>
                               </div>
                               <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-center">
                                                <form action="{{ url('rekap-peserta/print-data') }}" method="get">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                             <div class="form-group">
                                                                 <select name="bulan" class="form-control list" data-style="btn btn-link">
                                                                     <option value="">Pilih Bulan</option>
                                                                     <option value="01">Januari</option>
                                                                     <option value="02">Februari</option>
                                                                     <option value="03">Maret</option>
                                                                     <option value="04">April</option>
                                                                     <option value="05">Mei</option>
                                                                     <option value="06">Juni</option>
                                                                     <option value="07">Juli</option>
                                                                     <option value="08">Agustus</option>
                                                                     <option value="09">September</option>
                                                                     <option value="10">Oktober</option>
                                                                     <option value="11">November</option>
                                                                     <option value="12">Desember</option>
                                                                 </select>
                                                             </div>
                                                         </div>
                                                         <div class="col-md-4">
                                                             <div class="form-group">
                                                                 <select name="tahun" class="form-control list" data-style="btn btn-link">
                                                                     <option value="0">Pilih Tahun</option>
                                                                     <?php 
                                                                         $year = date('Y');
                                                                         $min = $year - 60;
                                                                             $max = $year;
                                                                         for( $i=$max; $i>=$min; $i-- ) {
                                                                         echo '<option value='.$i.'>'.$i.'</option>';
                                                                     }?>
                                                                 </select>
                                                             </div>
                                                         </div>
                                                         <button type="submit" class="btn btn-fill btn-success" style="margin-bottom: 20px;">
                                                            <i class="fa fa-search"></i> Cari
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
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
                                            <th>nama peserta</th>
                                            <th>Dosen Pembimbing</th>
                                            <th>Nilai</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    @foreach ($nilais as $nilai)
                                        <tbody>
                                            <tr>
                                                <td>{{ $nilai->kerja_praktek->npm }}</td>
                                                <td>{{ $nilai->kerja_praktek->mahasiswa->nama }}</td>
                                                <td>{{ $nilai->kerja_praktek->dosen->nama_dosen }}</td>
                                                <td>{{ $nilai->nilai_huruf }}</td>
                                                <td>{{ $nilai->keterangan }}</td>
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

    <style>
        .justify-content-center{
            text-align: center !important;
        }
    </style>
@endsection