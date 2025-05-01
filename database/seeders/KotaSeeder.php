<?php

namespace Database\Seeders;

use App\Models\Kota;
use Illuminate\Database\Seeder;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listKota = [
            ['nama' => 'Samarinda'],
        ];

        foreach ($listKota as $Kota) {
            Kota::updateOrCreate([
                'nama' => $Kota['nama'],
            ], [
                'diskripsi' => $Kota['diskripsi'] ?? null,
            ]);
        }
    }
}
