<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeliSuplemen extends Model
{
    use HasFactory;

    protected $table = 'beli_suplemen';

    protected $fillable = [
        'user_id',
        'suplemen_id',
        'tanggal_pembelian',
        'jumlah_pembelian',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function suplemen()
    {
        return $this->belongsTo(Suplemen::class, 'suplemen_id');
    }
}
