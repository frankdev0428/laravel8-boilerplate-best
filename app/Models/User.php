<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;



class User extends Authenticatable
{
   use HasApiTokens, Notifiable, HasRoles;

   /**
    * The attributes that are mass assignable.
    * @var array
    */
   protected $fillable = [
     'name', 'email', 'password',
   ];

   /**
    * The attributes that should be hidden for arrays.
    * @var array
    */
   protected $hidden = [
     'password', 'remember_token',
   ];


   protected $casts = [
     'email_verified_at' => 'datetime',
   ];

}
