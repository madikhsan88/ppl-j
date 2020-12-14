<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manager = Role::create([
            'name' => 'manager',
            'guard_name ' => 'web'
        ]);

        $pengawas = Role::create([
            'name' => 'pengawas',
            'guard_name ' => 'web'
        ]);

        $karyawan = Role::create([
            'name' => 'karyawan',
            'guard_name ' => 'web'
        ]);
    }
}
