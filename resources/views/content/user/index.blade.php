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
                                    </ol>
                               </div>
                               <div class="col-md-4">
                                   <div class="text-right card-title">
                                       <button class="btn btn-fill btn-tambah">
                                           <a href="{{ url('user/tambah') }}">
                                                <i class="fa fa-plus"></i> Tambah User  
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
                                            <th>nrk</th>
                                            <th>Nama</th>
                                            <th>Handphone</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @foreach ($users as $user)
                                        <tbody>
                                            <tr>
                                                <td>{{ $user->nrk }}</td>
                                                <td>
                                                    {{ $user->name }}
                                                </td>
                                                <td>{{ $user->handphone }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td class="td-actions">
                                                    <button type="button" rel="tooltip" class="btn btn-info btn-round btn-action">
                                                        <a href="{{ url('user/detail', $user->id) }}">
                                                            <i class="fa fa-info"></i>
                                                        </a>
                                                    </button>
                                                    <button type="button" rel="tooltip" class="btn btn-success btn-round btn-action">
                                                        <a href="{{ url('user/edit', $user->id) }}">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                    </button>
                                                    <button type="button" rel="tooltip" class="btn btn-danger btn-round btn-action hapus" data-id="{{ $user->id }}" data-action="{{ route('user/hapus',$user->id) }}">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                  </table>
                                  {{ $users->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
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