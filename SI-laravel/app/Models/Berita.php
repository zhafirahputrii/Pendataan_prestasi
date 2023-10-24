<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    //relasi eloquent many to many antara prestasi dan berita
    public function prestasis()
    {
        return $this->belongsToMany(Berita::class);
    }
}
