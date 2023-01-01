<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AboutControllers;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\bandController;
use App\Http\Controllers\musikController;
use App\Http\Controllers\favoritController;
use App\Http\Controllers\saranController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alih', function () {
    echo 'Sudah Teralih';
});

#tulis manual
Route::get("/helloo/{nama}/{gender}", function ($nama, $gender) {
    echo "Hello ".$nama. " Seorang ". $gender;
})->name("hello");

#tulis ke view + gender + Controller
Route::get("/hellooo/{nama}/{gender}/{nim}", [TestController::class, "helooo"] )->name("hellooo");

#tulis ke view menggunakan
Route::get("/hello/{nama}", function ($nama) {
    echo view("helloo")
    ->with("nama", $nama)
    ->with("nim", "2011102441187")
    ->with("waktu", date("H:m:s"));
})->name("hello");

//untuk link card ke view
Route::get('/cards', function () {
    return view('cards');
});


Route::get('/about.html', [AboutControllers::class, "about"] )->name("about");

Route::get('/about1.html', [AboutControllers::class, "about1"] )->name("about1");

Route::get('/about2.html', [AboutControllers::class, "about2"]  )->name("about2");

Route::get('/about_lagi.html', [AboutControllers::class, "about_lagi"] )->name("about_lagi");

Route::get('/about_lengkap.html', [AboutControllers::class, "about_lengkap"] )->name("about_lengkap");

Route::get('/about_habis.html', [AboutControllers::class, "about_habis"] )->name("about_habis");

Route::get('/logiN.html', [AboutControllers::class, "logiN"] )->name("logiN");

//tambah user
Route::get("/form-user", [UserController::class, "forminput"] )->name("form-input");
Route::post("/simpan-user", [UserController::class, "simpan"] )->name("form-simpan");


//hapus data
route::delete("/hapus-user/{id}", [UserController::class, "hapus"]) -> name("user_hapus");



//bagian login 
Route::get("/login", [SecurityController::class, "formLogin"])->name("login"); 
Route::post("/proses-login", [SecurityController::class, "prosesLogin"])->name("proses_login");

//proses logout
Route::get("/logout", [SecurityController::class, "logout"])->name ("logout");




                                //untuk menyembunyikan file ketika sudah logout
                                Route::middleware("auth")->group(function() { 
                                    // route atau halaman yang diproteksi
    


// menampilkan file database yg berhubungan dengan controller 
Route::get("/tampil-user", [UserController::class, "tampil"] )->name("tampil-user");
//tampilkan 1 user
    route::get("/tampil-user/{id}", [UserController::class, "show"]) -> name("user-show");

// edit user
Route::get("/edit-user/{id}", [UserController::class, "formEdit"] )->name("form-edit");
        Route::put("/update-user/{id}", [UserController::class, "update"] )->name("user_update");//mngolah pdate data







                        //proses memasukkan dan save data kategori
 Route::get("kategori/buat", [KategoriController::class, 'buat'])->name("buat_kategori");
    Route::post("kategori/simpan", [KategoriController::class, 'simpan'])->name("simpan_kategori");

//proses tampilkan kategori
Route::get("kategori/tampil/{id}", [KategoriController::class, 'tampil'])->name("tampil_kategori");
    Route::get("kategori/semua", [KategoriController::class, 'semua'])->name("semua_kategori");

//ubah kategori
Route::get("kategori/ubah/{id}", [KategoriController::class, 'ubah'])->name("ubah_kategori");
    Route::put("kategori/update/{id}", [KategoriController::class, 'update'])->name("update_kategori");

//hapus kategori
Route::delete("kategori/hapus/{id}", [KategoriController::class, 'hapus'])->name("hapus_kategori");




                      //proses memasukkan dan save data band
   Route::get("band/buat", [bandController::class, 'buat'])->name("buat_band");
   Route::post("band/simpan", [bandController::class, 'simpan'])->name("simpan_band");

//proses tampilkan band
Route::get("band/tampil/{id}", [bandController::class, 'tampil'])->name("tampil_band");
   Route::get("band/semua", [bandController::class, 'semua'])->name("semua_band");

//ubah band
Route::get("band/ubah/{id}", [bandController::class, 'ubah'])->name("ubah_band");
   Route::put("band/update/{id}", [bandController::class, 'update'])->name("update_band");

//hapus band
Route::delete("band/hapus/{id}", [bandController::class, 'hapus'])->name("hapus_band");




                        //proses memasukkan dan save data musik
Route::get("musik/buat", [musikController::class, 'buat'])->name("buat_musik");
    Route::post("musik/simpan", [musikController::class, 'simpan'])->name("simpan_musik");

//proses tampilkan musik
Route::get("musik/tampil/{id}", [musikController::class, 'tampil'])->name("tampil_musik");
    Route::get("musik/semua", [musikController::class, 'semua'])->name("semua_musik");

//ubah musik
Route::get("musik/ubah/{id}", [musikController::class, 'ubah'])->name("ubah_musik");
    Route::put("musik/update/{id}", [musikController::class, 'update'])->name("update_musik");

//hapus musik
Route::delete("musik/hapus/{id}", [musikController::class, 'hapus'])->name("hapus_musik");


                    //proses memasukkan dan save data favorit
Route::get("favorit/buat", [favoritController::class, 'buat'])->name("buat_favorit");
    Route::post("favorit/simpan", [favoritController::class, 'simpan'])->name("simpan_favorit");

//proses tampilkan favorit
Route::get("favorit/tampil/{id}", [favoritController::class, 'tampil'])->name("tampil_favorit");
    Route::get("favorit/semua", [favoritController::class, 'semua'])->name("semua_favorit");

//ubah favorit
Route::get("favorit/ubah/{id}", [favoritController::class, 'ubah'])->name("ubah_favorit");
    Route::put("favorit/update/{id}", [favoritController::class, 'update'])->name("update_favorit");

//hapus favorit
Route::delete("favorit/hapus/{id}", [favoritController::class, 'hapus'])->name("hapus_favorit");




});