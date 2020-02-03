<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    protected $table="table_detail_peminjaman";
    protected $primaryKey="id";
    protected $fillable=['id_peminjaman','id_buku','qty','id_anggota'];
}
