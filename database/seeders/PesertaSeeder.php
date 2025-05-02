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
            ['nama' => 'Crew 01', 'kode' => 'CREW/0001'],
        ];

        foreach ($listCrew as $crew) {
            // count crew
            $countCrew = Peserta::where('kode', 'like', 'CREW/%')->count();
            $no = str_pad($countCrew + 1, 4, "0", STR_PAD_LEFT);
            $kode = "CREW/" . $no;

            // if peserta sudah ada, maka skip
            if (Peserta::where('kode', $crew['kode'])->exists()) {
                $this->command->info($crew['nama'] . " - " . $crew['kode'] . " sudah ada");
                continue;
            }

            $peserta = Peserta::updateOrCreate([
                'kode' => $kode,
                'nama' => $crew['nama'],
            ], [
                'crew' => true,
            ]);

            // info peserta
            $this->command->info($peserta->nama . " - " . $peserta->kode);
        }

        $listVip = [
            ['nama' => 'VVIP', 'kode' => 'VVIP'],
            ['nama' => 'KPU', 'kode' => 'KPU'],
        ];

        foreach ($listVip as $vip) {
            $countVip = Peserta::where('kode', 'like', $vip['kode'] . '/%')->count();
            $no = str_pad($countVip + 1, 4, "0", STR_PAD_LEFT);
            $kode = 'PSRT/' . $vip['kode'] . "/" . $no;

            // if peserta sudah ada, maka skip
            if (Peserta::where('kode', $kode)->exists()) {
                $this->command->info($vip['nama'] . " - " . $kode . " sudah ada");
                continue;
            }

            $peserta = Peserta::updateOrCreate([
                'kode' => $kode,
                'nama' => $vip['nama'],
            ], [
                'crew' => true,
            ]);

            // info peserta
            $this->command->info($peserta->nama . " - " . $peserta->kode);
        }
    }
}
