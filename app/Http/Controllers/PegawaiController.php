<?php

namespace App\Http\Controllers;

use App\User;
use App\Biodata;
use App\Role;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;


class PegawaiController extends Controller
{

    
    public function index()
    {
        $data_pegawai=\App\User::whereNotIn('role_id',[1])->orderby('id','desc')->simplepaginate(5);

        return view('pegawai.pegawai',['data_pegawai'=>$data_pegawai]);
    }

    public function indexcreate()
    {

        return view('pegawai.buat_akun');
    }


    public function create(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|unique:users,email',
            'no_telephone' => 'required|unique:biodatas,no_telephone'
        ]);
        $user=new \App\User;
        $user->role_id = 3;
        $user->status_id=$request->status;
        $user->name=$request->username;
        $user->email=$request->email; 
        $user->password=Hash::make('rahasia');
        $user->remember_token = str_random(60);
        $user->save();
        //insert data tabel biodatas
       // $request->request->(['username_id'=>$user->id]);
        $request->request->add(['user_id'=>$user->id]);
        $biodata=\App\biodata::create($request->all());
        Alert::success('Sukses','Data Berhasil Disimpan');
        //dd($biodata);
        return redirect('/pegawai');

    } 

    public function edit($id)
    {
        $pegawai= \App\User::find($id);

       // dd($pegawai);
       return view('pegawai.edit',['pegawai'=> $pegawai]);
    }

    public function update(Request $request,$id)
    {
        $user= \App\User::find($id);
        $user->role_id = 3;
        $user->status_id=$request->status;
        $user->name=$request->username;
        $user->update($request->all());

        $request->request->add(['user_id'=>$user->id]);
        $biodata=\App\biodata::find($id);
        $biodata->nama=$request->nama;
        $biodata->alamat=$request->alamat;
        $biodata->update($request->all());
        Alert::success('Sukses','Data Berhasil Diupdate');

        // dd($pegawai);
        return redirect('/pegawai');
    }

  
}
