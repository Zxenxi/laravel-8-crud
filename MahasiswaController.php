<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $belajar = DB::table('belajar')->get();

        return view('index', ['belajar' => $belajar]);
    }
    public function tambah_data()
    {
        return view('tambah');
    }
    public  function inputdb(Request $request)
    {
        DB::table('belajar')->insert([
            'nim_mahasiswa' => $request->nim,
            'nama_mahasiswa' => $request->nama,
            'semester_mahasiswa' => $request->semester,
            'alamat_mahasiswa' => $request->alamat
        ]);
        return redirect('mahasiswa');
    }
    public function edit($id)
    {
        // mengambil data mahasiswa berdasarkan id yang dipilih
        $belajar = DB::table('belajar')->where('id_mahasiswa', $id)->get();
        return view('edit', ['belajar' => $belajar]);
    }
    public function update(Request $request)
    {
        DB::table('belajar')->where('id_mahasiswa', $request->id)->update([
            'nim_mahasiswa' => $request->nim,
            'nama_mahasiswa' => $request->nama,
            'semester_mahasiswa' => $request->semester,
            'alamat_mahasiswa' => $request->alamat
        ]);
        return redirect('mahasiswa');
    }
    public function hapus($id)
    {
        DB::table('belajar')->where('id_mahasiswa', $id)->delete();
        return redirect('mahasiswa');
    }
}