<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'Laporan';
    protected $fillable = ['user_id','keterangan', 'panen'];
}
