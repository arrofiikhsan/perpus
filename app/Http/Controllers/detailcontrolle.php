<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Session;
use App\peminjaman;
use App\detail;
use Validator;

class detailcontrolle extends Controller
{
public function detail(Request $req){
    $Validator=Validator::make($req->all(),
    [
    'id_peminjaman'=>'required',
    'id_anggota'=>'required',
    'qty'=>'required',
    ]);
    if($Validator->fails()){
        response()->json('invalid input') ;
    }
    if(Auth::user()->levels=="admin" ){
        $simpan=detail::create([
            'id_buku'=>$req->id_buku,
            'qty'=>$req->qty,
            'id_peminjaman'=>$req->id_peminjaman,
            'id_anggota'=>$req->id_anggota
        ]);
        if($simpan){
            return response ()->json(['status'=>'berhasil tambah data']);
        }
        else{
            return response ()->json(['status'=>'gagal']);
        }
            }
            else{
                return response()->json(['status'=>'gagal :(']);                                      
            }
        }
    







}
