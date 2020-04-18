<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'lyn_profil_siswa';
    protected $fillable = ['nis', 'nama_siswa', 'jk', 'tgl_lahir', 'gol_darah', 'agama', 'id_akun', 'foto'];
}
