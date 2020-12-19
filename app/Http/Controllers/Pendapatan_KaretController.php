<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class Pendapatan_KaretController extends Controller
{
    public function index()
    {
        //whereMonth('created_at','11')->whereDay('updated_at',)->
        $data_pendapatan = \App\Pendapatan ::orderby('tanggal','desc')->  simplepaginate(31);

        return view('pendapatan_Karet.pendapatan',['data_pendapatan'=>$data_pendapatan]);
    }

    public function rekap()
    {
        $rekap_Pendapatan = \App\TotalPendapatan::get();
        return view('perkiraan_pendapatan.rekapPendapatan',['rekap_pendapatan'=>$rekap_Pendapatan]);

    }

    public function cari(request $request)
    {
        $cari1 = $request->bulan;
        $cari2 = $request->tahun;
        if ($cari1==1) {
            $data_pendapatan = \App\Pendapatan ::orderby('tanggal')-> whereMonth('tanggal','1')->whereYear('tanggal','LIKE','%'.$cari2.'%')-> simplepaginate(31);
        } elseif ($cari1==2) {
            $data_pendapatan = \App\Pendapatan ::orderby('tanggal')-> whereMonth('tanggal','2')->whereYear('tanggal','LIKE','%'.$cari2.'%')-> simplepaginate(31);
            
        }else{
        //whereMonth('created_at','11')->whereDay('updated_at',)->
        $data_pendapatan = \App\Pendapatan ::orderby('tanggal')-> whereMonth('tanggal','LIKE','%'.$cari1.'%')->whereYear('tanggal','LIKE','%'.$cari2.'%')-> simplepaginate(31);
        }
        
        return view('pendapatan_Karet.pendapatan',['data_pendapatan'=>$data_pendapatan]);
    }
    public function show($id)
    {
        $profile= \App\User::find($id);
        return view('pendapatan_Karet.tambahPendapatan');
    }

    public function create(request $request)
    {
        $this->validate($request,[
            'tanggal'=>'unique:pendapatans,tanggal'
        ]);
        $pendapatan=new \App\Pendapatan;
        $pendapatan->confirm_id = 1;
        $pendapatan->berat_bersih=$request->beratBersih;
        $pendapatan->berat_kotor=$request->beratKotor;
       $pendapatan->user_id=$request->userId;
       $pendapatan->tanggal=now();
        $pendapatan->save();
        Alert::success('Sukses','Data Berhasil Disimpan');
    //     $user=new \App\User;
    //     $user->role_id = 3;
    //     $user->status_id=$request->status;
    //     $user->name=$request->username;
    //     $user->email=$request->email; 
    //     $user->password=bcrypt($request->password);
    //     $user->remember_token = str_random(60);
    //     $user->save();
    //     //insert data tabel biodatas
    //    // $request->request->(['username_id'=>$user->id]);
    //     $request->request->add(['user_id'=>$user->id]);
    //     $biodata=\App\biodata::create($request->all());
    //     //dd($biodata);
         return redirect('/pendapatan-karet')->with('sukses');


    }

    public function edit($id)
    {
        $data_pendapatan = \App\Pendapatan :: find($id);

        return view('pendapatan_Karet.editPendapatan',['data_pendapatan'=>$data_pendapatan]);
    }
    
    public function update(Request $request,$id)
    {
        // $pendapatan= \App\Pendapatan::find($id);
        // $pendapatan->user_id = $request->userId;
        // $pendapatan->confirm_id = $request->confirm;
        // $pendapatan->berat_bersih=$request->beratBersih;
        // $pendapatan->berat_kotor=$request->beratKotor;
        // $pendapatan->tanggal=$request->tanggal;
        // $pendapatan->update($request->all());
        $pendapatan=DB::table('pendapatans')
                            ->where('id',$id)
                            ->update([
                                'user_id' => $request->userId,
                                'confirm_id' => $request->confirm,
                                 'berat_bersih'=> $request->beratBersih,
                                 'berat_kotor'=>$request->beratKotor,
                            ]);
 
        // dd($pegawai);
        Alert::success('Sukses','Data Berhasil Diupdate');
        return redirect('/pendapatan-karet');
    }

    public function confirmasi(Request $request,$id)
    {
        $pendapatan= \App\Pendapatan::find($id);
        $pendapatan->user_id = $request->userId;
        $pendapatan->confirm_id = 2;
        $pendapatan->berat_bersih=$request->beratBersih;
        $pendapatan->berat_kotor=$request->beratKotor;
        $pendapatan->update($request->all());
        Alert::success('Sukses','Data Berhasil Dikonfirmasi');
        return redirect('/pendapatan-karet');
    }

    public function totalPendapatan(request $request){
        $this->validate($request,[
            'kode'=> 'required|unique:total_Pendapatans,kode'
        ]);

        $tPendapatan=new \App\TotalPendapatan;
        $tPendapatan->bulan_id = $request->bulan;
        $tPendapatan->kode=$request->kode;
        $tPendapatan->total_Pendapatan=$request->totalBersih;
        $tPendapatan->tahun=$request->tahun;
        $tPendapatan->save();
        Alert::success('Sukses','Data Berhasil Disimpan');
        return redirect()->back();

    }
}
