<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegumuman extends Model
{
    protected $table = 'Pengumuman';
    protected $fillable = ['user_id','judul', 'isi', 'gambar'];
}
