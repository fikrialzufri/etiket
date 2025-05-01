<?php

namespace Database\Seeders;

use App\Models\Paslon;
use App\Models\Peserta;
use Illuminate\Database\Seeder;

class PesertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listPaslon = [
            ['nama' => 'Paslon 01'],
            ['nama' => 'Paslon 02'],
            ['nama' => 'Paslon 03'],
        ];

        foreach ($listPaslon as $paslon) {
            $dataPaslon = Paslon::updateOrCreate([
                'nama' => $paslon['nama'],
            ], [
                'diskripsi' => $paslon['diskripsi'] ?? null,
            ]);
            if ($dataPaslon) {
                for ($i = 0; $i < 50; $i++) {
                    $kodePaslon = $dataPaslon->kode;
                    $no = str_pad($i + 1, 4, "0", STR_PAD_LEFT);
                    $kode = "PSRT/"  . $kodePaslon . "/" . $no;

                    Peserta::updateOrCreate([
                        'paslon_id' => $dataPaslon->id,
                        'kode' => $kode
                    ], [
                        'catatan' => $paslon['catatan'] ?? null,
                    ]);
                }
            }
        }

        $listCrew = [
            ['nama' => 'Crew 01'],
        ];

        foreach ($listCrew as $crew) {
            // count crew
            $countCrew = Peserta::where('crew', true)->count();
            $no = str_pad($countCrew + 1, 4, "0", STR_PAD_LEFT);
            $kode = "CREW/" . $no;
            Peserta::updateOrCreate([
                'kode' => $kode,
                'nama' => $crew['nama'],
            ], [
                'crew' => true,
            ]);
        }
    }
}
