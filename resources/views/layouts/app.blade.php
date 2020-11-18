<!DOCTYPE html>
<html lang="en" class="perfect-scrollbar-on">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="{{ asset('fav.ico') }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>
    Sistem Pendaftaran KP @yield('title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

  <!-- CSS Files -->

  <link href="{{ asset('assets/css/material-dashboard.css?v=2.1.2') }}" rel="stylesheet" />

  <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />

   @include('include.script')
</head>

<body class="">
  @include('sweetalert::alert')

  <div class="wrapper ">

    <div class="sidebar" data-color="orange" data-background-color="black">
      @include('include.sidebar')
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      @include('include.navbar')
      <!-- End Navbar -->
      <div class="main-content">
        @yield('content')
      </div>
  
      <footer class="footer">
        <div class="container-fluid">
          <div class="copyright float-right">
            
          </div>
        </div>
      </footer>

      <script>
        $('.datepicker').datetimepicker({
            // format: 'DD-MM-YYYY',
            format: 'YYYY-MM-DD',
            icons: {
              previous: 'fa fa-chevron-left',
              next: 'fa fa-chevron-right',
            }
        });
        $('.yearpicker').datetimepicker({
            format: 'YYYY',
            icons: {
              previous: 'fa fa-chevron-left',
              next: 'fa fa-chevron-right',
            }
        });
      </script>
      <script type="text/javascript">
        $(document).ready(function() {
            $('.list').select2({
                placeholder: '----',
            });
        });
      </script>
      <script type="text/javascript">
        $('.datepicker').datetimepicker({
          icons: {
              time: "fa fa-clock-o",
              date: "fa fa-calendar",
              up: "fa fa-chevron-up",
              down: "fa fa-chevron-down",
              previous: 'fa fa-chevron-left',
              next: 'fa fa-chevron-right',
              today: 'fa fa-screenshot',
              clear: 'fa fa-trash',
              close: 'fa fa-remove'
          }
      });
      </script>

    </div>
  </div>
  
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Keluar?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih Logout Jika Anda Ingin Keluar dari Dashboard</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
          {{-- <a class="btn btn-primary" href="logout.php">Logout</a> --}}
          <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              Logout
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </div>
      </div>
    </div>
  </div>
 
</body>

</html>
