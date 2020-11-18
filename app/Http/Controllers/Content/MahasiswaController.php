<?php

namespace App\Http\Controllers\Content;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Alert;
use App\Models\mahasiswa;
use DB;
use App\Imports\MahasiswaImport;
use Maatwebsite\Excel\Facades\Excel;


class MahasiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $mahasiswas = mahasiswa::paginate(10);
        return view('content.mahasiswa.index', compact('mahasiswas'));
    }
    public function tambah()
    {
        return view('content.mahasiswa.tambah');
    }
    public function tambahMahasiswa(Request $request)
    {
        $mahasiswa = new mahasiswa();
        $mahasiswa->slug = $request['npm'];
        $mahasiswa->npm = $request['npm'];
        $mahasiswa->nama = $request['nama'];
        $mahasiswa->handphone = $request['handphone'];
        $mahasiswa->email = $request['email'];
        $mahasiswa->kd_prodi = "06";
        $mahasiswa->kelas_reguler = $request['kelas_reguler'];
        $mahasiswa->angkatan = $request['angkatan'];
        $mahasiswa->kota_asal = $request['kota_asal'];
        $mahasiswa->alamat = $request['alamat'];
        $mahasiswa->save();
        return redirect('/mahasiswa')->with('toast_success', 'Data Berhasil Ditambah');
    }
    public function detail($slug)
    {
        $mahasiswas = mahasiswa::whereSlug($slug)->firstOrFail();
        return view('content.mahasiswa.detail', compact('mahasiswas'));
    }
    public function edit($slug)
    {
        $mahasiswas = mahasiswa::whereSlug($slug)->firstOrFail();
        return view('content.mahasiswa.edit', compact('mahasiswas'));
    }
    public function update(Request $request, $slug)
    {
        $mahasiswas = mahasiswa::whereSlug(($slug),$request->slug)->update([
            'nama' => $request->nama,
            'handphone' => $request->handphone,
            'email' => $request->email,
            'kelas_reguler' => $request->kelas_reguler,
            'angkatan' => $request->angkatan,
            'kota_asal' => $request->kota_asal,
            'alamat' => $request->alamat
        ]);
        return redirect('/mahasiswa')->with('toast_success', 'Data Berhasil Diupdate');
    }
    public function hapus($id)
    {
        $mahasiswas = mahasiswa::where('id', $id)->delete();
        return redirect()->back()->with('toast_success', 'Data Berhasil Dihapus');
    }
    public function import(Request $request)
    {
        $this->validate($request, [
            'file_import' => 'required|mimes:xls,xlsx'
        ]);

        if ($request->hasFile('file_import')) {
            $file = $request->file('file_import');
            Excel::import(new MahasiswaImport, $file);
            return redirect()->back()->with(['success' => 'Upload success']);
        }  
        return redirect()->back()->with(['error' => 'Please choose file before']);
    }
}
