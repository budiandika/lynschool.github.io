<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    protected $table = 'lyn_akun';
    protected $fillable = ['username', 'password', 'id_level', 'status'];
}
