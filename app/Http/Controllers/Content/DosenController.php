<?php

namespace App\Http\Controllers\Content;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\dosen;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\MahasiswaImport;

class DosenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $dosens = dosen::paginate(10);
        return view('content.dosen.index', compact('dosens'));
    }
    public function tambah()
    {
        return view('content.dosen.tambah');
    }
    public function tambahDosen(Request $request)
    {
        $no = $request['no'];
        $bln = $request['bln'];
        $thn = $request['tahun'];
        $dosen = new dosen();
        $dosen->slug = $request['nrk'];
        $dosen->nrk = $request['nrk'];
        $dosen->nama_dosen = $request['nama_dosen'];
        $dosen->tgl_lahir = $no.' '.$bln.' '.$thn;
        $dosen->tempat_lahir = $request['tempat_lahir'];
        $dosen->jenis_kelamin = $request['jenis_kelamin'];
        $dosen->status_pernikahan = $request['status_pernikahan'];
        $dosen->nama_sekolah = $request['nama_sekolah'];
        $dosen->tahun_lulus = $request['tahun_lulus'];
        $dosen->nama_jabatan = $request['nama_jabatan'];
        $dosen->nama_organisasi = $request['nama_organisasi'];
        $dosen->nama_pendidikan = $request['nama_pendidikan'];
        $dosen->nama_kantor = $request['nama_kantor'];
        $dosen->email = $request['email'];
        $dosen->save();
        return redirect('/dosen')->with('toast_success', 'Data Berhasil Ditambah');
    }
    public function detail($slug)
    {
        $dosens = dosen::whereSlug($slug)->firstOrFail();
        return view('content.dosen.detail', compact('dosens'));
    }
    public function edit($slug)
    {
        $dosens = dosen::whereSlug($slug)->firstOrFail();
        return view('content.dosen.edit', compact('dosens'));
    }
    public function update(Request $request, $slug)
    {
        $dosens = dosen::whereSlug(($slug),$request->slug)->update([
            'nama_dosen' => $request->nama_dosen,
            'jenis_kelamin' => $request->jenis_kelamin,
            'status_pernikahan' => $request->status_pernikahan,
            'nama_sekolah' => $request->nama_sekolah,
            'tahun_lulus' => $request->tahun_lulus,
            'nama_jabatan' => $request->nama_jabatan,
            'nama_organisasi' => $request->nama_organisasi,
            'nama_pendidikan' => $request->nama_pendidikan,
            'nama_kantor' => $request->nama_kantor,
            'email' => $request->email
        ]);
        return redirect('/dosen')->with('toast_success', 'Data Berhasil Diupdate');
    }
    public function hapus($id)
    {
        $dosens = dosen::where('id', $id)->delete();
        return redirect()->back()->with('toast_success', 'Data Berhasil Dihapus');
    }
}
