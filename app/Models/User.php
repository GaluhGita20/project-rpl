<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

/* class User extends Model */
class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /* assignable field */ 
    protected $fillable = ['name', 'email', 'password'];

    /* hidden from array */
    protected $hidden = ['password', 'remember_token'];

    /* for email that has been verified */

    protected $casts = ['email_verified_at' => 'timestamp'];
}

