<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
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
