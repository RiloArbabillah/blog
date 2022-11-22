<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    public function run()
    {
        $siswa = DB::table('siswa')->get();
        dd($siswa);
    }
}
