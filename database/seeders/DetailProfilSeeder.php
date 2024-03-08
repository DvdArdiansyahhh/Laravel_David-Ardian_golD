<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //insert data ke table detail profile
        DB::table('detail_profile')->insert([
            'nim'=>'E41221857',
            'nama_mhs'=>'David Ardian',
            'prodi_mhs'=>'Teknik Informatika',
            'address_mhs'=>'Lumajang',
            'no-telp_mhs'=>'082311241228',
            'date_mhs'=>'2002-12-23'
        ]);
    }
}
