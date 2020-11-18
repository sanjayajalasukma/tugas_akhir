<!DOCTYPE html>
<html lang="en" class="perfect-scrollbar-on">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="{{ asset('fav.ico') }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>
    Kartu Bimbingan
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <style>
    body{
        margin: 0;
        padding: 0;
        position: relative;
        left: 0;
        right: 0;
        top: 0;
        font-family: 'Times New Roman', Times, serif !important;
    }
    .content{
        /* margin: 10px 0; */
        padding: 0;
        position: relative;
        display: block;
    }

    .border{
      width: 100%;
      padding: 0 30px;
      text-align: left;
      border-collapse: collapse;
    }
    .border2{
      width: 100%;
      padding: 0 80px;
      text-align: center;
      border-collapse: collapse;
      margin: 50px 0;
    }
    .border td{
      border: 2px solid #333 !important;
      /* padding: 12px 8px; */
      padding: 0.50rem 30px;
    }
    .border2 td{
      border: 2px solid #333 !important;
      /* padding: 12px 8px; */
      padding: 0.50rem 0.75rem;
      letter-spacing: 0;
      width: 100%;
    }
     pre{
      margin: 0px !important;
      color: #333;
      font-weight: 700;
      font-family: 'Times New Roman', Times, serif !important;
    }
    .border span{
      font-weight: 300 !important;
    }
    .logo{
      width: 80px;
      height: 70px;
      margin-left: auto;
      margin-right: auto;
      text-align: center;
      margin-bottom: 10px;
    }
    .logo img{
      width: 100%;
      height: 100%;
      border-radius: 50%;
    }
    .header h5{
      text-align: center;
      font-size: 18px;
      font-weight: 0;
      margin-top: 0;
      margin-bottom: 0;
    }
    .header h2{
      text-transform: uppercase;
      font-weight: 700;
      text-align: center;
      font-size: 18px;
      margin-bottom: 30px;
    }
    .headers h2{
      text-align: center;
      font-size: 18px;
      margin-bottom: 10px;
    }
    .header h4{
      text-align: center;
      font-size: 19px;
      letter-spacing: 1px;
      font-weight: 0;
      margin-top: 0;
      margin-bottom: 0;
    }
    .header h3{
      text-transform: uppercase;
      text-align: center;
      font-size: 21px;
      margin-top: 55px;
      margin-bottom: 35px;
    }
    .row{
        display:-ms-flexbox;
        display:flex;
        -ms-flex-wrap:wrap;
        flex-wrap:wrap;
        margin-right:-15px;
        margin-left:-15px
    }
    .table{
        position:relative;
        width:100%;
        padding-right:15px;
        padding-left:15px
    }
    .table{
        -ms-flex:0 0 100%;
        flex:0 0 100%;
        max-width:100%
    }
    .italic{
      font-style: italic;
    }
    .w40{
      width: 160px;
    }
    .up{
      text-transform: uppercase;
      font-weight: 700;
    }
    .foot{
      padding: 10px !important;
      font-style: italic;
      font-size: 15px;
      text-align: left !important;  
    }
    .foot2{
      padding: 10px !important;
      font-size: 15px;
      text-align: left !important;
    }
    .ptb0 td{
      padding: 0 0.75rem !important;
    }
    .text-center{
      text-align: center !important;
    }
    .text-left{
      text-align: left !important;
    }
    .text-right{
      position: relative;
      float: right;
    }
    .text-right p{
      border-bottom: 2px solid #333;
      width: 100px;
    }
    .col-md-6{
      position:relative;
      width:100%;
      min-height:1px;
      padding-right:15px;
      padding-left:15px;
    }
    .col-md-6{
      flex:0 0 50%;
      max-width:50%
    }
    .bb{
      border-bottom: 2px solid #333;
    }
    .tu{
      text-decoration: underline;
    }
    .bold{
      font-weight: 700;
    }
    .p10{
      padding: 0 10px;
    }
    .w1{
      width: 10px !important;
    }
    .w4{
      width: 40px;
    }
    .w3{
      width: 30px;
    }
    .mp0{
      margin: 0 !important;
      padding: 0 !important;
    }
    .no-bordered{
      width: 100%;
      padding: 0 30px;
      /* text-align: left; */
      border-collapse: collapse;
    }
    .no-bordered td{
      width: 100%;
      /* padding: 0.50rem 30px; */
      border: none;
    }
    .w50{
      width: 50px;
    }
    .ml70{
      padding-left: 100px;
    }
    .pl30{
      padding-left: 70px;
    }
    .p03{
      padding: 0 30px;
    }
    .foot2 p{
      margin: 0;
    }
  </style>
</head>

