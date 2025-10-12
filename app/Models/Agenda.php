<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'judul',
        'qrcode',
        'tempat_kegiatan',
        'latitude',
        'longitude',
        'radius',
        'tgl_kegiatan',
        'jam_mulai',
        'deskripsi_kegiatan',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // public function report()
    // {
    //     return $this->hasOne(Report::class);
    // }
}
