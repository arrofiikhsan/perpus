<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class petugas extends Model
{
    protected $table="table_petugas";
    protected $fillable=['nama_petugas','alamat','no_telp','username','password','levels','created_at'];
    protected $primaryKey="id";
    public $timestamps=false;
    
}
