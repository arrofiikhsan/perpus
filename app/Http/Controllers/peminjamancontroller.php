<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Session;
use App\peminjaman;
use App\detail;
use App\anggota;
use Validator;
class peminjamancontroller extends Controller
{
public function peminjaman(Request $req){
    $Validator=Validator::make($req->all(),
    [
    'tanggal'=>'required',
    'id_anggota'=>'required',
    'id_petugas'=>'required',
    'deadline'=>'required',
    'denda'=>'required'
    ]);
    if($Validator->fails()){
        response()->json('invalid input') ;
    }
    if(Auth::user()->levels=="admin" ){
        $date=date("y-m-d H:i:s");
        $deadline=date("y-m-d H:i:s",strtotime('+7 days',strtotime($date)));
        $simpan=peminjaman::create([
            'tanggal'=>$req->tanggal,
            'id_anggota'=>$req->id_anggota,
            'id_petugas'=>Auth::user()->id,
            'deadline'=>$deadline,
            'denda'=>$req->denda

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
        public function show($id){
            $datapinjam = DB::table('table_peminjaman')->join('table_anggota','table_peminjaman.id_anggota','=','table_anggota.id')
                          ->where('table_peminjaman.id','=',$id)
                          ->select('table_peminjaman.*','table_anggota.*')->first();
            $data_peminjam = array();
                $buku = DB::table('table_detail_peminjaman')->join('table_buku','table_detail_peminjaman.id_buku','=','table_buku.id')
                        ->where('table_detail_peminjaman.id_peminjaman','=',$id)
                        ->select('table_detail_peminjaman.*','table_buku.*')->get();
                $arr_buku = array();
                foreach($buku as $b){
                    $arr_buku[] = array(
                        'nama buku' => $b->judul,
                        'jumlah dipinjam' => $b->qty
                    );
                }
                $data_peminjam[] = array(
                    'id anggota' => $datapinjam->id_anggota,
                    'nama anggota' => $datapinjam->nama_anggota,
                    'id petugas' => $datapinjam->id_petugas,
                    'tanggal pinjam' => $datapinjam->tanggal,
                    'tanggal deadline' => $datapinjam->deadline,
                    'denda' => $datapinjam->denda,
                    'daftar buku dipinjam' => $arr_buku 
                );   
            return response()->json(compact('data_peminjam'));
        }
}

    






