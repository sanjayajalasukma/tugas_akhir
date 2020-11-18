<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Alert;
use App\User;
use App\Models\mahasiswa;
use App\Models\dosen;
use App\Models\kerja_praktek;
use App\Models\nilai_kp;
use DB;
use Charts;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->data['users'] = User::all();
        $this->data['mahasiswas'] = mahasiswa::all();
        $this->data['dosens'] = dosen::all();
        $this->data['kerja_prakteks'] = kerja_praktek::all();
        //$this->data['tugas_akhirs'] = tugas_akhir::all();
        $a = nilai_kp::where('nilai_huruf', 'A')->count();
        $b = nilai_kp::where('nilai_huruf', 'B')->count();
        $c = nilai_kp::where('nilai_huruf', 'C')->count();
        $d = nilai_kp::where('nilai_huruf', 'D')->count();
        $e = nilai_kp::where('nilai_huruf', 'E')->count();
        $this->data['nilai_huruf'] = Charts::create('bar', 'highcharts')
                                                    ->title('Nilai Kerja Praktek')
                                                    ->elementLabel('Nilai')
                                                    ->colors(['#90AFC5', '#336B87', '#2A3132', '#763636', '#D2691E'])
                                                    ->labels(['A', 'B', 'C', 'D', 'E'])
                                                    ->values([$a, $b, $c, $d, $e])
                                                    ->dimensions(500,500)
                                                    ->responsive(true);
        $l = nilai_kp::where('keterangan', 'LULUS')->count();
        $tl = nilai_kp::where('keterangan', 'TIDAK LULUS')->count();
        $this->data['keterangan'] = Charts::create('bar', 'highcharts')
                                                    ->title('Perbandingan Kelulusan')
                                                    ->elementLabel('Keterangan')
                                                    ->colors(['#90AFC5', '#336B87'])
                                                    ->labels(['LULUS', 'TIDAK LULUS'])
                                                    ->values([$l, $tl])
                                                    ->dimensions(500,500)
                                                    ->responsive(true);                                           
        Alert::success('Selamat Datang', 'Sistem Pendaftaran KP');
        return view('home')->with($this->data);
    }
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $kps = kerja_praktek::where('npm', 'like', "%".$cari."%")
                        ->first();
        return view('content.kp.cari', compact('kps'));
    }
}
