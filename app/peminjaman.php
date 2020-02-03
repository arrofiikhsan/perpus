<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    protected $table="table_peminjaman";
    protected $primaryKey="id";
    protected $fillable=['tanggal','id_anggota','id_petugas','deadline','denda'];
}
