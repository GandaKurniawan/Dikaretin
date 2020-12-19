<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Perkiraan_PendapatanController extends Controller
{
    public function index()
    {
        $perkiraan=\App\Perkiraan::get();
        $tPerkiraan=[];
        $bPerkiraan=[];
        foreach($perkiraan as $p){
            $tPerkiraan[]=$p->perkiraan_Pendapatan;
            $bPerkiraan[]=$p->bulan->name_bulan;
        }

        return view('perkiraan_pendapatan.perkiraan_pendapatan',['tPerkiraan'=>$tPerkiraan,'bPerkiraan'=>$bPerkiraan]);
    }

    public function create(request $request)
    {
        $this->validate($request,[
            'kode'=> 'required|unique:perkiraans,kode'
        ]);
        $perkiraan = new \App\Perkiraan;
        $perkiraan->kode=$request->kode;
        $perkiraan->bulan_id=$request->bulan;
        $perkiraan->perkiraan_Pendapatan=$request->totalPerkiraan;
        $perkiraan->tahun=$request->tahun;
        $perkiraan->save();
        // dd($perkiraan);
        return redirect()->back();
    }
}
