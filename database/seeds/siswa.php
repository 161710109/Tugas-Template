<?php

use Illuminate\Database\Seeder;

class siswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sis = [['nis'=>'34234','nama'=>'Ibrahim Zaenudin','tempat_lahir'=>'Bandung','tanggal_lahir'=>'1996-01-03','alamat'=>'Jl Test 123','cita_cita'=>'Jadi Manusia','hobi'=>'Ngala Belut','photo'=>'zae.jpg'],
        ['nis'=>'4234242','nama'=>'Brian Imanuel','tempat_lahir'=>'indonesia','tanggal_lahir'=>'1999-01-06','alamat'=>'Jakarta','cita_cita'=>'Rapper','hobi'=>'Bernyanyi','photo'=>'rich.jpg']
    ];
        DB::table('siswas')->insert($sis);
        
    }
}
