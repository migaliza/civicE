<?php 
namespace App;

use Illuminate\Notifications\Notifiable;
use Jenssegers\Mongodb\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{

  use EntrustUserTrait, Notifiable;
  //use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'fName','lName', 'email', 'password','email_token','status','citizenship','region'
    ];
    




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
