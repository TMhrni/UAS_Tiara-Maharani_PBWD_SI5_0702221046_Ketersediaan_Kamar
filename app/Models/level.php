<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class level extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function kamar()
    {
        return $this->hasMany(kamar::class);
    }
}
