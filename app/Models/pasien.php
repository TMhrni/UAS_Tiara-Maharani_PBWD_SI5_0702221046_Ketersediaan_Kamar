<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'info_kontak'];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
