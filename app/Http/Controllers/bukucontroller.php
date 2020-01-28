<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\buku;
use Illuminate\Support\Facades\Validator;
class bukucontroller extends Controller
{
    public function tambah(Request $req){
    if(Auth::user()->levels=="kasir"){
        $validator=Validator::make($req->all(),
    [
        'judul'=>'required',
        'pengarang'=>'required',
        'penerbit'=>'required',
        
    ]
);
if($validator->fails()){
    return Response()->json($validator->errors());
}
$simpan=buku::create([
    'judul'=>$req->judul,
        'pengarang'=>$req->pengarang,
        'penerbit'=>$req->penerbit,
    
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
        'judul'=>'required',
        'pengarang'=>'required',
        'penerbit'=>'required',
        
    ]
);
if($validator->fails()){
    return Response()->json($validator->errors());
}
$ubah=buku::where('id',$id)->update([
    'judul'=>$req->judul,
    'pengarang'=>$req->pengarang,
    'penerbit'=>$req->penerbit,
    
]);
if($ubah){
    return Response()->json(['status'=>'berhasil update data']);
}
else{
 return Response()->json(['status'=>'gagal deh :(']);
}

}
public function destroy($id){
    $hapus=buku::where('id',$id)->delete();
    if($hapus){
        return Response()->json(['status'=>'berhasil']);
    }
    else{
        return Response()->json(['status'=>'gogol']);
    }
}
public function show(){
    $data_buku = buku::get();
    $arr_data = array();
    foreach($data_buku as $data) {
        $arr_data[] = array(
            'judul'=>$data->judul,
            'pengarang'=>$data->pengarang,
            'penerbit'=>$data->penerbit,
    
        );
    
    }

    return Response()->json($arr_data);
}
}
