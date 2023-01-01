<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;
    protected $table = "kategori";

    public function kategori()
    {
        return $this->belongsTo(musik::class, "musik_id");
    }
}
