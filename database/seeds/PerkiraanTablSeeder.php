<?php

use Illuminate\Database\Seeder;

class PerkiraanTablSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perkiraans')->insert
        ([
            'bulan_id' => 1,
            'kode'=> 20201,
            'perkiraan_Pendapatan'=>1775,
            'tahun'=>'2020',
            'created_at'=>'2020-01-31 00:00:00',
            'updated_at'=>'2020-01-31 00:00:00', 
        ]);
        DB::table('perkiraans')->insert
        ([
            'bulan_id' => 2,
            'kode'=> 20202,
            'perkiraan_Pendapatan'=>1875,
            'tahun'=>'2020',
            'created_at'=>'2020-02-29 00:00:00',
            'updated_at'=>'2020-02-29 00:00:00', 
        ]);
        DB::table('perkiraans')->insert
        ([
            'bulan_id' => 3,
            'kode'=> 20203,
            'perkiraan_Pendapatan'=>1875,
            'tahun'=>'2020',
            'created_at'=>'2020-03-31 00:00:00',
            'updated_at'=>'2020-03-31 00:00:00', 
        ]);
        DB::table('perkiraans')->insert
        ([
            'bulan_id' => 4,
            'kode'=> 20204,
            'perkiraan_Pendapatan'=>1775,
            'tahun'=>'2020',
            'created_at'=>'2020-04-30 00:00:00',
            'updated_at'=>'2020-04-30 00:00:00', 
        ]);
    }
}
