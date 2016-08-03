<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
      use EntrustUserTrait;
    protected $table = 'user';
    public $timestamps = false;
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    'password',
    ];
    public function user_has_pribadi(){
        return $this->hasOne('App\data_pribadi','user_id');
    }
    public function user_has_registrasi(){
      return $this->hasOne('App\registration','user_id');
  }
  public function isAdmin(){
    return $this->role=="admin";
  }
   public function isMember(){
    return $this->role=="member";
  }
   public function Pribadi()
    {
        return $this->hasOne('App\data_pribadi','user_id');
    }
}
