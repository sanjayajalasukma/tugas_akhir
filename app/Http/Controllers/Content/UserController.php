<?php

namespace App\Http\Controllers\Content;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Alert;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $users = User::paginate(10);
        return view('content.user.index', compact('users'));
    }
    public function tambah()
    {
        return view('content.user.tambah');
    }
    public function tambahUser(Request $request)
    {
        $user = new User;
        $user->nrk = $request['nrk'];
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->handphone = $request['handphone'];
        $user->save();
        return redirect('/user')->with('toast_success', 'Data Berhasil Ditambahkan');
    }
    public function detail($id)
    {
        $users = User::find($id);
        return view('content.user.detail', compact('users'));
    }
    public function edit($id)
    {
        $users = User::find($id);
        return view('content.user.edit', compact('users'));
    }
    public function update(Request $request, $id)
    {
        $users = User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'handphone' => $request->handphone
        ]);
        return redirect('/user')->with('toast_success', 'Data Berhasil Diupdate');
    }
    public function hapus($id)
    {
        $user = User::where('id', $id)->delete();
        return redirect()->back()->with('toast_success', 'Data Berhasil Dihapus');
    }
}
