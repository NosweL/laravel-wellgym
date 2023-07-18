<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $fillable = ['member_id', 'coach_id', 'paket_id', 'jadwal_mulai', 'jadwal_selesai', 'pembayaran', 'bukti', 'status'];

    public function member()
    {
        return $this->belongsTo(User::class, 'member_id');
    }

    public function coach()
    {
        return $this->belongsTo(Coach::class, 'coach_id');
    }

    public function paket()
    {
        return $this->belongsTo(Paket::class, 'paket_id');
    }
}
