<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    protected $table = 'lyn_kontak';
    protected $fillable = ['type', 'detail', 'id_akun'];
}
