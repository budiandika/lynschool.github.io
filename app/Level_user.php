<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level_user extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'nama', 'created_at', 'updated_at'
    ];

    public function User()
    {
        return $this->hasMany('App\User');
    }
}
