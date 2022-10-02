<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KasbonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kasbons')->insert([
            [
                'id' => '1',
                'nip' => '1231432',
                'username' => 'jijie',
                'id_unit' => '1',
                'nokasbon' => 'KSB2022-09-15-1',
                'id_kodekasbon' => '1',
                'id_jenis' => '1',
                'id_kurs' => '1',
                'id_pph' => '1',
                'proyek' => 'abcd',
                'uraianpengguna' => 'abcd',
                'tglmasuk' => Carbon::now(),
                'cekdokumen' => '0',
                'status' => 'Dalam Proses',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
