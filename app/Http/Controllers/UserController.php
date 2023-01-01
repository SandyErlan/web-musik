<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// mengambil atau import dlu database
use App\Models\User;
use App\Http\Requests\UserRequest; //Untuk konek ke request

class UserController extends Controller
{     // codingan mengambil dan menampilkan data dari database
        public function tampil() {
            $data_user = User::all();
            return view("user.tampil-user")
            ->with("data_user", $data_user);
        }
        
        public function formInput()
         {
            return view("user.form");   
        }


        //simpan data baru
        public function simpan(UserRequest $request)
        {
            $user = new User();
            $user->nama = $request->get( key:"nama");
            $user->username = $request->get( key:"username");
            $user->password = $request->get( key:"password");
            $user->level = $request->get( key:"level");
            $user->save();

            return "Telah Terdaftar <a href= '".route('login')."'>login</a>"; //nambah link 
    
        }

    // ngarahkan ke views - update form
        public function formEdit($id)
        {
           return view(view:"user.form-update")->with("id", $id);   
       }

        // proses mengubah data
        public function update(UserRequest $request, $id)
        {
            $user = user:: find($id);
            $user->nama = $request->get( key:"nama");
            $user->username = $request->get( key:"username");
            $user->password = $request->get( key:"password");
            $user->level = $request->get( key:"level");
            $user->save();

            return "Data Telah disimpan <a href= '".route('tampil-user')."'>Tampilkan</a>"; //nambah link 
        }


        // Menghapus data
    public function hapus($id)
    {
        User::destroy($id);
        return redirect(route("tampil-user"));
    }
// menampilkan 1 user
    public function show($id) {
        $data_user = User::find($id);
        return view("user.show")->with("data_user", $data_user);
    }
    
}
