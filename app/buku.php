<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    protected $table="table_buku";
    protected $primaryKey="id";
    protected $fillable=['judul','penerbit','pengarang'];
}
