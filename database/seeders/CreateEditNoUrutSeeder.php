<?php

namespace Database\Seeders;

use App\Models\Bidang;
use Illuminate\Database\Seeder;

class CreateEditNoUrutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataBidang =Bidang::with('hasEntrance')->get()->sortBy(function($value){
                 return (int) str_replace("BDG","",$value->kode);;
        });
        $no_urut = 1;

        foreach ($dataBidang as $key => $value) {
            $bidang = Bidang::find($value->id);
            $bidang->no_urut = $no_urut ++;
            $bidang->save();
        }
    }
}
