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
                                        <li class="breadcrumb-item active">Daftar Mahasiswa</li>
                                    </ol>
                               </div>
                               <div class="col-md-4">
                                    <div class="text-right card-title">
                                        <button class="btn btn-tambah btn-fill" data-toggle="modal" data-target="#modalForm">
                                            <i class="fa fa-plus"></i> Tambah Mahasiswa
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
                                            <th>npm</th>
                                            <th>Nama</th>
                                            <th>Handphone</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @foreach ($mahasiswas as $mahasiswa)
                                        <tbody>
                                            <tr>
                                                <td>{{ $mahasiswa->npm }}</td>
                                                <td>
                                                    {{ $mahasiswa->nama }}
                                                </td>
                                                <td>{{ $mahasiswa->handphone }}</td>
                                                <td>{{ $mahasiswa->email }}</td>
                                                <td class="td-actions">
                                                    <button type="button" rel="tooltip" class="btn btn-info btn-round btn-action">
                                                        <a href="{{ url('mahasiswa/detail', $mahasiswa->slug) }}">
                                                            <i class="fa fa-info"></i>
                                                        </a>
                                                    </button>
                                                    <button type="button" rel="tooltip" class="btn btn-success btn-round btn-action">
                                                        <a href="{{ url('mahasiswa/edit', $mahasiswa->slug) }}">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                    </button>
                                                    <button type="button" rel="tooltip" class="btn btn-danger btn-round btn-action hapus" data-id="{{ $mahasiswa->id }}" data-action="{{ route('mahasiswa/hapus',$mahasiswa->id) }}">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                  </table>
                                  {{ $mahasiswas->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalForm" tabindex="-1" role="">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Import File Mahasiswa</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{ url('mahasiswa/tambah') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <label class="col-md-3 col-form-label text-left">File</label>
                    <div class="col-md-9">
                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                            <div class="fileinput-new thumbnail">
                              <img src="{{ asset('assets/img/excel.jpg') }}" alt="...">
                            </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                                <div>
                                    <span class="btn btn-rose btn-round btn-file">
                                        <span class="fileinput-new">Select File</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="hidden"><input type="file" name="file_import">
                                        <div class="ripple-container"></div>
                                    </span>
                                    <a href="#" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-right">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
    
    <script type="text/javascript">
        $("body").on("click",".hapus",function(){
          var current_object = $(this);
          swal({
              title: "Apakah Anda Yakin?",
              text: "Data akan dihapus ?",
              type: "error",
              showCancelButton: true,
              dangerMode: true,
              cancelButtonClass: '#DD6B55',
              confirmButtonColor: '#dc3545',
              confirmButtonText: 'Delete!',
          },function (result) {
              if (result) {
                  var action = current_object.attr('data-action');
                  var token = jQuery('meta[name="csrf-token"]').attr('content');
                  var id = current_object.attr('data-id');
      
                  $('body').html("<form class='form-inline remove-form' method='post' action='"+action+"'></form>");
                  $('body').find('.remove-form').append('<input name="_method" type="hidden" value="delete">');
                  $('body').find('.remove-form').append('<input name="_token" type="hidden" value="'+token+'">');
                  $('body').find('.remove-form').append('<input name="id" type="hidden" value="'+id+'">');
                  $('body').find('.remove-form').submit();
              }
          });
      });
    </script>


@endsection