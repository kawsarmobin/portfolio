<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    const ACTIVE = 1;
    const DEACTIVE = 0;
    const ADMIN_USER = 1;
    const REGULAR_USER = 0;

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin()
    {
      if ($this->is_admin) {
        return true;
      }
    }

    public function status()
    {
      if ($this->status) {
        return true;
      }
    }
}
