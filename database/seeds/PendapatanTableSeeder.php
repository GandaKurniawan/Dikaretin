<?php

use Illuminate\Database\Seeder;

class PendapatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pendapatans')->insert
        ([
            'confirm_id' => 2,
            'berat_bersih'=> 60,
            'berat_kotor'=>69,
            'tanggal'=>'2020-12-01',
            'created_at'=>'2020-12-01 00:00:00',
            'updated_at'=>'2020-12-01 00:00:00', 
            'user_id' =>4,
        ]);

        DB::table('pendapatans')->insert
        ([
            'confirm_id' => 2,
            'berat_bersih'=> 60,
            'berat_kotor'=>77,
            'tanggal'=>'2020-12-02',
            'created_at'=>'2020-12-02 00:00:00',
            'updated_at'=>'2020-12-02 00:00:00', 
            'user_id' =>4,
        ]);
        DB::table('pendapatans')->insert
        ([
            'confirm_id' => 2,
            'berat_bersih'=> 67,
            'berat_kotor'=>77,
            'tanggal'=>'2020-12-03',
            'created_at'=>'2020-12-03 00:00:00',
            'updated_at'=>'2020-12-03 00:00:00', 
            'user_id' =>4,
        ]);
        DB::table('pendapatans')->insert
        ([
            'confirm_id' => 2,
            'berat_bersih'=>70,
            'berat_kotor'=>80,
            'tanggal'=>'2020-12-04',
            'created_at'=>'2020-12-04 00:00:00',
            'updated_at'=>'2020-12-04 00:00:00', 
            'user_id' =>4,
        ]);
        DB::table('pendapatans')->insert
        ([
            'confirm_id' => 2,
            'berat_bersih'=> 66,
            'berat_kotor'=>77,
            'tanggal'=>'2020-12-05',
            'created_at'=>'2020-12-05 00:00:00',
            'updated_at'=>'2020-12-05 00:00:00', 
            'user_id' =>4,
        ]);
        DB::table('pendapatans')->insert
        ([
            'confirm_id' => 2,
            'berat_bersih'=> 60,
            'berat_kotor'=>75,
            'tanggal'=>'2020-12-06',
            'created_at'=>'2020-12-06 00:00:00',
            'updated_at'=>'2020-12-06 00:00:00', 
            'user_id' =>4,
        ]);
        DB::table('pendapatans')->insert
        ([
            'confirm_id' => 2,
            'berat_bersih'=> 62,
            'berat_kotor'=>75,
            'tanggal'=>'2020-12-07',
            'created_at'=>'2020-12-07 00:00:00',
            'updated_at'=>'2020-12-07 00:00:00', 
            'user_id' =>4,
        ]);
        DB::table('pendapatans')->insert
        ([
            'confirm_id' => 2,
            'berat_bersih'=> 56,
            'berat_kotor'=>70,
            'tanggal'=>'2020-12-08',
            'created_at'=>'2020-12-08 00:00:00',
            'updated_at'=>'2020-12-08 00:00:00', 
            'user_id' =>4,
        ]);
        DB::table('pendapatans')->insert
        ([
            'confirm_id' => 2,
            'berat_bersih'=> 68,
            'berat_kotor'=>80,
            'tanggal'=>'2020-12-09',
            'created_at'=>'2020-12-09 00:00:00',
            'updated_at'=>'2020-12-09 00:00:00', 
            'user_id' =>4,
        ]);
        DB::table('pendapatans')->insert
        ([
            'confirm_id' => 2,
            'berat_bersih'=> 76,
            'berat_kotor'=>87,
            'tanggal'=>'2020-12-10',
            'created_at'=>'2020-12-10 00:00:00',
            'updated_at'=>'2020-12-10 00:00:00', 
            'user_id' =>4,
        ]);
        DB::table('pendapatans')->insert
        ([
            'confirm_id' => 2,
            'berat_bersih'=> 56,
            'berat_kotor'=>65,
            'tanggal'=>'2020-12-11',
            'created_at'=>'2020-1-11 00:00:00',
            'updated_at'=>'2020-12-11 00:00:00', 
            'user_id' =>4,
        ]);


    }
}
