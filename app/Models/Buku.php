<?php

namespace App\Models;

use App\Models\Kategori_Buku;
use App\Models\Pinjam;
use App\Models\Ulasan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    public function kategori_buku()
    {
        return $this->belongsTo(Kategori_Buku::class);
    }

    public function pinjams()
    {
        return $this->hasMany(Pinjam::class);
    }

    public function ulasans()
    {
        return $this->hasMany(ulasan::class);
    }
}
