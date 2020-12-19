<?php

use Illuminate\Database\Seeder;

class BiodataTableSeede extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('biodatas')->insert
        ([
            'user_id' => 1,
            'nama'=> 'angga kurniawan',
            'alamat'=>'jl kenanga',
            'no_telephone'=>'087654654321',
            'created_at'=>now(),
            'updated_at'=>now(), 
        ]);

        DB::table('biodatas')->insert
        ([
            'user_id' => 2,
            'nama'=> 'ahmad santoso',
            'alamat'=>'jl kenanga',
            'no_telephone'=>'087654654765',
            'created_at'=>now(),
            'updated_at'=>now(), 
        ]);

        DB::table('biodatas')->insert
        ([
            'user_id' => 3,
            'nama'=> 'jajang pariaman',
            'alamat'=>'jl kenanga',
            'no_telephone'=>'087654654123',
            'created_at'=>now(),
            'updated_at'=>now(), 
        ]);

        DB::table('biodatas')->insert
        ([
            'user_id' => 4,
            'nama'=> 'rudi handoko',
            'alamat'=>'jl kenanga',
            'no_telephone'=>'087654654167',
            'created_at'=>now(),
            'updated_at'=>now(), 
        ]);
    }
}
