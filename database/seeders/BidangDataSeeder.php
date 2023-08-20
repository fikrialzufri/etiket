<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bidang;

class BidangDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Bidang::truncate();
        // list Bidang
        $listBidang = [


            [
                "kode" => "BDG1",
                "nama" => "KPU PROVINSI RIAU"
            ],
            [
                "kode" => "BDG2",
                "nama" => "KPU KABUPATEN KUANTAN SINGINGI",
                "parent_id" => "BDG1",
            ],
            [
                "kode" => "BDG3",
                "nama" => "KPU KABUPATEN INDRAGIRI HULU",

            ],
            [
                "kode" => "BDG4",
                "nama" => "KPU KABUPATEN INDRAGIRI HILIR",

            ],
            [
                "kode" => "BDG5",
                "nama" => "KPU KABUPATEN PELALAWAN",

            ],
            [
                "kode" => "BDG6",
                "nama" => "KPU KABUPATEN SIAK"
            ],
            [
                "kode" => "BDG7",
                "nama" => "KPU KABUPATEN KAMPAR"
            ],
            [
                "kode" => "BDG8",
                "nama" => "KPU KABUPATEN ROKAN HULU"
            ],
            [
                "kode" => "BDG9",
                "nama" => "KPU KABUPATEN BENGKALIS"
            ],
            [
                "kode" => "BDG10",
                "nama" => "KPU KABUPATEN ROKAN HILIR"
            ],
            [
                "kode" => "BDG11",
                "nama" => "KPU KOTA PEKANBARU"
            ],
            [
                "kode" => "BDG12",
                "nama" => "KPU KOTA DUMAI"
            ],
            [
                "kode" => "BDG13",
                "nama" => "KPU KAB. KEPULAUAN MERANTI"
            ],
            [
                "kode" => "BDG14",
                "nama" => "KPU PROVINSI SUMATERA SELATAN"
            ],
            [
                "kode" => "BDG15",
                "nama" => "KPU KABUPATEN BANYUASIN"
            ],
            [
                "kode" => "BDG16",
                "nama" => "KPU KABUPATEN MUSI BANYU ASIN"
            ],
            [
                "kode" => "BDG17",
                "nama" => "KPU KABUPATEN MUSI RAWAS"
            ],
            [
                "kode" => "BDG18",
                "nama" => "KPU KABUPATEN LAHAT"
            ],
            [
                "kode" => "BDG19",
                "nama" => "KPU KABUPATEN MUARA ENIM"
            ],
            [
                "kode" => "BDG20",
                "nama" => "KPU KABUPATEN OGAN KOMERING ILIR"
            ],
            [
                "kode" => "BDG21",
                "nama" => "KPU KABUPATEN OGAN ILIR"
            ],
            [
                "kode" => "BDG22",
                "nama" => "KPU KABUPATEN OGAN KOMERING ULU"
            ],
            [
                "kode" => "BDG23",
                "nama" => "KPU KABUPATEN OGAN KOMERING ULU TIMUR"
            ],
            [
                "kode" => "BDG24",
                "nama" => "KPU KABUPATEN OGAN KOMERING ULU SELATAN"
            ],
            [
                "kode" => "BDG25",
                "nama" => "KPU KOTA PALEMBANG"
            ],
            [
                "kode" => "BDG26",
                "nama" => "KPU KOTA PAGAR ALAM"
            ],
            [
                "kode" => "BDG27",
                "nama" => "KPU KOTA LUBUK LINGGAU"
            ],
            [
                "kode" => "BDG28",
                "nama" => "KPU KOTA PRABUMULIH"
            ],
            [
                "kode" => "BDG29",
                "nama" => "KPU KAB EMPAT LAWANG"
            ],
            [
                "kode" => "BDG30",
                "nama" => "KPU KABUPATEN PENUKAL ABAB LEMATANG ILIR"
            ],
            [
                "kode" => "BDG31",
                "nama" => "KPU KABUPATEN MUSI RAWAS UTARA"
            ],
            [
                "kode" => "BDG32",
                "nama" => "KPU PROVINSI LAMPUNG"
            ],
            [
                "kode" => "BDG33",
                "nama" => "KPU KABUPATEN LAMPUNG TENGAH"
            ],
            [
                "kode" => "BDG34",
                "nama" => "KPU KABUPATEN LAMPUNG UTARA"
            ],
            [
                "kode" => "BDG35",
                "nama" => "KPU KABUPATEN LAMPUNG BARAT"
            ],
            [
                "kode" => "BDG36",
                "nama" => "KPU KABUPATEN TULANG BAWANG"
            ],
            [
                "kode" => "BDG37",
                "nama" => "KPU KABUPATEN TANGGAMUS"
            ],
            [
                "kode" => "BDG38",
                "nama" => "KPU KABUPATEN LAMPUNG TIMUR"
            ],
            [
                "kode" => "BDG39",
                "nama" => "KPU KABUPATEN WAY KANAN"
            ],
            [
                "kode" => "BDG40",
                "nama" => "KPU KABUPATEN LAMPUNG SELATAN"
            ],
            [
                "kode" => "BDG41",
                "nama" => "KPU KOTA METRO"
            ],
            [
                "kode" => "BDG42",
                "nama" => "KPU KOTA BANDAR LAMPUNG"
            ],
            [
                "kode" => "BDG43",
                "nama" => "KPU KAB. PESAWARAN"
            ],
            [
                "kode" => "BDG44",
                "nama" => "KPU KABUPATEN TULANGBAWANG BARAT"
            ],
            [
                "kode" => "BDG45",
                "nama" => "KPU KABUPATEN PRING SEWU"
            ],
            [
                "kode" => "BDG46",
                "nama" => "KPU KABUPATEN MESUJI"
            ],
            [
                "kode" => "BDG47",
                "nama" => "KPU KABUPATEN PESISIR BARAT"
            ],
            [
                "kode" => "BDG48",
                "nama" => "KPU PROVINSI JAWA TENGAH"
            ],
            [
                "kode" => "BDG49",
                "nama" => "KPU KABUPATEN SEMARANG"
            ],
            [
                "kode" => "BDG50",
                "nama" => "KPU KABUPATEN KENDAL"
            ],
            [
                "kode" => "BDG51",
                "nama" => "KPU KABUPATEN DEMAK"
            ],
            [
                "kode" => "BDG52",
                "nama" => "KPU KABUPATEN GROBOGAN"
            ],
            [
                "kode" => "BDG53",
                "nama" => "KPU KABUPATEN PEKALONGAN"
            ],
            [
                "kode" => "BDG54",
                "nama" => "KPU KABUPATEN BATANG"
            ],
            [
                "kode" => "BDG55",
                "nama" => "KPU KABUPATEN TEGAL"
            ],
            [
                "kode" => "BDG56",
                "nama" => "KPU KABUPATEN BREBES"
            ],
            [
                "kode" => "BDG57",
                "nama" => "KPU KABUPATEN PATI"
            ],
            [
                "kode" => "BDG58",
                "nama" => "KPU KABUPATEN KUDUS"
            ],
            [
                "kode" => "BDG59",
                "nama" => "KPU KABUPATEN PEMALANG"
            ],
            [
                "kode" => "BDG60",
                "nama" => "KPU KABUPATEN JEPARA"
            ],
            [
                "kode" => "BDG61",
                "nama" => "KPU KABUPATEN REMBANG"
            ],
            [
                "kode" => "BDG62",
                "nama" => "KPU KABUPATEN BLORA"
            ],
            [
                "kode" => "BDG63",
                "nama" => "KPU KABUPATEN BANYUMAS"
            ],
            [
                "kode" => "BDG64",
                "nama" => "KPU KABUPATEN CILACAP"
            ],
            [
                "kode" => "BDG65",
                "nama" => "KPU KABUPATEN PURBALINGGA"
            ],
            [
                "kode" => "BDG66",
                "nama" => "KPU KABUPATEN BANJARNEGARA"
            ],
            [
                "kode" => "BDG67",
                "nama" => "KPU KABUPATEN MAGELANG"
            ],
            [
                "kode" => "BDG68",
                "nama" => "KPU KABUPATEN TEMANGGUNG"
            ],
            [
                "kode" => "BDG69",
                "nama" => "KPU KABUPATEN WONOSOBO"
            ],
            [
                "kode" => "BDG70",
                "nama" => "KPU KABUPATEN PURWOREJO"
            ],
            [
                "kode" => "BDG71",
                "nama" => "KPU KABUPATEN KEBUMEN"
            ],
            [
                "kode" => "BDG72",
                "nama" => "KPU KABUPATEN KLATEN"
            ],
            [
                "kode" => "BDG73",
                "nama" => "KPU KABUPATEN BOYOLALI"
            ],
            [
                "kode" => "BDG74",
                "nama" => "KPU KABUPATEN SRAGEN"
            ],
            [
                "kode" => "BDG75",
                "nama" => "KPU KABUPATEN SUKOHARJO"
            ],
            [
                "kode" => "BDG76",
                "nama" => "KPU KABUPATEN KARANGANYAR"
            ],
            [
                "kode" => "BDG77",
                "nama" => "KPU KABUPATEN WONOGIRI"
            ],
            [
                "kode" => "BDG78",
                "nama" => "KPU KOTA SEMARANG"
            ],
            [
                "kode" => "BDG79",
                "nama" => "KPU KOTA SALATIGA"
            ],
            [
                "kode" => "BDG80",
                "nama" => "KPU KOTA PEKALONGAN"
            ],
            [
                "kode" => "BDG81",
                "nama" => "KPU KOTA TEGAL"
            ],
            [
                "kode" => "BDG82",
                "nama" => "KPU KOTA MAGELANG"
            ],
            [
                "kode" => "BDG83",
                "nama" => "KPU KOTA SURAKARTA"
            ],
            [
                "kode" => "BDG84",
                "nama" => "KPU PROVINSI NUSA TENGGARA BARAT"
            ],
            [
                "kode" => "BDG85",
                "nama" => "KPU KABUPATEN LOMBOK BARAT"
            ],
            [
                "kode" => "BDG86",
                "nama" => "KPU KABUPATEN LOMBOK TENGAH"
            ],
            [
                "kode" => "BDG87",
                "nama" => "KPU KABUPATEN LOMBOK TIMUR"
            ],
            [
                "kode" => "BDG88",
                "nama" => "KPU KABUPATEN BIMA"
            ],
            [
                "kode" => "BDG89",
                "nama" => "KPU KABUPATEN SUMBAWA"
            ],
            [
                "kode" => "BDG90",
                "nama" => "KPU KABUPATEN DOMPU"
            ],
            [
                "kode" => "BDG91",
                "nama" => "KPU KABUPATEN SUMBAWA BARAT"
            ],
            [
                "kode" => "BDG92",
                "nama" => "KPU KOTA MATARAM"
            ],
            [
                "kode" => "BDG93",
                "nama" => "KPU KOTA BIMA"
            ],
            [
                "kode" => "BDG94",
                "nama" => "KPU KAB. LOMBOK UTARA"
            ],
            [
                "kode" => "BDG95",
                "nama" => "KPU PROVINSI KALIMANTAN TIMUR"
            ],
            [
                "kode" => "BDG96",
                "nama" => "KPU KABUPATEN PENAJAM PASER UTARA"
            ],
            [
                "kode" => "BDG97",
                "nama" => "KPU KABUPATEN KUTAI TIMUR"
            ],
            [
                "kode" => "BDG98",
                "nama" => "KPU KABUPATEN KUTAI BARAT"
            ],
            [
                "kode" => "BDG99",
                "nama" => "KPU KABUPATEN BERAU"
            ],
            [
                "kode" => "BDG100",
                "nama" => "KPU KABUPATEN KUTAI KERTANEGARA"
            ],
            [
                "kode" => "BDG101",
                "nama" => "KPU KABUPATEN PASIR"
            ],
            [
                "kode" => "BDG102",
                "nama" => "KPU KOTA BONTANG"
            ],
            [
                "kode" => "BDG103",
                "nama" => "KPU KOTA SAMARINDA"
            ],
            [
                "kode" => "BDG104",
                "nama" => "KPU KOTA BALIKPAPAN"
            ],
            [
                "kode" => "BDG105",
                "nama" => "KPU KABUPATEN MAHAKAM ULU"
            ],
            [
                "kode" => "BDG106",
                "nama" => "KPU PROVINSI KALIMANTAN UTARA"
            ],
            [
                "kode" => "BDG107",
                "nama" => "KPU KABUPATEN MALINAU"
            ],
            [
                "kode" => "BDG108",
                "nama" => "KPU KABUPATEN NUNUKAN"
            ],
            [
                "kode" => "BDG109",
                "nama" => "KPU KABUPATEN BULUNGAN"
            ],
            [
                "kode" => "BDG110",
                "nama" => "KPU KOTA TARAKAN"
            ],
            [
                "kode" => "BDG111",
                "nama" => "KPU KAB. TANA TINDUNG"
            ],
            [
                "kode" => "BDG112",
                "nama" => "KPU PROVINSI MALUKU"
            ],
            [
                "kode" => "BDG113",
                "nama" => "KPU KABUPATEN MALUKU TENGAH"
            ],
            [
                "kode" => "BDG114",
                "nama" => "KPU KABUPATEN SERAM BAGIAN BARAT"
            ],
            [
                "kode" => "BDG115",
                "nama" => "KPU KABUPATEN SERAM BAGIAN TIMUR"
            ],
            [
                "kode" => "BDG116",
                "nama" => "KPU KABUPATEN MALUKU TENGGARA"
            ],
            [
                "kode" => "BDG117",
                "nama" => "KPU KABUPATEN KEPULAUAN ARU"
            ],
            [
                "kode" => "BDG118",
                "nama" => "KPU KABUPATEN MALUKU TENGGARA BARAT"
            ],
            [
                "kode" => "BDG119",
                "nama" => "KPU KABUPATEN BURU"
            ],
            [
                "kode" => "BDG120",
                "nama" => "KPU KOTA AMBON"
            ],
            [
                "kode" => "BDG121",
                "nama" => "KPU KOTA TUAL"
            ],
            [
                "kode" => "BDG122",
                "nama" => "KPU KAB. BURU SELATAN"
            ],
            [
                "kode" => "BDG123",
                "nama" => "KPU KAB. MALUKU BARAT DAYA"
            ],
            [
                "kode" => "BDG124",
                "nama" => "KPU PROVINSI MALUKU UTARA"
            ],
            [
                "kode" => "BDG125",
                "nama" => "KPU KABUPATEN HALMAHERA BARAT"
            ],
            [
                "kode" => "BDG126",
                "nama" => "KPU KABUPATEN HALMAHERA TENGAH"
            ],
            [
                "kode" => "BDG127",
                "nama" => "KPU KABUPATEN HALMAHERA UTARA"
            ],
            [
                "kode" => "BDG128",
                "nama" => "KPU KABUPATEN HALMAHERA SELATAN"
            ],
            [
                "kode" => "BDG129",
                "nama" => "KPU KABUPATEN HALMAHERA TIMUR"
            ],
            [
                "kode" => "BDG130",
                "nama" => "KPU KABUPATEN KEPULAUAN SULA"
            ],
            [
                "kode" => "BDG131",
                "nama" => "KPU KOTA TERNATE"
            ],
            [
                "kode" => "BDG132",
                "nama" => "KPU KOTA TIDORE KEPULAUAN"
            ],
            [
                "kode" => "BDG133",
                "nama" => "KPU KABUPATEN KEPULAUAN MOROTAI"
            ],
            [
                "kode" => "BDG134",
                "nama" => "KPU KABUPATEN PULAU TALIABU"
            ],
            [
                "kode" => "BDG135",
                "nama" => "KPU PROVINSI BALI"
            ],
            [
                "kode" => "BDG136",
                "nama" => "KPU KABUPATEN BULELENG"
            ],
            [
                "kode" => "BDG137",
                "nama" => "KPU KABUPATEN JEMBRANA"
            ],
            [
                "kode" => "BDG138",
                "nama" => "KPU KABUPATEN KLUNGKUNG"
            ],
            [
                "kode" => "BDG139",
                "nama" => "KPU KABUPATEN GIANYAR"
            ],
            [
                "kode" => "BDG140",
                "nama" => "KPU KABUPATEN KARANGASEM"
            ],
            [
                "kode" => "BDG141",
                "nama" => "KPU KABUPATEN BANGLI"
            ],
            [
                "kode" => "BDG142",
                "nama" => "KPU KABUPATEN BADUNG"
            ],
            [
                "kode" => "BDG143",
                "nama" => "KPU KABUPATEN TABANAN"
            ],
            [
                "kode" => "BDG144",
                "nama" => "KPU KOTA DENPASAR"
            ],
            [
                "kode" => "BDG145",
                "nama" => "KPU PROVINSI SULAWESI UTARA"
            ],
            [
                "kode" => "BDG146",
                "nama" => "KPU KABUPATEN BOLAANG MONGONDOW"
            ],
            [
                "kode" => "BDG147",
                "nama" => "KPU KABUPATEN MINAHASA"
            ],
            [
                "kode" => "BDG148",
                "nama" => "KPU KABUPATEN KEPULAUAN SANGIHE"
            ],
            [
                "kode" => "BDG149",
                "nama" => "KPU KABUPATEN KEPULAUAN TALAUD"
            ],
            [
                "kode" => "BDG150",
                "nama" => "KPU KABUPATEN MINAHASA SELATAN"
            ],
            [
                "kode" => "BDG151",
                "nama" => "KPU KABUPATEN MINAHASA UTARA"
            ],
            [
                "kode" => "BDG152",
                "nama" => "KPU KOTA MANADO"
            ],
            [
                "kode" => "BDG153",
                "nama" => "KPU KOTA BITUNG"
            ],
            [
                "kode" => "BDG154",
                "nama" => "KPU KOTA TOMOHON"
            ],
            [
                "kode" => "BDG155",
                "nama" => "KPU KOTA KOTAMOBAGO"
            ],
            [
                "kode" => "BDG156",
                "nama" => "KPU KAB. MINAHASA TENGGARA"
            ],
            [
                "kode" => "BDG157",
                "nama" => "KPU KAB. BOLAANG MONGONDOW UTARA"
            ],
            [
                "kode" => "BDG158",
                "nama" => "KPU KAB. KEP. SIAU TAGULANDANG BIARO"
            ],
            [
                "kode" => "BDG159",
                "nama" => "KPU KAB. BOLAANG MONGONDOW SELATAN"
            ],
            [
                "kode" => "BDG160",
                "nama" => "KPU KAB. BOLAANG MONGONDOW TIMUR"
            ],
            [
                "kode" => "BDG161",
                "nama" => "KIP ACEH"
            ],
            [
                "kode" => "BDG162",
                "nama" => "KPU KABUPATEN ACEH SELATAN"
            ],
            [
                "kode" => "BDG163",
                "nama" => "KPU KABUPATEN ACEH TENGGARA"
            ],
            [
                "kode" => "BDG164",
                "nama" => "KPU KABUPATEN ACEH TIMUR"
            ],
            [
                "kode" => "BDG165",
                "nama" => "KPU KABUPATEN ACEH TENGAH"
            ],
            [
                "kode" => "BDG166",
                "nama" => "KPU KABUPATEN BENER MERIAH"
            ],
            [
                "kode" => "BDG167",
                "nama" => "KPU KABUPATEN ACEH BARAT"
            ],
            [
                "kode" => "BDG168",
                "nama" => "KPU KABUPATEN ACEH BESAR"
            ],
            [
                "kode" => "BDG169",
                "nama" => "KPU KABUPATEN ACEH UTARA"
            ],
            [
                "kode" => "BDG170",
                "nama" => "KPU KABUPATEN ACEH BARAT DAYA"
            ],
            [
                "kode" => "BDG171",
                "nama" => "KPU KABUPATEN PIDIE"
            ],
            [
                "kode" => "BDG172",
                "nama" => "KPU KABUPATEN SIMEULEU"
            ],
            [
                "kode" => "BDG173",
                "nama" => "KPU KABUPATEN ACEH SINGKIL"
            ],
            [
                "kode" => "BDG174",
                "nama" => "KPU KABUPATEN BIREUN"
            ],
            [
                "kode" => "BDG175",
                "nama" => "KPU KABUPATEN ACEH GAYO LUES"
            ],
            [
                "kode" => "BDG176",
                "nama" => "KPU KABUPATEN ACEH TAMIANG"
            ],
            [
                "kode" => "BDG177",
                "nama" => "KPU KABUPATEN ACEH JAYA"
            ],
            [
                "kode" => "BDG178",
                "nama" => "KPU KABUPATEN NAGAN RAYA"
            ],
            [
                "kode" => "BDG179",
                "nama" => "KPU KOTA BANDA ACEH"
            ],
            [
                "kode" => "BDG180",
                "nama" => "KPU KOTA SABANG"
            ],
            [
                "kode" => "BDG181",
                "nama" => "KPU KOTA LHOKSUMAWE"
            ],
            [
                "kode" => "BDG182",
                "nama" => "KPU KOTA LANGSA"
            ],
            [
                "kode" => "BDG183",
                "nama" => "KPU KAB. PIDIE JAYA"
            ],
            [
                "kode" => "BDG184",
                "nama" => "KPU KOTA SUBULUSSALAM"
            ],
            [
                "kode" => "BDG185",
                "nama" => "KPU DI YOGYAKARTA"
            ],
            [
                "kode" => "BDG186",
                "nama" => "KPU KABUPATEN KULONPROGO"
            ],
            [
                "kode" => "BDG187",
                "nama" => "KPU KABUPATEN BANTUL"
            ],
            [
                "kode" => "BDG188",
                "nama" => "KPU KABUPATEN GUNUNGKIDUL"
            ],
            [
                "kode" => "BDG189",
                "nama" => "KPU KABUPATEN SLEMAN"
            ],
            [
                "kode" => "BDG190",
                "nama" => "KPU KOTA YOGYAKARTA"
            ]


        ];

        foreach ($listBidang as $key => $value) {

            // $checkStrimg = strpos("Provinsi", $value['nama']);
            $jumlah_min = 3;
            $jumlah_max = 2;
            $nama = $value['nama'];

            $kode = $value['kode'];
            if (strpos(strtolower($value['nama']), "provinsi") !== false) {

                $jumlah_min = 2;
                $jumlah_max = 3;

            }


            $Bidang[$key] = Bidang::whereKode($kode)->first();

            if (!$Bidang[$key]) {
                $Bidang[$key] = new Bidang();
            }
            $Bidang[$key]->kode = $kode;
            $Bidang[$key]->nama = $nama;
            $Bidang[$key]->jumlah_max = $jumlah_max;
            $Bidang[$key]->jumlah_min = $jumlah_min;
            $Bidang[$key]->status = 1;
            $Bidang[$key]->save();
        }

    }
}
