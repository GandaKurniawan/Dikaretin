<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//login
Route::get('/','LoginController@login')->name('login');
Route::post('/postlogin','LoginController@postlogin')->name('postLogin');
Route::get('/logout','LoginController@logout')->name('logout');
Route::group(['middleware' => ['auth']], function () {
    //dashboard
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    //Route::get('/profile', 'ProfileController@index');
    Route::get('/profile/{id}','ProfileController@profile')->name('profil');
    Route::post('/profile/{id}/update','ProfileController@update')->name('profileUpdate');
    Route::get('/profile/{id}/ganti-password','ProfileController@gantiPassword')->name('Password');

    //Pendapatan karet
    Route::get('/pendapatan-karet', 'Pendapatan_KaretController@index')->name('pendapatan');
    Route::get('/pendapatan-karet/{id}/edit', 'Pendapatan_KaretController@edit')->name('editPendapatan');
    Route::post('/pendapatan-karet/{id}/update', 'Pendapatan_KaretController@update')->name('updatePendapatan');
    Route::get('/pendapatan-karet/{id}/tambah-pendapatan', 'Pendapatan_KaretController@show')->name('tambahPendapatan');
    Route::post('/pendapatan-karet/tambah-pendapatan', 'Pendapatan_KaretController@create')->name('postPendapatan');
    Route::post('/pendapatan-karet/{id}/konfirmasi', 'Pendapatan_KaretController@confirmasi')->name('konfirmasi');
    Route::get('/pendapatan-karet/cari', 'Pendapatan_KaretController@cari')->name('cari');
    Route::post('/pendapatan-karet/total-pendapatan', 'Pendapatan_KaretController@totalPendapatan')->name('totalPendapatan');
    Route::get('/pendapatan-karet/rekap-pendapatan', 'Pendapatan_KaretController@rekap')->name('rekap');


    //perkiraan pendapatan
    Route::get('/perkiraan-pendapatan', 'Perkiraan_PendapatanController@index')->name('perkiraan');
    Route::post('/pendapatan-karet/tambah-perkiraan', 'Perkiraan_PendapatanController@create')->name('buatPerkiraan');  
    //keuangan
    Route::get('/keuangan', 'KeuanganController@index')->name('keuangan');
    
    //pegawai
    Route::get('/pegawai', 'PegawaiController@index')->name('pegawai');
    Route::get('/pegawai/buat_akun', 'PegawaiController@indexcreate')->name('buatAkun');
    Route::post('/pegawai/buat_akun', 'PegawaiController@create')->name('postBuatAkun');
    Route::get('/pegawai/{id}/edit', 'PegawaiController@edit')->name('editPegawai');
    Route::post('/pegawai/{id}/update', 'PegawaiController@update')->name('updatePegawai');
});



/*route::get('/login','LoginController@pageLogin')->name('login')->middleware('guest');
route::post('/ceklogin','LoginController@cekLogin')->name('ceklogin')->middleware('guest');
route::get('/logout','LoginAuthController@logoutLogin')->name('logout');

route::get('/dashboard','LoginController@dashboard')->name('dashboard')->middleware('auth');*/

