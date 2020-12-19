<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'angga',
            'role_id'=>'1',
            'status_id'=>'1',
            'email'=>'angga@gmail.com',
            'password'=>bcrypt('rahasia'),
            'created_at'=>now(),
            'updated_at'=>now(), 


        ]);
        

        DB::table('users')->insert([
            'name'=>'ahmad',
            'role_id'=>'2',
            'status_id'=>'1',
            'email'=>'ahmad@gmail.com',
            'password'=>bcrypt('rahasia'),
            'created_at'=>now(),
            'updated_at'=>now(), 


        ]);
        
        DB::table('users')->insert([
            'name'=>'jajang',
            'role_id'=>'3',
            'status_id'=>'1',
            'email'=>'jajang@gmail.com',
            'password'=>bcrypt('rahasia'),
            'created_at'=>now(),
            'updated_at'=>now(), 
        ]);

        DB::table('users')->insert([
            'name'=>'rudi',
            'role_id'=>'3',
            'status_id'=>'1',
            'email'=>'rudi@gmail.com',
            'password'=>bcrypt('rahasia'),
            'created_at'=>now(),
            'updated_at'=>now(), 
        ]);
    }
}
