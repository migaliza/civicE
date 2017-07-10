<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Jenssegers\Mongodb\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'fName','lName', 'email', 'password','status','role'
    ];
    
    protected $citizenship;
    protected $region;
    protected $status; //student or faculty
    protected $role; //ordinary user, project lead, volunteer, admin


    /**
     * The attributes

      that should be hidden for arrays.
     *
     * @var array
     */
      protected $hidden = [
      'password', 'remember_token',
      ];
  }
