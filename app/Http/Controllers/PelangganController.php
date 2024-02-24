<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class PelangganController extends Controller
{
    public function index()
    {
        $profil = DB::table('profil')->get();
        
        return view('pelanggan.indexpelanggan', compact('profil'));
    }

    public function tambahpelanggan()
    {
        return view('pelanggan.tambahpelanggan');
    }

    public function pelanggan(Request $request){

        $request->validate([
            'nama' => 'required|',
            'nohp' => 'required|',
            'alamat' => 'required|',
        ]);

        DB::table('profil')-> insert([
            'nama_lengkap' => $request->nama,
            'no_hp' => $request->nohp,
            'alamat' => $request->alamat,
        ]);

        Alert::success('Success', 'Data Berhasil');
       return redirect('/pelanggan');}
}
