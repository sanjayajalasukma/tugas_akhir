<?php

namespace App\Http\Controllers\Content;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\mahasiswa;
use App\Models\dosen;
use App\Models\kerja_praktek;
use App\Models\nilai_kp;
use DB;

class NilaiController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index()
    {
        $nilais = nilai_kp::orderBy('created_at', 'DESC')->paginate(10);
        return view('content.nilai.index', compact('nilais'));
    }
    public function tambah()
    {
        $mahasiswas = mahasiswa::all();
        $dosens = dosen::all();
        $kerja_prakteks = kerja_praktek::all();
        return view('content.nilai.tambah', compact('mahasiswas', 'dosens', 'kerja_prakteks'));
    }
    public function tambahNilai(Request $request)
    {
        // $a = (60/100 * $request->nilai_tulis);
        // $b = (40/100 * $request->nilai_presentasi);
        // $c = $a + $b;
        $nilai = new nilai_kp();
        $nilai->slug = $request['npm'];
        $nilai->nilai_tulis = $request['nilai_tulis'];
        $nilai->nilai_presentasi = $request['nilai_presentasi'];
        $nilai->nilai_angka = $request['nilai_angka'];
        if($nilai->nilai_angka >= 85 && $nilai->nilai_angka <= 100){
            $nilai->nilai_huruf = "A";
            $nilai->keterangan = "LULUS";
        }
        elseif($nilai->nilai_angka >= 71 && $nilai->nilai_angka <= 84){
            $nilai->nilai_huruf = "B";
            $nilai->keterangan = "LULUS";
        }
        elseif($nilai->nilai_angka >= 60 && $nilai->nilai_angka <= 70){
            $nilai->nilai_huruf = "C";
            $nilai->keterangan = "LULUS";
        }else{
            $nilai->nilai_huruf = "D";
            $nilai->keterangan = "TIDAK LULUS";
        }
        $nilai->save();
        return redirect('/nilai-kp')->with('toast_success', 'Nilai Berhasil Ditambahkan');

    }
    public function detail($slug)
    {
        $nilai = nilai_kp::whereSlug($slug)->firstOrFail();
        return view('content.nilai.detail', compact('nilai'));
    }
    public function getKp(Request $request)
    {
        if($request->get('npm')){
            $query = $request->npm;
            $data = DB::table('kerja_prakteks') 
                            ->join('mahasiswas', 'mahasiswas.npm', '=', 'kerja_prakteks.npm')
                            ->join('dosens', 'dosens.nrk', '=', 'kerja_prakteks.nrk')
                            ->select('dosens.nama_dosen', 'kerja_prakteks.judul_kp', 'kerja_prakteks.tempat_kp', 'kerja_prakteks.pembimbing_lapangan')
                            // ->select('mahasiswas.nama',  'kerja_prakteks.judul_kp', 'kerja_prakteks.tempat_kp', 'kerja_prakteks.pembimbing_lapangan')
                            ->where('kerja_prakteks.npm', 'like', "%".$query."%")
                            ->first();

            return response()->json($data);
        }
 
    }
}
