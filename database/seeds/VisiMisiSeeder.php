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
            'visi' => '<div style="text-align: center;"><span style="font-size: 1rem;"><b>Visi</b></span></div>Terwujudnya Tata Kelola Pemerintahan  Desa Ngapa’ea yang Baik Menuju Desa yang Maju, Mandiri, Berkualitas dan Berbudaya.',

            'misi' => '<p style="text-align: center;"><b>Misi</b></p>
            <p>1. Meningkatkan tata kelola pemerintahan desa Ngapa’ea yang Bersih, Transparan, Akuntabel, dan Partisipatif.</p>
            <p>2. Meningkatkan perekonomian masyarakat melalui pengembangan sumber daya lokal.</p>
            <p>3. Meningkatkan sumber daya manusia yang berkualitas dan Berbudaya.</p>
            <p>4. Mewujudkan ketersediaan sarana dan prasarana yang memadai berdasarkan kebutuhan masyarakat.</p>'

        ]);
    }
}
