<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use App\biodata;
use RealRashid\SweetAlert\Facades\Alert;


use Illuminate\Http\Request;



class ProfileController extends Controller
{
  
    public function profile($id)
    {
        $profile= \App\User::find($id);
        //dd($profile)
        return view('dashboard.profile',['profile'=> $profile]);
    }

    public function update(Request $request,$id)
    {
        $user= \App\User::find($id);
        $user->role_id =$request->role;
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
        return redirect()->back();
    }

    public function gantiPassword(Request $request,$id)
    {
       // $profile= \App\User::find($id);
        //dd($profile)
        return view('dashboard.gantiPassword');

    }
}

