<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    protected $table="table_anggota";
    protected $primaryKey="id";
    protected $fillable=['nama_anggota','alamat','no_telp'];
}
