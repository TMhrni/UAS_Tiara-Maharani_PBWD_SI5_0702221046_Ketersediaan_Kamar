<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;
    protected $fillable = ['id_pasien', 'id_kamar', 'tanggal_masuk', 'tanggal_keluar'];

    public function pasien()
    {
        return $this->belongsTo(pasien::class);
    }

    public function room()
    {
        return $this->belongsTo(kamar::class);
    }
}
