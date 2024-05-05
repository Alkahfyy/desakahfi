<?php

use App\Sejarah;
use Illuminate\Database\Seeder;

class SejarahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sejarah::create([
            'konten' => '
            <div style="text-align: center;"><b style="font-size: 1rem;">Sejarah Desa<br><br></b></div>
            <p>Sejarah Desa<br>
            Pada Awalnya Ngapae’a Merupakan Dusun II dari Desa Wa Ode Kalowo. Pada Tahun 2013 terjadi Pemekaran Desa Wa Ode Kalowo dengan Desa Pemekaran Desa Ngapa’ea yang pada saat itu menjadi Desa Persiapan dengan Kepala Desa Pelaksana Himin Sayatin, ST. Pada Tahun 2014 Desa tersebut menjadi Desa Definitif dan Kepala Desa Definitif terpilih Balaba.</p>
            <p>Desa Ngapa’ea merupakan salah satu Desa Pemekaran dari Desa Wa Ode Kalowo Kecamatan Bonegunu dengan Luas Wilayah 35 KM2 yang terdiri dari Dua Dusun dengan Jumlah Penduduk 577 Jiwa dari 157 KK dengan Wilayah Desa Sebagai Berikut :</p>
            <ul>
                <li>Sebelah Timur: Desa Koepisino</li>
                <li>Sebelah Barat: Kecamatan Maligano</li>
                <li>Sebelah Selatan: Desa Wa Ode Kalowo</li>
                <li>Sebelah Utara: Desa Eensumala</li>
            </ul>
            '
        ]);
    }
}
