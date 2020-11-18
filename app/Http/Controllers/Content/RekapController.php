<?php

namespace App\Http\Controllers\Content;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\nilai_kp;
use DB;
use PDF;

class RekapController extends Controller
{
    public function index()
    {
        $nilais = nilai_kp::paginate(10);
        return view('content.rekap.index', compact('nilais'));
    }
    public function filter(Request $request)
    {
        $bulan = $request->bulan;
        $tahun = $request->tahun;
        $nilais = DB::table('nilai_kps')
                            ->join('kerja_prakteks', 'kerja_prakteks.slug', '=', 'nilai_kps.slug')
                            ->join('mahasiswas', 'mahasiswas.npm', '=', 'kerja_prakteks.npm')
                            ->join('dosens', 'dosens.nrk', '=', 'kerja_prakteks.nrk')
                            ->whereRaw('MONTH(kerja_prakteks.awal_bimbingan) = ?', [$bulan])
                            ->whereRaw('YEAR(kerja_prakteks.awal_bimbingan) = ?', [$tahun])
                            ->get();
        if($bulan == '01'){$a = "januari";}elseif($bulan == '02'){$a = "februari";}elseif($bulan == '03'){$a = "maret";}elseif($bulan == '04'){$a = "april";}elseif($bulan == '05'){$a = "mei";}elseif($bulan == '06'){$a = "juni";}
        elseif($bulan == '07'){$a = "juli";}elseif($bulan == '08'){$a = "agustus";}elseif($bulan == '09'){$a = "september";}elseif($bulan == '10'){$a = "oktober";}elseif($bulan == '11'){$a = "november";}elseif($bulan == '12'){$a = "desember";}
        $pdf = PDF::loadView('content.rekap.print', compact('nilais', 'bulan', 'tahun', 'a'))->setPaper('a4', 'potrait');
        return $pdf->download();
    }
}
