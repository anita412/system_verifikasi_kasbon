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
                'kodekasbon' => 'KSB20229100001',
                'id_jenis' => '1',
                'id_kurs' => '1',
                'id_pph' => '1',
                'proyek' => 'abcd',
                'uraianpengguna' => 'abcd',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
