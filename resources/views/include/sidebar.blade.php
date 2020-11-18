      <div class="logo">
        <a href="#" class="simple-text logo-normal m25">
          <img src="{{ asset('assets/img/logo.png') }}" alt="" class="img-logo"> Prodi Informatika
        </a>
      </div>
      <div class="sidebar-wrapper">
        <div class="user">
          <div class="photo">
              <img src="{{ asset('assets/img/user.jpg') }}" alt="" class="img-user">
          </div>
          <div class="user-info">
            <a data-toggle="collapse" href="#" class="username">
              <span style="text-transform: uppercase;">
                {{ Auth::User()->name }}
              </span>
            </a>
          </div>
        </div>
        <ul class="nav" id="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/home') }}">
                  <i class="fa fa-home bg-blue bwhite"></i>
                  <span class="sidebar-normal">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/user') }}">
                <i class="fa fa-user-circle bg-purple bwhite"></i>
                <span class="sidebar-normal">Daftar User</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/mahasiswa') }}">
                <i class="fa fa-graduation-cap bg-green bwhite"></i>
                <span class="sidebar-normal">Daftar Mahasiswa</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/dosen') }}">
                <i class="fa fa-university bg-awan bwhite"></i>
                <span class="sidebar-normal">Daftar Dosen</span>
              </a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" href="{{ url('/kerja-praktek') }}">
                <i class="fa fa-history bg-yellow bwhite"></i>
                <span class="sidebar-normal">History KP</span>
              </a>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#history">
                  <i class="fa fa-history bg-yellow bwhite"></i>
                  <p> History
                      <b class="caret"></b>
                  </p>
              </a>
              <div class="collapse bb" id="history">
                  <ul class="nav">
                      <li class="nav-item">
                          <a class="nav-link" href="{{ url('/kerja-praktek') }}">
                              <span class="sidebar-mini">KP</span>
                              <span class="sidebar-normal">Kerja Praktek</span>
                          </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ url('/tugas-akhir') }}">
                            <span class="sidebar-mini">TA</span>
                            <span class="sidebar-normal">Tugas Akhir</span>
                        </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/jurnal') }}">
                          <span class="sidebar-mini">J</span>
                          <span class="sidebar-normal">Jurnal</span>
                      </a>
                    </li>
                  </ul>
              </div>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" href="{{ url('/nilai-kp') }}">
                <i class="fa fa-sticky-note-o bg-pink bwhite"></i>
                <span class="sidebar-normal">Nilai Laporan KP</span>
              </a>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#nilai">
                  <i class="fa fa-sticky-note-o bg-pink bwhite"></i>
                  <p> Nilai Laporan
                      <b class="caret"></b>
                  </p>
              </a>
              <div class="collapse bb" id="nilai">
                  <ul class="nav">
                      <li class="nav-item">
                          <a class="nav-link" href="{{ url('/nilai-kp') }}">
                              <span class="sidebar-mini">KP</span>
                              <span class="sidebar-normal">Kerja Praktek</span>
                          </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ url('/nilai-ta') }}">
                            <span class="sidebar-mini">TA</span>
                            <span class="sidebar-normal">Tugas Akhir</span>
                        </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/nilai-Jurnal') }}">
                          <span class="sidebar-mini">J</span>
                          <span class="sidebar-normal">Jurnal</span>
                      </a>
                    </li>
                  </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/rekap-peserta') }}">
                <i class="fa fa-cog bg-grey bwhite"></i>
                <span class="sidebar-normal">Rekap Peserta</span>
              </a>
            </li>
        </ul>
      </div>
  

