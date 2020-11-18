@extends('layouts.app')
@section('content')

  <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body"> 
                        <div class="row">
                            <div class="col-md-3 cards">
                                <div class="card card-pricing card-raised">
                                  <div class="card-body">
                                    <h6 class="card-category">USER</h6>
                                    <div class="card-icon icon-rose">
                                      <i class="fa fa-user"></i>
                                    </div>
                                    <h3 class="card-title">{{ $users->count() }}</h3>
                                    <p class="card-description">
                                      Jumlah User
                                    </p>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-3 cards">
                                <div class="card card-pricing card-raised">
                                  <div class="card-body">
                                    <h6 class="card-category">mahasiswa</h6>
                                    <div class="card-icon icon-success">
                                        <i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <h3 class="card-title">{{ $mahasiswas->count() }}</h3>
                                    <p class="card-description">
                                      Jumlah Mahasiswa
                                    </p>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-3 cards">
                                <div class="card card-pricing card-raised">
                                  <div class="card-body">
                                    <h6 class="card-category">dosen</h6>
                                    <div class="card-icon icon-info">
                                        <i class="fa fa-university"></i>
                                    </div>
                                    <h3 class="card-title">{{ $dosens->count() }}</h3>
                                    <p class="card-description">
                                      Jumlah Dosen
                                    </p>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-3 cards">
                                <div class="card card-pricing card-raised">
                                  <div class="card-body">
                                    <h6 class="card-category">Kerja Praktek</h6>
                                    <div class="card-icon icon-warning">
                                        <i class="fa fa-briefcase"></i>
                                    </div>
                                    <h3 class="card-title">{{ $kerja_prakteks->count() }}</h3>
                                    <p class="card-description">
                                      Jumlah KP
                                    </p>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header card-header-icon card-header-rose">
                      <div class="card-icon">
                        <i class="material-icons">insert_chart</i>
                      </div>
                      <h4 class="card-title">Kerja Praktek</h4>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          {!! $nilai_huruf->html() !!}
                        </div>
                        <div class="col-md-6">
                          {!! $keterangan->html() !!} 
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
  </div>
 
  
  {!! Charts::scripts() !!}
  {!! $nilai_huruf->script() !!}
  {!! $keterangan->script() !!}
 
@endsection