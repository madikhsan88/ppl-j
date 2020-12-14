<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'Peminjaman';
    protected $fillable = ['user_id','date', 'nominal', 'keterangan', 'status'];
}
