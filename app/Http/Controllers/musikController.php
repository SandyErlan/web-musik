<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//konekkan ke models musik
use App\Models\musik;
use App\Models\band;//manggil band




    class musikController extends Controller
{
    public function buat()
    {
        // menghubungkan ke band
        $bands = band::all();
        return view("musik.form-input")->with('bands', $bands);
    }

    public function simpan(Request $request)
    {
      
        $musik = new musik();
        $musik->judul = $request->get('judul');
        $musik->link_lagu = $request->get('link_lagu');
        $musik->tanggal_upload = $request->get('tanggal_upload');
        $musik->band_id = $request->get('band_id'); //untuk link ke band
        $musik->save();
        return view("musik.tampil")->with("musik", $musik);

    }

    // untuk menampilkan musik
    public function tampil($id)
    {
        $musik = musik::find($id);

        return view("musik.tampil")->with("musik", $musik);
    }

    public function semua()
    {
        $data = musik::all();
        return view("musik.semua")->with("data", $data);
        
    }

//ubah musik
    
    public function ubah($id)
    {
       // menghubungkan ke band
       $bands = band::all();
        
       return view("musik.form-edit")->with('bands', $bands)->with('id', $id);
    }

    public function update(Request $request, $id)  
    {
        
        $musik = musik:: find($id);
        $musik->judul = $request->get('judul');
        $musik->link_lagu = $request->get('link_lagu');
        $musik->tanggal_upload = $request->get('tanggal_upload');
        $musik->band_id = $request->get('id_band'); //untuk link ke band
        $musik->save();
        return view("musik.tampil")->with("musik", $musik);
    }

//hapus musik
    public function hapus($id)
    {
        musik::destroy($id);
        return redirect(route('semua_musik'));
    }



}
