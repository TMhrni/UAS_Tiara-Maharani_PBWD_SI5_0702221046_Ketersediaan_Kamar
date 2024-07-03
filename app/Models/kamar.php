<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{
    use HasFactory;

    protected $fillable = ['nomor_kamar', 'level_id', 'status'];

    public function level()
    {
        return $this->belongsTo(level::class);
    }

    public function bookings()
    {
        return $this->hasMany(booking::class);
    }
}