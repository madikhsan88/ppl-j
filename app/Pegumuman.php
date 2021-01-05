<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegumuman extends Model
{
    protected $table = 'pengumuman';
    protected $fillable = ['user_id','judul', 'isi', 'gambar'];
}
