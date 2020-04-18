<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    protected $table = 'lyn_sekolah';
    protected $fillable = ['nama_sekolah', 'alamat', 'no_telpon', 'email', 'no_fax', 'website', 'visi', 'misi', 'foto'];
}
