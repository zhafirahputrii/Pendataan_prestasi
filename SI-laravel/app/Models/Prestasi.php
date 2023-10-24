<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Prestasi extends Model
{
    
    use HasFactory;
    protected $table = 'prestasi';
    protected $primaryKey = 'id';
    protected $fillable = ['nisn','nama','kelas','alamat','prestasi','tingkat','tanggal'];

    //relasi eloquent antara berita dan prestasi
    public function beritas()
    {
        return $this->belongsToMany(Prestasi::class);
    }
}
