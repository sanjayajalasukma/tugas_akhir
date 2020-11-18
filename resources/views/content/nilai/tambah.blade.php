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
                                        <li class="breadcrumb-item active">Tambah Nilai</li>
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
                            <div class="col-md-8 col-12 mr-auto ml-auto border-form">
                                <form action="{{ url('nilai-kp/tambah') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">NPM</label>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <select name="npm" class="form-control list" id="npm" data-style="btn btn-link" required>
                                                    <option></option>
                                                    @foreach ($mahasiswas as $mahasiswa)
                                                        <option value="{{ $mahasiswa->npm }}">{{ $mahasiswa->npm }} - {{ $mahasiswa->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">Judul KP</label>
                                        <div class="col-md-9">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating"></label>
                                                <input type="text" class="form-control text-disable" name="judul_kp" id="judul_kp" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">Tempat KP</label>
                                        <div class="col-md-9">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating"></label>
                                                <input type="text" class="form-control text-disable" id="tempat_kp" name="tempat_kp" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">Pembimbing Lapangan</label>
                                        <div class="col-md-9">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating"></label>
                                                <input type="text" class="form-control text-disable" name="pembimbing_lapangan" id="pembimbing_lapangan" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">Pembimbing Kampus</label>
                                        <div class="col-md-9">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating"></label>
                                                <input type="text" class="form-control text-disable" name="nrk" id="nrk" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">Bimbingan & Tata Tulis</label>
                                        <div class="col-md-9">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating">masukan nilai tulis</label>
                                                <input type="number" class="form-control" name="nilai_tulis" id="1" min="0" max="100">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">Presentasi Hasil KP</label>
                                        <div class="col-md-9">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating">masukan nilai presentasi</label>
                                                <input type="number" class="form-control" name="nilai_presentasi" id="2" min="0" max="100">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">Nilai Angka</label>
                                        <div class="col-md-9">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating"></label>
                                                <input type="text" class="form-control text-disable" name="nilai_angka" id="3" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-fill btn-success">Save</button>
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

    <script>
        $(document).ready(function(){
            $('#npm').change(function(){
                var npm = $(this).val();
                    $.ajax({
                        url: "{{ route('getKp') }}",
                        method: "GET",
                        dataType: "json",
                        data: "npm="+npm,
                        success:function(data){
                            // var npm = data.nama;
                            var judul_kp = data.judul_kp;
                            var tempat_kp = data.tempat_kp;
                            var nrk = data.nama_dosen;
                            var pembimbing_lapangan = data.pembimbing_lapangan;
                            
                            $("#judul_kp").val(judul_kp);
                            $("#tempat_kp").val(tempat_kp);
                            $("#nrk").val(nrk);
                            $("#pembimbing_lapangan").val(pembimbing_lapangan);
                        },
                        error: function(response){
                            alert(response.responseJSON.message);
                        }
                    })
            });
        });
    </script>
    <script>
        $('#1, #2').keyup(function(){
            var a = parseInt($("#1").val());
            var b = parseInt($("#2").val());
            var c = 60/100 * a;
            var d = 40/100 * b;
            var e = c + d;
            $("#3").val(e);
        });
    </script>

@endsection