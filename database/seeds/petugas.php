<?php

use Illuminate\Database\Seeder;

class petugas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\petugas::insert([[

            'nama_petugas'=>'tukimin',
            'alamat'=>'jalan halu',
            'no_telp'=>'999999',
            'username'=>'tukimin',
            'password'=>'12345',
            'created_at'=>date('y-m-d h:i:s')
           ],
           [
            'nama_petugas'=>'control',
            'alamat'=>'jalan hey',
            'no_telp'=>'2632632',
            'username'=>'backspace',
            'password'=>'sert2222',
            'created_at'=>date('y-m-d h:i:s')
           ],
           [
            'nama_petugas'=>'open',
            'alamat'=>'jalan olo',
            'no_telp'=>'374384374',
            'username'=>'oksoks',
            'password'=>'popoo',
            'created_at'=>date('y-m-d h:i:s')
           ],
           [
            'nama_petugas'=>'ere',
            'alamat'=>'jalan opo',
            'no_telp'=>'901911',
            'username'=>'ereeeer',
            'password'=>'ere1111',
            'created_at'=>date('y-m-d h:i:s')
           ],
           [
            'nama_petugas'=>'opo',
            'alamat'=>'jalan ete',
            'no_telp'=>'374384374',
            'username'=>'polo',
            'password'=>'ralph',
            'created_at'=>date('y-m-d h:i:s')
           ]
           ]);
    }
}
