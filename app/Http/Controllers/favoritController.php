<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//konekkan ke models favorit
use App\Models\favorit;
use App\Models\musik;//manggil musik


    class favoritController extends Controller
{
    public function buat()
    {
        // menghubungkan ke musik
        $musiks = musik::all();
        return view("favorit.form-input")->with('musiks', $musiks);
    }

    public function simpan(Request $request)
    {
        $favorit = new favorit();
        $favorit->judul_lagu = $request->get('judul_lagu');
        $favorit->musik_id = $request->get('id_musik'); //untuk link ke musik
        $favorit->save();
        return view("favorit.tampil")->with("favorit", $favorit);

    }

    // untuk menampilkan favorit
    public function tampil($id)
    {
        $favorit = favorit::find($id);

        return view("favorit.tampil")->with("favorit", $favorit);
    }

    public function semua()
    {
        $data = favorit::all();
        return view("favorit.semua")->with("data", $data);
        
    }

//ubah favorit
    
    public function ubah($id)
    {
        // menghubungkan ke musik
        $musiks = musik::all();
        return view("favorit.form-edit")->with('musiks', $musiks)->with('id', $id);
    }

    public function update(Request $request, $id)
    {
        $favorit = favorit:: find($id);
        $favorit->judul_lagu = $request->get('judul_lagu');
        $favorit->musik_id = $request->get('id_musik'); //untuk link ke musik
        $favorit->save();
        return view("favorit.tampil")->with("favorit", $favorit);
    }

//hapus favorit
    public function hapus($id)
    {
        favorit::destroy($id);
        return redirect(route('semua_favorit'));
    }



}
