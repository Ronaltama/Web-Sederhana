<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogAktivitas extends Model
{
    protected $primaryKey = 'id_log';
    protected $fillable = ['id_admin', 'aktivitas', 'tanggal'];

    public function admin() {
        return $this->belongsTo(Admin::class, 'id_admin');
    }
}