<body>
    <div class="content">
        <div class="row">
          <div class="table">
            <div class="header">
              <div class="logo">
                <img src="{{ asset('assets/img/logo.png') }}" alt="">
              </div>
              <h5>UNIVERSITAS WIDYATAMA</h5>
              <h4>Program Studi Informatika S1</h4>
              <h3>kartu bimbingan kerja praktek</h3>
            </div>
            <table class="border">
              <tbody>
                <tr>
                  <td class="w40">Nama Mahasiswa</td>
                  <td>{{ $kerja_praktek->mahasiswa->nama }}</td>
                </tr>
                <tr>
                  <td class="w40">NPM</td>
                  <td>{{ $kerja_praktek->npm }}</td>
                </tr>
                <tr>
                  <td class="w40">Alamat Mahasiswa</td>
                  <td>
                    {{ $kerja_praktek->mahasiswa->alamat }}
                    <pre>Telp    : {{ $kerja_praktek->mahasiswa->handphone }}</pre>
                    <pre>e-mail : {{ $kerja_praktek->mahasiswa->email }}</pre>
                  </td>
                </tr>
                <tr>
                  <td class="w40">Topik / Judul KP</td>
                  <td class="italic">{{ $kerja_praktek->judul_kp }}</td>
                </tr>
                <tr>
                  <td class="w40">Pembimbing Kampus / NID</td>
                  <td>{{ $kerja_praktek->dosen->nama_dosen }}</td>
                </tr>
              </tbody>
            </table>
            <table class="border2">
              <tbody>
                <tr>
                  <td>BATAS WAKTU BIMBINGAN</td>
                  <td>PENGESAHAN PROGRAM STUDI</td>
                </tr>
                <tr>
                  <td>{{ \Carbon\Carbon::parse($kerja_praktek->awal_bimbingan)->format('d M Y') }} s/d {{ \Carbon\Carbon::parse($kerja_praktek->akhir_bimbingan)->format('d M Y') }}</td>
                  <td></td>
                </tr>
              </tbody>
            </table>
            <table class="border2">
              <tbody>
                <tr>
                  <td colspan="2" class="up">melanjutkan bimbingan</td>
                </tr>
                <tr class="ptb0">
                  <td>REKOMENDASI DOSEN PEMBIMBING KAMPUS</td>
                  <td>PERSETUJUAN <br> PEMBIMBING KAMPUS</td>
                </tr>
                <tr>
                  <td>
                    <br>
                    <br>
                    <br>
                    <br>
                  </td>
                  <td>
                    <br>
                    <br>
                    <br>
                    <br>
                  </td>
                </tr>
                <tr>
                  <td colspan="2" class="foot">
                    Untuk melanjutkan bimbingan yang telah melewati batas waktu bimbingan, mahasiswa harus mengembalikan kartu ini ke jurusan sambil membawa foto kopi FRS ( yg mencantumkan kembali KP ) beserta bukti pembayaran registrasi dan KP. Kemudian kartu ini akan diganti dengan kartu bimbingan KP yang baru
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
    </div>
    <div class="content mp0">
        <div class="row">
          <div class="table">
              <div class="header">
                <h2>CATATAN BIMBINGAN KERJA PRAKTEK</h2>
              </div>
              <table class="border text-center">
                  <tbody>
                    <tr class="up">
                      <td class="w1">no.</td>
                      <td class="w3">tgl</td>
                      <td>pokok bahasan</td>
                      <td class="w4">paraf pembimbing khusus</td>
                    </tr>
                    <tr>
                      <td>02.</td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>03.</td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>04.</td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>05.</td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>06.</td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>07.</td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>08.</td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>09.</td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>10.</td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>11.</td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>12.</td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>13.</td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>14.</td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>15.</td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </tbody>
              </table>
          </div>
        </div>
    </div>
    <div class="content mp0">
      <div class="row">
        <div class="table">
            <div class="headers">
              <h2>PERSETUJUAN PENYELESAIAN BIMBINGAN KP</h2>
            </div>
            <table class="no-bordered">
                <tr>
                  <td></td>
                  <td class="text-right pl30">
                      Bandung, ______________________
                  </td>
                </tr>
                <tr>
                  <td>
                    Menyetujui:
                  </td>
                  <td></td>
                </tr>
                <tr>
                  <td>Sek. Prodi Informatika,</td>
                  <td class="ml70 text-center">Dosen Pembimbing Kampus</td>
                </tr>
                <tr>
                  <td><br></td>
                  <td><br></td>
                </tr>
                <tr>
                  <td><br></td>
                  <td><br></td>
                </tr>
                <tr>
                  <td><br></td>
                  <td><br></td>
                </tr>
                <tr>
                  <td>
                   ___________________________
                  </td>
                  <td class="ml70 text-center">
                   ___________________________
                  </td>
                </tr>
            </table>
            <div class="row p03">
                <div class="foot2">
                  <p class="tu">Catatan :</p>
                  <p>Formulir ini diserahkan kembali ke jurusan setelah pelaksanaan KP <span class="bold">dinyatakan selesai</span> oleh pembimbing disertai dengan: </p>
                  <div class="p10">
                      <p>- 2 buah laporan KP yang telah ditanda tangan oleh pembimbing kampus dan pembimbing lapangan</p>
                      <p>- Quesioner yang telah diisi oleh instansi tempat KP.</p>
                      <p>- CD berisi program dan laporan KP dgn label yang berisi : npm, nama, judul KP dan nama pembimbing kampus ( ditandatangan )</p>
                  </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</body>

</html>
