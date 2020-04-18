<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    protected $table = 'lyn_profil_wali';
    protected $fillable = ['no_ktp', 'nama_wali', 'jk', 'tgl_lahir', 'gol_darah', 'agama','foto','type_wali'];
}
