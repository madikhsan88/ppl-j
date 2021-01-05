<?php

use Illuminate\Database\Seeder;
use App\jadwal;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jadwal=jadwal::create([
            "hari" => "senin",
            "keterangan_kerja" => "panen",
            "lokasi" => "blok a"
        ]);
        $jadwal1=jadwal::create([
            "hari" => "senin",
            "keterangan_kerja" => "panen",
            "lokasi" => "blok a"
        ]);
        $jadwal2=jadwal::create([
            "hari" => "rabu",
            "keterangan_kerja" => "panen",
            "lokasi" => "blok a"
        ]);
        $jadwal3=jadwal::create([
            "hari" => "kamis",
            "keterangan_kerja" => "panen",
            "lokasi" => "blok b"
        ]);
        $jadwal4=jadwal::create([
            "hari" => "jumat",
            "keterangan_kerja" => "panen",
            "lokasi" => "blok a"
        ]);
        $jadwal5=jadwal::create([
            "hari" => "sabtu",
            "keterangan_kerja" => "panen",
            "lokasi" => "blok a"
        ]);
        $jadwal6=jadwal::create([
            "hari" => "minggu",
            "keterangan_kerja" => "penyemprotan",
            "lokasi" => "blok c"
        ]);
    }
}
