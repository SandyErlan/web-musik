<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//konekkan ke models kategori
use App\Models\Kategori;

use App\Models\musik;




class KategoriController extends Controller
{
    // untuk input 
    public function buat()
    {
        $musiks = musik::all();

        return view("kategori.form-input")->with('musiks', $musiks);
    }

    public function simpan(Request $request)
    {
        $kategori = new Kategori();
        $kategori->nama = $request->get("nama");
        $kategori->keterangan = $request->get('id_musik');
        $kategori->save();

        return redirect(route("tampil_kategori", ['id' => $kategori->id]));
    }

// untuk menampilkan
    public function tampil($id)
    {
        $kategori = Kategori::find($id);

        return view("kategori.tampil")->with("kategori", $kategori);
    }

    public function semua()
    {
        $data = Kategori::all();
        return view("kategori.semua")->with("data", $data);
        
    }

//ubah kategori
    
    public function ubah($id)
    {
        $musiks = musik::all();

        return view("kategori.form-edit")->with('musiks', $musiks)->with('id' , $id);
    }

    public function update(Request $request, $id)
    {
        $kategori = Kategori::find($id);
        $kategori->nama = $request->get("nama");
        $kategori->keterangan = $request->get('id_musik');
        $kategori->save();

        return redirect(route("tampil_kategori", ['id' => $kategori->id]));
    }

//hapus kategori
    public function hapus($id)
    {
        Kategori::destroy($id);
        return redirect(route('semua_kategori'));
    }


}
