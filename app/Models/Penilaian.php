<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;

    protected $table = 'penilaian';

    public function coach()
    {
        return $this->belongsTo(Coach::class, 'coach_id');
    }

    public function latihan()
    {
        return $this->belongsTo(Latihan::class, 'latihan_id');
    }
}