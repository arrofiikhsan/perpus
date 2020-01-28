<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\anggota;
use Illuminate\Support\Facades\Validator;
class anggotacontroller extends Controller
{
    public function aku(Request $req){
        if(Auth::user()->levels=="admin"){
            $validator=Validator::make($req->all(),
        [
            'nama_anggota'=>'required',
            'alamat'=>'required',
            'no_telp'=>'required',
            
        ]
    );
    if($validator->fails()){
        return Response()->json($validator->errors());
    }
    $simpan=anggota::create([
        'nama_anggota'=>$req->nama_anggota,
            'alamat'=>$req->alamat,
            'no_telp'=>$req->no_telp,
        
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
    public function update($id,Request $req){
        $validator=Validator::make($req->all(),
        [
            'nama_anggota'=>'required',
            'alamat'=>'required',
            'no_telp'=>'required',
            
        ]
    );
    if($validator->fails()){
        return Response()->json($validator->errors());
    }
    $ubah=anggota::where('id',$id)->update([
        'nama_anggota'=>$req->nama_anggota,
        'alamat'=>$req->alamat,
        'no_telp'=>$req->no_telp,
        
    ]);
    if($ubah){
        return Response()->json(['status'=>'berhasil update data']);
    }
    else{
     return Response()->json(['status'=>'gagal deh :(']);
    }

    }
    public function destroy($id){
        $hapus=anggota::where('id',$id)->delete();
        if($hapus){
            return Response()->json(['status'=>'berhasil']);
        }
        else{
            return Response()->json(['status'=>'gogol']);
        }
    }
    public function show(){
        $data_anggota = anggota::get();
        $arr_data = array();
        foreach($data_anggota as $data) {
            $arr_data[] = array(
            'nama_anggota'=>$data->nama_anggota,
            'alamat'=>$data->alamat,
            'no_telp'=>$data->no_telp,
        
            );
        
        }

        return Response()->json($arr_data);
    }
}
