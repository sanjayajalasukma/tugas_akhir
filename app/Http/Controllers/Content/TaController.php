<?php

namespace App\Http\Controllers\Content;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\tugas_akhir;
use App\Models\mahasiswa;
use App\Models\dosen;
use DB;
use Carbon\Carbon;

class TaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $tugas_akhirs = tugas_akhir::orderBy('created_at', 'DESC')->paginate(10);
        return view('content.tugas_akhir.index', compact('tugas_akhirs'));
    }
    public function tambah()
    {
        $mahasiswas = mahasiswa::all();
        $dosens = dosen::all();
        return view('content.tugas_akhir.tambah', compact('mahasiswas', 'dosens'));
    }
    public function getData(Request $request)
    {
        if($request->get('npm')){
            $query = $request->npm;
            $data = DB::table('mahasiswas')
                            ->select('nama', 'handphone', 'alamat', 'email')
                            ->where('npm', 'like', "%".$query."%")
                            ->first();

            return response()->json($data);
        }
 
    }
    public function tambahTa(Request $request)
    {
        $akhir = Carbon::parse($request->awal_bimbingan)->addMonths(6)->format('Y-m-d');
        $tugas_akhir = new tugas_akhir;
        $tugas_akhir->slug = $request['npm'];
        $tugas_akhir->npm = $request['npm'];
        $tugas_akhir->judul_ta = $request['judul_tugas_akhir'];
        $tugas_akhir->tempat_ta = $request['tempat_tugas_akhir'];
        $tugas_akhir->nrk = $request['nrk'];
        $tugas_akhir->pembimbing_lapangan = $request['pembimbing_lapangan'];
        $tugas_akhir->awal_bimbingan = $request['awal_bimbingan'];
        $tugas_akhir->akhir_bimbingan = $akhir;
        $tugas_akhir->dokumen_persyaratan = implode(",", $request['dokumen_persyaratan']);
        $tugas_akhir->save();
        return redirect('/tugas-akhir')->with('toast_success', 'Data TA Berhasil Ditambah');
    }
    public function detail($slug)
    {
        $tugas_akhir = tugas_akhir::whereSlug($slug)->firstOrFail();
        return view('content.ta.detail', compact('tugas_akhir'));
    }
}
