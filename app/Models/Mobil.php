<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $primaryKey = 'id_mobil';
    protected $fillable = ['id_admin', 'nama_mobil', 'merek', 'deskripsi', 'foto', 'harga'];

    public function user() {
        return $this->belongsTo(User::class, 'id_admin');
    }

    public function spesifikasi() {
        return $this->hasMany(SpesifikasiMobil::class, 'id_mobil');
    }
}