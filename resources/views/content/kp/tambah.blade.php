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
                                        <li class="breadcrumb-item active">Daftar Kerja Praktek</li>
                                        <li class="breadcrumb-item active">Form KP</li>
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
                            <div class="col-md-8 col-12 mr-auto ml-auto border-form">
                                <form action="{{ url('kerja-praktek/tambah') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">NPM</label>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <select name="npm" class="form-control list" id="npm" data-style="btn btn-link">
                                                    <option></option>
                                                    @foreach ($mahasiswas as $mahasiswa)
                                                        <option value="{{ $mahasiswa->npm }}">{{ $mahasiswa->npm }} - {{ $mahasiswa->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">No Handphone</label>
                                        <div class="col-md-9">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating"></label>
                                                <input type="text" class="form-control text-disable" name="handphone" id="handphone" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">Email</label>
                                        <div class="col-md-9">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating"></label>
                                                <input type="email" class="form-control text-disable" name="email" id="email" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">Alamat</label>
                                        <div class="col-md-9">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating"></label>
                                                <textarea name="alamat" id="alamat" class="form-control text-disable" readonly></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">Judul KP</label>
                                        <div class="col-md-9">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating">masukan judul kp</label>
                                                <input type="text" class="form-control" name="judul_kp">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">Tempat KP</label>
                                        <div class="col-md-9">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating">masukan tempat kp</label>
                                                <input type="text" class="form-control" name="tempat_kp">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">Pembimbing Lapangan</label>
                                        <div class="col-md-9">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating">masukan pembimbing lapangan</label>
                                                <input type="text" class="form-control" name="pembimbing_lapangan">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">Pembimbing Kampus</label>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <select name="nrk" class="form-control list" id="nrk" data-style="btn btn-link">
                                                    <option></option>
                                                    @foreach ($dosens as $dosen)
                                                        <option value="{{ $dosen->nrk }}">{{ $dosen->nrk }} - {{ $dosen->nama_dosen }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">Awal Bimbingan</label>
                                        <div class="col-md-9">
                                            <div class="form-group bmd-form-group">
                                                <label class="label-control">masukan awal bimbingan</label>
                                                <input type="text" class="form-control datepicker" name="awal_bimbingan">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-3 col-form-label text-left">Dokumen Persyaratan</label>
                                        <div class="col-md-9 m15">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                          <input class="form-check-input" type="checkbox" name="dokumen_persyaratan[]" value="trankrip_nilai"> Transkrip Nilai
                                                          <span class="form-check-sign">
                                                              <span class="check"></span>
                                                          </span>
                                                        </label>
                                                      </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                          <input class="form-check-input" type="checkbox" name="dokumen_persyaratan[]" value="history_pembayaran"> History Pembayaran
                                                          <span class="form-check-sign">
                                                              <span class="check"></span>
                                                          </span>
                                                        </label>
                                                      </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                          <input class="form-check-input" type="checkbox" name="dokumen_persyaratan[]" value="form_kp"> Form Pengajuan KP
                                                          <span class="form-check-sign">
                                                              <span class="check"></span>
                                                          </span>
                                                        </label>
                                                      </div>
                                                </div>
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
                        url: "{{ route('getData') }}",
                        method: "GET",
                        dataType: "json",
                        data: "npm="+npm,
                        success:function(data){
                            var alamat = data.alamat;
                            var email = data.email;
                            var handphone = data.handphone;
            
                            $("#handphone").val(handphone);
                            $("#email").val(email);
                            $("#alamat").val(alamat);
                        },
                        error: function(response){
                            alert(response.responseJSON.message);
                        }
                    })
            });
        });
    </script>

@endsection