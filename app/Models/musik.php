<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class musik extends Model
{
    use HasFactory;
    protected $table = "musik";

    public function band()
    {
        return $this->belongsTo(band::class, "band_id");
    }

    public function kategori()
    {
        return $this->belongsTo(kategori::class, "kategori_id");
    }
}
