<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogAktivitas extends Model
{
    protected $primaryKey = 'id_log';
    protected $fillable = ['id_admin', 'aktivitas', 'tanggal'];

    public function user() {
        return $this->belongsTo(User::class, 'id_admin');
    }
}