<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PesertaController extends Controller
{
    public function index()
    {
        $peserta = DB::table('peserta')->get();
        return view('peserta.indexpeserta', compact('peserta'));
    }

    public function tambahpeserta()
    {
        return view('peserta.tambahpeserta');
    }

    public function peserta(Request $request){

        $request->validate([
            'paket' => 'required|',
            'nama' => 'required|',
            'umur' => 'required|',
            'alamat' => 'required|',
            'sekolah' => 'required|',
            'jeniskelamin' => 'required|',
        ]);

        DB::table('peserta')-> insert([
            'paket_id' => $request->paket,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'sekolah' => $request->sekolah,
            'jenis_kelamin' => $request->jeniskelamin,
        ]);

        Alert::success('Success', 'Data berhasil');

        return redirect('/peserta');
    }

    public function show($id){
        $peserta = DB::table('peserta')->find($id);
        return view('peserta.detailpeserta', compact('peserta'));
    }
}
