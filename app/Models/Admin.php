<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $primaryKey = 'id_admin';
    protected $fillable = ['nama', 'email', 'password'];

    public function logAktivitas() {
        return $this->hasMany(LogAktivitas::class, 'id_admin');
    }

    public function reviews() {
        return $this->hasMany(Review::class, 'id_admin');
    }

    public function mobils() {
        return $this->hasMany(Mobil::class, 'id_admin');
    }
}