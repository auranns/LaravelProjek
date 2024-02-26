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

        $title = 'Warning !';
        $text = "Apakah anda yakin ingin menghapus ?";
        $icon = "Question";
        confirmDelete($title, $text);

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
    public function edit($id) {
        $peserta = DB::table('peserta')->find($id);
        return view('peserta.editpeserta', compact('peserta'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'paket' => 'required|',
            'nama' => 'required|',
            'umur' => 'required|',
            'alamat' => 'required|',
            'sekolah' => 'required|',
            'jeniskelamin' => 'required|',
        ]);
        $request = DB::table('peserta')
            ->where('id', $id)
            ->update([ //kolom yang mau diambil
                'paket_id' => $request->paket,
                'nama' => $request->nama,
                'umur' => $request->umur,
                'alamat' => $request->alamat,
                'sekolah' => $request->sekolah,
                'jenis_kelamin' => $request->jeniskelamin,
            ]);
    Alert::success('Success', 'Data Berhasil di Update');
    return redirect('/peserta');
    }
    public function destroy($id) {
        $peserta = DB::table('peserta')->where('id', $id)->delete();
        Alert::success('Success', 'Data Berhasil di Update');
        return redirect('/peserta');
    }
}
