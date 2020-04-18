<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'id_level',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /*
    * Method untuk yang mendefinisikan relasi antara model user dan model Role
    */
    public function Levels()
    {
        return $this->belongsTo('App\Level_user', 'id_level', 'id_level');
    }

    public function hasRole($levelName)
    {
        foreach ($this->Levels as $level) {
            if ($level->nama === $levelName) return true;
        }
        return false;
    }
}
