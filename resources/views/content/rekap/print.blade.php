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
        padding: 0;
        margin: 0;
        position: relative;
        display: block;
    }
    /* .table{
        border: 1px solid #333;
    } */
    .header{
        border: 2px solid #333;
        padding: 0 20px;
    }
    .header h2{
        text-align: center;
        text-transform: uppercase;
        margin: 0 auto;
        padding: 0;
        font-size: 16px;
    }
    table{
        text-align: center;
        font-size: 14px;
        table: 1px solid #333;
        border-collapse: collapse;
        width: 100%;
    }
    table th{
        border: 1px solid #333;
        padding: 5px 10px;
        text-transform: uppercase;
    }
    table td{
        border: 1px solid #333;
        padding: 10px;
        font-size: 12px !important;
    }
    .w4{
        padding: 10px 0 !important;
        color: #333;
        font-weight: 700;
    }
  </style>
</head>

<body>
    <div class="content">
        <div class="row">
          <div class="table">
              <div class="header">
                <h2>Daftar peserta bimbingan kerja praktek</h2><br>
                <h2>program studi informatika S-1</h2><br>
                <h2>{{ $a }} {{ $tahun }}</h2><br>
              </div>
              <table class="border text-center">
                <thead>
                    <tr>
                        <th class="w1">No</th>
                        <th>NPM</th>
                        <th>nama peserta</th>
                        <th>Dosen Pembimbing</th>
                        <th>Nilai</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <?php $no=0; ?>
                @foreach ($nilais as $nilai)
                <?php $no++; ?>
                    <tbody>
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $nilai->npm }}</td>
                            <td>{{ $nilai->nama }}</td>
                            <td class="w4">{{ $nilai->nama_dosen }}</td>
                            <td class="w4">{{ $nilai->nilai_huruf }}</td>
                            <td class="w4">{{ $nilai->keterangan }}</td>
                        </tr>
                    </tbody>
                @endforeach
              </table>
          </div>
        </div>
    </div>
</body>

</html>
