<?php

namespace App\Http\Controllers;

use App\Models\band;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;


class bandController extends Controller
{
    public function buat()
    {
        return view("band.form-input");
    }

    public function simpan(Request $request)
    {
        $band = new band();
        $band->nama_band = $request->get('nama_band');
        $band->genre = $request->get('genre');
        $band->tanggal_rilis = $request->get('tanggal_rilis');
        
        $band->user_id = auth()->user()->id; //memanggil tabel user

        $band->save();
        
        return redirect(route("tampil_band", ['id' => $band->id]));
    }

    // untuk menampilkan band
    public function tampil($id)
    {
        $band = band::find($id);

        return view("band.tampil")->with("band", $band);
    }

    public function semua()
    {
        $data = band::all();
        return view("band.semua")->with("data", $data);
        
    }

//ubah band
    
    public function ubah($id)
    {
        return view("band.form-edit")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $band = band:: find($id);
        $band->nama_band = $request->get('nama_band');
        $band->genre = $request->get('genre');
        $band->tanggal_rilis = $request->get('tanggal_rilis');
       
        $band->user_id = auth()->user()->id;

        $band->save();
        
        return redirect(route("tampil_band", ['id' => $band->id]));
    }

//hapus band
    public function hapus($id)
    {
        band::destroy($id);
        return redirect(route('semua_band'));
    }







}



