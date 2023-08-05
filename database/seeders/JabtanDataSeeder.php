<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use Illuminate\Database\Seeder;

class JabtanDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listJabatan = [
            [
                'nama' => 'Divisi Hukum',
                'jumlah_max' => 3,
                'jumlah_min' => 3,
            ],
            [
                'nama' => 'Kabag Hukum dan SDM',
                'jumlah_max' => 3,
                'jumlah_min' => 2,
            ],
            [
                'nama' => 'Kasubag Hukum dan SDM',
                'jumlah_max' => 3,
                'jumlah_min' => 3,
            ],
        ];
        foreach ($listJabatan as $key => $value) {
            $nama = $value['nama'];

            $jabatan[$key] = Jabatan::whereNama($nama)->first();

            if (!$jabatan[$key]) {
                $jabatan[$key] = new Jabatan();
            }
            $jabatan[$key]->nama = $nama;
            $jabatan[$key]->jumlah_max = $value['jumlah_max'];
            $jabatan[$key]->jumlah_min = $value['jumlah_min'];
            $jabatan[$key]->save();
        }
    }
}