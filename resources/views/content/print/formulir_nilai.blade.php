<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="{{ asset('fav.ico') }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>
    Formulir Nilai 
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
        font-weight: 0;
    }
    .content{
        padding: 0 !important;
        position: relative;
        display: block;
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
    .logo{
        width: 80px;
        height: 70px;
        padding-bottom: 10px;
    }
    .logo img{
        width: 100%;
        height: 100%;
    }
    .border{
      width: 100%;
      padding: 0 30px;
      text-align: left;
      border-collapse: collapse;
    }
    .bordered{
        width: 100%;
        padding: 0 30px;
        text-align: left;
        border-collapse: collapse;
    }
    .bordered2{
        width: 100%;
        padding: 0 30px;
        padding-right: 10px !important;
        text-align: left;
        border-collapse: collapse;
    }
    .bor{
        border-collapse: collapse;
    }
    .bor td{
        border: 2px solid #333 !important;
        padding: 5px !important;
    }
    .bordered2 td{
        border: 2px solid #333 !important;
        padding-left: 30px;
        padding-top: 2px !important;
        padding-right: 10px;
        padding-bottom: 5px;
    }
    .bordered td{
        border: 2px solid #333 !important;
        padding: 5px 30px;
    }
    .header h3{
        font-style: italic;
        font-size: 18px;
        margin: 0;
        padding: 0;
        letter-spacing: 1.5;
    }
    .header h4{
        font-size: 18px;
        margin: 0;
        font-weight: 0;
        padding: 0;
    }
    .header h1{
        text-transform: uppercase;
        text-align: center;
        font-size: 21px;
        margin-top: 30px;
        margin-bottom: 20px;
    }
    .h-right{
        text-align: center;
        width: 150px;
        padding-bottom: 20px;
    }
    .h-right h5{
        font-size: 18px;
        margin: 0;
        padding: 10px;
        font-weight: 0;
        border: 1px solid #333;
    }
    hr{
        color: #333;
        width: 125%;
        margin: 0;
        padding: 0;
    }
    .w160{
        width: 180px;
    }
    .w80{
        width: 40px;
    }
    .pr{
        padding-right: 10px !important;
        font-size: 14px;
    }
    .bcg{
        background-color:#C0C0C0;
    }
    pre{
        margin: 0px !important;
        color: #333;
        font-weight: 700;
        font-family: 'Times New Roman', Times, serif !important;
    }
    .up{
        text-transform: uppercase;
        font-weight: 0;
    }
    .italic{
        font-style: italic;
    }
    .no-bordered{
      width: 100%;
      padding: 10px 30px;
      border-collapse: collapse;
    }
    .no-bordered td{
      width: 100%;
      border: none;
    }
    .tu{
      text-decoration: underline;
      width: 130%;
    }
    .cat{
        width: 100%;
        padding: 0 30px;
        padding-bottom: 0 !important;
    }
    .cat p{
        font-size: 14px;
        text-align: right;
        margin-top : 0;
        margin-bottom: 5px !important;
        padding-top: 0;
    }
    .f14{
        font-size: 14px;
    }
    .f12{
        font-size: 12px;
    }
    .text-center{
        text-align:center;
    }
    .w10{
        width: 10px !important;
    }
    .w50{
        width: 120px !important;
    }
    .satu{
        float: right;
    }
    .satu td{
        text-align: center;
        background-color:#C0C0C0;
        padding: 2px !important;
    }
    .w3{
        width: 10px !important;
        text-align: center;
    }
    .p10{
        padding-top: 0 !important;
        padding-bottom: 0 !important;
    }
    .text-right{
        text-align: right;
    }
    .ml70{
      padding-left: 100px;
    }
    .pl30{
      padding-left: 70px;
    }
  </style>
</head>
<body>
    <div class="content">
        <div class="row">
            <div class="table">
                <table class="border">
                    <tbody>
                        <tr>
                            <td class="logo">
                                <img src="{{ asset('assets/img/logo.png') }}" alt="">
                            </td>
                            <td class="header">
                                <h3>PRODI INFORMATIKA</h3>
                                <h4>FAKULTAS TEKNIK</h4>
                                <h4 style="letter-spacing: 1.5;">Universitas Widyatama</h4>
                                <hr>
                                <p style="width: 130%; margin: 0;padding: 0;">Jl. CIKUTRA 204 Bandung 40125 Telp./Fax. 062-022-7278860 INDONESIA</p>
                            </td>
                            <td class="h-right bor1">
                                <h5>Form.: KP-03</h5>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="header">
                    <h1>formulir nilai laporan kerja praktek</h1>
                </div>
                <table class="bordered">
                    <tbody>
                        <tr>
                            <td class="bcg w160" colspan="2">Nama Mahasiswa / NPM</td>
                            <td class="pr">{{ $kerja_praktek->mahasiswa->nama }} / {{ $kerja_praktek->npm }}</td>
                        </tr>
                        <tr>
                            <td class="bcg w160" colspan="2">Alamat Mahasiswa</td>
                            <td class="pr">
                                {{ $kerja_praktek->mahasiswa->alamat }}
                                <pre>Telp    : {{ $kerja_praktek->mahasiswa->handphone }}</pre>
                                <pre>e-mail : {{ $kerja_praktek->mahasiswa->email }}</pre>
                            </td>
                        </tr>
                        <tr>
                            <td class="bcg w160" colspan="2">Topik / Judul KP</td>
                            <td class="italic pr">{{ $kerja_praktek->judul_kp }}</td>
                        </tr>
                        <tr>
                            <td class="bcg w160" colspan="2">Tempat KP</td>
                            <td class="up pr">{{ $kerja_praktek->tempat_kp }}</td>
                        </tr>
                        <tr>
                            <td rowspan="2" class="bcg">Pembimbing</td>
                            <td class="bcg w80">Kampus</td>
                            <td class="pr">{{ $kerja_praktek->dosen->nama_dosen }}</td>
                        </tr>
                        <tr>
                            <td class="bcg w80">Lapangan</td>
                            <td class="pr">{{ $kerja_praktek->pembimbing_lapangan }}</td>
                        </tr>
                        <tr>
                            <td class="bcg w160" colspan="2">Batas Waktu Bimbingan</td>
                            <td class="pr"></td>
                        </tr>
                    </tbody>
                </table>
                <table class="no-bordered" style="padding-bottom: 0 !important;">
                    <tr>
                        <td>Bandung, _____________________________</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Ka. Prodi. Teknik Informatika,</td>
                        <td></td>
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
                        <td class="tu">Sriyani Violina, S.T., M.T</td>
                    </tr>
                </table>
                <div class="cat">
                    <p>Diisi oleh pembimbing kampus</p>
                </div>
                <table class="bordered2">
                    <tbody>
                        <tr>
                            <td rowspan="3" class="bcg text-left w160">
                                NILAI KERJA PRAKTEK
                                <br>
                                ( dalam angka )
                            </td>
                            <td class="f14 bcg" style=" width: 200px !important;">A. Bimbingan & Tata Tulis</td>
                            <td style="width: 150px !important;"></td>
                        </tr>
                        <tr>
                            <td class="f14 bcg" style=" width: 200px !important;">B. Presentasi Hasil KP</td>
                            <td style="width: 150px !important;"></td>
                        </tr>
                        <tr>
                            <td class="f14 bcg" style=" width: 200px !important;">60 % Komponen A + 40 % Komponen B</td>
                            <td style="width: 150px !important;"></td>
                        </tr>
                        <tr>
                            <td class="bcg w160">
                                NILAI KERJA PRAKTEK
                                <br>
                                ( dalam huruf )
                               <br>
                                <table class="bor">
                                    <tr>
                                        <td class="w3">T</td>
                                        <td class="f12" style="width: 60px !important;">jika pelakanaan KP belum selesai & batas waktu bimbingan telah terlampaui</td>
                                    </tr>
                                    <tr>
                                        <td class="w3">E</td>
                                        <td class="f12" style="width: 60px !important;">Jika proses bimbingan tdk tejadi selama batas waktu bimbingan</td>
                                    </tr>
                                </table>
                            </td>
                            <td colspan="2">
                                <table class="satu">
                                    <tbody>
                                        <tr>
                                            <td class="w3 f14">NILAI <br>ANGKA</td>
                                            <td class="w3 f14">NILAI <br>HURUF</td>
                                        </tr>
                                        <tr>
                                            <td class="w3 f14">80-100</td>
                                            <td class="w3 f14">A</td>
                                        </tr>
                                        <tr>
                                            <td class="w3 f14">71-84</td>
                                            <td class="w3 f14">B</td>
                                        </tr>
                                        <tr>
                                            <td class="w3 f14">60-70</td>
                                            <td class="w3 f14">C</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="bcg w160">Tgl. Penyerahan Laporan</td>
                            <td colspan="2"></td>
                        </tr>
                    </tbody>
                </table>
                <table class="no-bordered p10 ml70">
                    <tr>
                        <td></td>
                        <td class="">Bandung, _____________________</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="">
                            Menyetujui,
                            <br>
                            Pembimbing Kampus
                        </td>
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
                        <td></td>
                        <td class="tu f14">{{ $kerja_praktek->dosen->nama_dosen }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>