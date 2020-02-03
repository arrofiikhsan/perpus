<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// anggota
Route::post('register', 'Usercontroller@register');
Route::post('login', 'Usercontroller@login');
Route::post('simpan','anggotacontroller@aku')->middleware('jwt.verify');
Route::post('update/{id}','anggotacontroller@update')->middleware('jwt.verify');
Route::post('delete/{id}','anggotacontroller@destroy')->middleware('jwt.verify');
Route::get('show','anggotacontroller@show')->middleware('jwt.verify');
//buku
Route::post('tambah','bukucontroller@tambah')->middleware('jwt.verify');
Route::post('updatebuku/{id}','bukucontroller@update')->middleware('jwt.verify');
Route::post('deletebuku/{id}','bukucontroller@destroy')->middleware('jwt.verify');
Route::get('showw','bukucontroller@show')->middleware('jwt.verify');
Route::post('insert','peminjamancontroller@peminjaman')->middleware('jwt.verify');
Route::post('insertdetail','detailcontrolle@detail')->middleware('jwt.verify');
Route::get('show{id}','peminjamancontroller@show')->middleware('jwt.verify');