<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert
        ([
            'name_role'=>'kepala',
            'created_at'=>now(),
            'updated_at'=>now(), 
        ]);

        DB::table('roles')->insert
        ([
            'name_role'=>'adm',
            'created_at'=>now(),
            'updated_at'=>now(), 
        ]);

        DB::table('roles')->insert
        ([
            'name_role'=>'pegawai',
            'created_at'=>now(),
            'updated_at'=>now(), 
        ]);
    }
}
