<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function tampil()
    {
        $siswa = Siswa::all(); //membuat variabel siswa yang mengambil model Siswa dengan method all

        return view('siswa', compact('siswa')); //tampilkan views dengan nama file siswa kemudian mengirim variabel siswa (yang ada di compact) ke views
    }

    public function store(Request $request)
    {
        Siswa::create([
            'nama' => $request->nama,
            'id_kelas' => $request->id_kelas,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
        ]);
        return redirect('siswa')->with('success', 'Data Berhasil Dibuat.');
    }
    public function edit(Request $request)
    {
        Siswa::where('id', $request->id)->update([
            'nama' => $request->nama,
            'id_kelas' => $request->id_kelas,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
        ]);
        return redirect('siswa')->with('success', 'Data Berhasil Dibuat.');
    }
}
