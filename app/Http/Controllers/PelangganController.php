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

<<<<<<< HEAD

        DB::table('profil')->insert([
=======
        DB::table('profil')-> insert([
>>>>>>> c3d908ba837d33ee57445b337032e4791056ce2f
            'nama_lengkap' => $request->nama,
            'no_hp' => $request->nohp,
            'alamat' => $request->alamat,
        ]);

        Alert::success('Success', 'Data Berhasil');


        return redirect('/pelanggan');}

        public function show($id){
            $profile = DB::table('profil')->find($id);
            return view('pelanggan.detailpelanggan', compact('profile'));
        }
}
