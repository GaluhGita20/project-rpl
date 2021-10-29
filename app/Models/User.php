<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

/* class User extends Model */
class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /* assignable field */ 
    protected $fillable = ['name', 'email', 'password', 'profile_picture', 'provider', 'provider-id', 'access_token'];

    /* hidden from array */
    protected $hidden = ['password', 'remember_token'];

    /* for email that has been verified */
    protected $casts = ['email_verified_at' => 'timestamp'];

    /* public function getJWTIdentifier() { */
    /*     return $this->getKey(); */
    /* } */

    /* public function getJWTCustomClaims() { */
    /*     return []; */
    /* } */    
}

