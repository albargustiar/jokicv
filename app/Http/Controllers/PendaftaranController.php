<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input formulir
        $request->validate([
            'nama' => 'required|string',
            'ttl' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'agama' => 'required|string',
            'status' => 'required|string',
            'no_telp' => 'required|string',
            'alamat' => 'required|string',
            'riwayat_pendidikan' => 'required|string',
            'pengalaman_kerja' => 'nullable|string',
            'sertifikasi' => 'nullable|string',
            'pengalaman_organisasi' => 'nullable|string',
            'soft_skill' => 'nullable|string',
            'hard_skill' => 'nullable|string',
        ]);

        // Simpan data ke dalam database
        Pendaftaran::create($request->all());

        return redirect('/CV')->with('success', 'Data berhasil disimpan!');
    }

    public function showForm()
    {
        return view('CV');
    }

    public function admin()
    {
       
        $pendaftarans = Pendaftaran::all();

        // Mengirim data ke view admin.index
        return view('admin.index', ['title' => 'Halaman Admin', 'pendaftarans' => $pendaftarans]);
    }
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $password = $request->input('password');

        if ($password === "babang3131") {
            return redirect()->route('admin');
        } else {
            return redirect()->back()->with('errorMessage', 'Maaf, password salah');
        }
    }

    
}
