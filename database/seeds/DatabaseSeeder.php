<?php

use App\Sejarah;
use App\VisiMisi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(DesaSeeder::class);
        $this->call(AgamaSeeder::class);
        $this->call(DarahSeeder::class);
        $this->call(PekerjaanSeeder::class);
        $this->call(PendidikanSeeder::class);
        $this->call(StatusHubunganDalamKeluargaSeeder::class);
        $this->call(StatusPerkawinanSeeder::class);
        $this->call(JenisAnggaranSeeder::class);
        $this->call(KelompokJenisAnggaranSeeder::class);
        $this->call(DetailJenisAnggaranSeeder::class);
        // $this->call(VisiMisiSeeder::class);
        // $this->call(SejarahSeeder::class);

        VisiMisi::create([
            'visi' => '<div style="text-align: center;"><span style="font-size: 1rem;"><b>Visi</b></span></div>Terwujudnya Tata Kelola Pemerintahan  Desa Ngapa’ea yang Baik Menuju Desa yang Maju, Mandiri, Berkualitas dan Berbudaya.',

            'misi' => '<p style="text-align: center;"><b>Misi</b></p>
            <p>1. Meningkatkan tata kelola pemerintahan desa Ngapa’ea yang Bersih, Transparan, Akuntabel, dan Partisipatif.</p>
            <p>2. Meningkatkan perekonomian masyarakat melalui pengembangan sumber daya lokal.</p>
            <p>3. Meningkatkan sumber daya manusia yang berkualitas dan Berbudaya.</p>
            <p>4. Mewujudkan ketersediaan sarana dan prasarana yang memadai berdasarkan kebutuhan masyarakat.</p>'

        ]);

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
