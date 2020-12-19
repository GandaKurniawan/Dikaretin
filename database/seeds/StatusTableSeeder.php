<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert
        ([
            'name_status'=>'Aktif',
            'created_at'=>now(),
            'updated_at'=>now(), 
        ]);

        DB::table('statuses')->insert
        ([
            'name_status'=>'Nonaktif',
            'created_at'=>now(),
            'updated_at'=>now(), 
        ]);
    }
}
