<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $primaryKey = 'id_review';
    protected $fillable = ['id_admin', 'nama_pelanggan', 'isi_review', 'rating', 'tanggal'];

    public function user() {
        return $this->belongsTo(User::class, 'id_admin');
    }
}