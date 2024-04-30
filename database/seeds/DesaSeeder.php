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
            'nama_desa'         => 'Ngapaea',
            'nama_kecamatan'    => 'Ngapaea',
            'nama_kabupaten'    => 'Jember',
            'alamat'            => 'Jl. Rengganis Nomor 01 Ngapaea 68191',
            'nama_kepala_desa'  => "WASI'A",
            'alamat_kepala_desa'=> "Dusun Gumitir Desa Ngapaea  Kecamatan  Ngapaea Kabupaten Jember",
            'logo'              => "logo.png",
        ]);
    }
}
