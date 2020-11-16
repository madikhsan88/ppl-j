<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    protected $table = 'karyawan';
    protected $fillable = ['nama_lengkap','jenis_kelamin','email', 'alamat','avatar', 'user_id'];
}
