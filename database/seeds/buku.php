<?php

use Illuminate\Database\Seeder;

class buku extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\buku::insert([[

            'judul'=>'hantu',
            'penerbit'=>'kita',
            'pengarang'=>'juice',
            'created_at'=>date('y-m-d h:i:s')
           ],
           [
            'judul'=>'aku',
            'penerbit'=>'tebe',
            'pengarang'=>'kuro',
            'created_at'=>date('y-m-d h:i:s')
           ],
           [
            'judul'=>'mbakku',
            'penerbit'=>'airlangga',
            'pengarang'=>'andi',
            'created_at'=>date('y-m-d h:i:s')
           ],
           [
            'judul'=>'koe',
            'penerbit'=>'dodo',
            'pengarang'=>'dodi',
            'created_at'=>date('y-m-d h:i:s')
           ],
           [
            'judul'=>'halu',
            'penerbit'=>'kita sahaja',
            'pengarang'=>'udin',
            'created_at'=>date('y-m-d h:i:s')
           ]
           ]);
    }
}
