<?php

namespace App\Http\Controllers\Content;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\kerja_praktek;
use App\Models\mahasiswa;
use App\Models\dosen;
use DB;
use Carbon\Carbon;

class KpController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $kerja_prakteks = kerja_praktek::orderBy('created_at', 'DESC')->paginate(10);
        return view('content.kp.index', compact('kerja_prakteks'));
    }
    public function tambah()
    {
        $mahasiswas = mahasiswa::all();
        $dosens = dosen::all();
        return view('content.kp.tambah', compact('mahasiswas', 'dosens'));
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
    public function tambahKp(Request $request)
    {
        $akhir = Carbon::parse($request->awal_bimbingan)->addMonths(6)->format('Y-m-d');
        $kerja_praktek = new kerja_praktek;
        $kerja_praktek->slug = $request['npm'];
        $kerja_praktek->npm = $request['npm'];
        $kerja_praktek->judul_kp = $request['judul_kp'];
        $kerja_praktek->tempat_kp = $request['tempat_kp'];
        $kerja_praktek->nrk = $request['nrk'];
        $kerja_praktek->pembimbing_lapangan = $request['pembimbing_lapangan'];
        $kerja_praktek->awal_bimbingan = $request['awal_bimbingan'];
        $kerja_praktek->akhir_bimbingan = $akhir;
        $kerja_praktek->dokumen_persyaratan = implode(",", $request['dokumen_persyaratan']);
        $kerja_praktek->save();
        return redirect('/kerja-praktek')->with('toast_success', 'Data KP Berhasil Ditambah');
    }
    public function detail($slug)
    {
        $kerja_praktek = kerja_praktek::whereSlug($slug)->firstOrFail();
        return view('content.kp.detail', compact('kerja_praktek'));
    }
}
