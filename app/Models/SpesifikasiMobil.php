<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpesifikasiMobil extends Model
{
    protected $fillable = ['id_mobil', 'tipe_mesin', 'kapasitas_mesin', 'transmisi', 'warna', 'tahun'];

    public function mobil() {
        return $this->belongsTo(Mobil::class, 'id_mobil');
    }
}