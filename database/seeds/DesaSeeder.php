<?php

use App\Desa;
use Illuminate\Database\Seeder;

class DesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Desa::create([
            'nama_desa'         => 'NgapaEa',
            'nama_kecamatan'    => 'NgapaEa',
            'nama_kabupaten'    => 'Buton Utara',
            'alamat'            => 'Jln Poros Ereke-BauBau',
            'nama_kepala_desa'  => "Suparjo S.H",
            'alamat_kepala_desa' => "Dusun II Desa NgapaEa, Kecamatan Bonegunu, Kabupaten Buton Utara",
            'logo'              => "logo.png",
        ]);
    }
}
