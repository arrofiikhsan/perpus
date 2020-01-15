<?php

use Illuminate\Database\Seeder;

class anggota extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \App\anggota::insert([[

        'nama_anggota'=>'roko',
        'alamat'=>'jalan halu',
        'no_telp'=>'999999',
        'created_at'=>date('y-m-d h:i:s')

       ],
       [
        'nama_anggota'=>'toro',
        'alamat'=>'jalan rcti',
        'no_telp,'=>'9876543',
        'created_at'=>date('y-m-d h:i:s')
       ],
       [
        'nama_anggota'=>'toro',
        'alamat'=>'jalan rcti',
        'no_telp'=>'9876543',
        'created_at'=>date('y-m-d h:i:s')
       ]
       ]);
    }
}
