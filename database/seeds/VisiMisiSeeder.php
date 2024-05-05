<?php

use App\VisiMisi;
use Illuminate\Database\Seeder;

class VisiMisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VisiMisi::create([
            'visi'         => 'Terwujudnya Tata Kelola Pemerintahan  Desa Ngapa’ea yang Baik Menuju Desa yang Maju, Mandiri, Berkualitas dan Berbudaya.',
            'misi'         => 'Misi
            1.	Meningkatkan tata kelolah pemerintahan desa
            Ngapa’ea yang Bersih, Transparan, Akuntabel dan Partisipatif.
            2.	Meningkatkan perekonomian masyarakat melalui pengembangan sumber daya lokal 
            3.	Meningkatkan sumber daya manusia yang berkualitas dan Berbudaya.
            4.	Mewujudkan ketersediaan sarana dan prasarana yang memadai berdasarkan kebutuhan masyarakat.',
        ]);
    }
}
