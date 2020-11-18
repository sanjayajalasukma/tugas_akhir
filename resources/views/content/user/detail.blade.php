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
                                        <li class="breadcrumb-item active">Daftar User</li>
                                        <li class="breadcrumb-item active">Detail User</li>
                                        <li class="breadcrumb-item active">{{ $users->name }}</li>
                                    </ol>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-right card-title">
                                        <button class="btn btn-fill btn-kembali">
                                            <a href="{{ url('/user') }}">
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
                                          <th colspan="2" class="text-disable">NRK: {{ $users->nrk }}</th>
                                      </thead>
                                          <tbody>
                                            <tr>
                                                <td>Nama</td>
                                                <td>{{ $users->name }}</td>
                                            </tr>
                                              <tr>
                                                  <td>Email</td>
                                                  <td>{{ $users->email }}</td>
                                              </tr>
                                              <tr>
                                                  <td>No. Handphone</td>
                                                  <td>{{ $users->handphone }}</td>
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