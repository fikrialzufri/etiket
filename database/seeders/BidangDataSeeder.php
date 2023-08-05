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
                "kode" => 654382,
                "nama" => "KPU PROVINSI DKI JAKARTA"
            ],
            [
                "kode" => 656947,
                "nama" => "KPU KOTA JAKARTA SELATAN"
            ],
            [
                "kode" => 656951,
                "nama" => "KPU KOTA JAKARTA TIMUR"
            ],
            [
                "kode" => 656968,
                "nama" => "KPU KOTA JAKARTA PUSAT"
            ],
            [
                "kode" => 656972,
                "nama" => "KPU KOTA JAKARTA BARAT"
            ],
            [
                "kode" => 656989,
                "nama" => "KPU KOTA JAKARTA UTARA"
            ],
            [
                "kode" => 656993,
                "nama" => "KPU KEPULAUAN SERIBU"
            ],
            [
                "kode" => 654399,
                "nama" => "KPU PROVINSI JAWA BARAT"
            ],
            [
                "kode" => 657008,
                "nama" => "KPU KABUPATEN BOGOR"
            ],
            [
                "kode" => 657012,
                "nama" => "KPU KABUPATEN SUKABUMI"
            ],
            [
                "kode" => 657029,
                "nama" => "KPU KABUPATEN CIANJUR"
            ],
            [
                "kode" => 657033,
                "nama" => "KPU KABUPATEN BEKASI"
            ],
            [
                "kode" => 657040,
                "nama" => "KPU KABUPATEN KARAWANG"
            ],
            [
                "kode" => 657054,
                "nama" => "KPU KABUPATEN PURWAKARTA"
            ],
            [
                "kode" => 657061,
                "nama" => "KPU KABUPATEN SUBANG"
            ],
            [
                "kode" => 657075,
                "nama" => "KPU KABUPATEN BANDUNG"
            ],
            [
                "kode" => 657082,
                "nama" => "KPU KABUPATEN SUMEDANG"
            ],
            [
                "kode" => 657096,
                "nama" => "KPU KABUPATEN GARUT"
            ],
            [
                "kode" => 657101,
                "nama" => "KPU KABUPATEN TASIKMALAYA"
            ],
            [
                "kode" => 657118,
                "nama" => "KPU KABUPATEN CIAMIS"
            ],
            [
                "kode" => 657122,
                "nama" => "KPU KABUPATEN CIREBON"
            ],
            [
                "kode" => 657139,
                "nama" => "KPU KABUPATEN KUNINGAN"
            ],
            [
                "kode" => 657143,
                "nama" => "KPU KABUPATEN INDRAMAYU"
            ],
            [
                "kode" => 657150,
                "nama" => "KPU KABUPATEN MAJALENGKA"
            ],
            [
                "kode" => 657164,
                "nama" => "KPU KOTA BANDUNG"
            ],
            [
                "kode" => 657171,
                "nama" => "KPU KOTA BOGOR"
            ],
            [
                "kode" => 657185,
                "nama" => "KPU KOTA SUKABUMI"
            ],
            [
                "kode" => 657192,
                "nama" => "KPU KOTA CIREBON"
            ],
            [
                "kode" => 657207,
                "nama" => "KPU KOTA BEKASI"
            ],
            [
                "kode" => 657211,
                "nama" => "KPU KOTA DEPOK"
            ],
            [
                "kode" => 657228,
                "nama" => "KPU KOTA TASIKMALAYA"
            ],
            [
                "kode" => 657232,
                "nama" => "KPU KOTA CIMAHI"
            ],
            [
                "kode" => 657249,
                "nama" => "KPU KOTA BANJAR"
            ],
            [
                "kode" => 670379,
                "nama" => "KPU KAB. BANDUNG BARAT"
            ],
            [
                "kode" => "022207",
                "nama" => "KPU KABUPATEN PANGANDARAN"
            ],
            [
                "kode" => 654404,
                "nama" => "KPU PROVINSI JAWA TENGAH"
            ],
            [
                "kode" => 657253,
                "nama" => "KPU KABUPATEN SEMARANG"
            ],
            [
                "kode" => 657260,
                "nama" => "KPU KABUPATEN KENDAL"
            ],
            [
                "kode" => 657274,
                "nama" => "KPU KABUPATEN DEMAK"
            ],
            [
                "kode" => 657281,
                "nama" => "KPU KABUPATEN GROBOGAN"
            ],
            [
                "kode" => 657295,
                "nama" => "KPU KABUPATEN PEKALONGAN"
            ],
            [
                "kode" => 657300,
                "nama" => "KPU KABUPATEN BATANG"
            ],
            [
                "kode" => 657317,
                "nama" => "KPU KABUPATEN TEGAL"
            ],
            [
                "kode" => 657321,
                "nama" => "KPU KABUPATEN BREBES"
            ],
            [
                "kode" => 657338,
                "nama" => "KPU KABUPATEN PATI"
            ],
            [
                "kode" => 657342,
                "nama" => "KPU KABUPATEN KUDUS"
            ],
            [
                "kode" => 657359,
                "nama" => "KPU KABUPATEN PEMALANG"
            ],
            [
                "kode" => 657363,
                "nama" => "KPU KABUPATEN JEPARA"
            ],
            [
                "kode" => 657370,
                "nama" => "KPU KABUPATEN REMBANG"
            ],
            [
                "kode" => 657384,
                "nama" => "KPU KABUPATEN BLORA"
            ],
            [
                "kode" => 657391,
                "nama" => "KPU KABUPATEN BANYUMAS"
            ],
            [
                "kode" => 657406,
                "nama" => "KPU KABUPATEN CILACAP"
            ],
            [
                "kode" => 657410,
                "nama" => "KPU KABUPATEN PURBALINGGA"
            ],
            [
                "kode" => 657427,
                "nama" => "KPU KABUPATEN BANJARNEGARA"
            ],
            [
                "kode" => 657431,
                "nama" => "KPU KABUPATEN MAGELANG"
            ],
            [
                "kode" => 657448,
                "nama" => "KPU KABUPATEN TEMANGGUNG"
            ],
            [
                "kode" => 657452,
                "nama" => "KPU KABUPATEN WONOSOBO"
            ],
            [
                "kode" => 657469,
                "nama" => "KPU KABUPATEN PURWOREJO"
            ],
            [
                "kode" => 657473,
                "nama" => "KPU KABUPATEN KEBUMEN"
            ],
            [
                "kode" => 657480,
                "nama" => "KPU KABUPATEN KLATEN"
            ],
            [
                "kode" => 657494,
                "nama" => "KPU KABUPATEN BOYOLALI"
            ],
            [
                "kode" => 657502,
                "nama" => "KPU KABUPATEN SRAGEN"
            ],
            [
                "kode" => 657516,
                "nama" => "KPU KABUPATEN SUKOHARJO"
            ],
            [
                "kode" => 657520,
                "nama" => "KPU KABUPATEN KARANGANYAR"
            ],
            [
                "kode" => 657537,
                "nama" => "KPU KABUPATEN WONOGIRI"
            ],
            [
                "kode" => 657541,
                "nama" => "KPU KOTA SEMARANG"
            ],
            [
                "kode" => 657558,
                "nama" => "KPU KOTA SALATIGA"
            ],
            [
                "kode" => 657562,
                "nama" => "KPU KOTA PEKALONGAN"
            ],
            [
                "kode" => 657579,
                "nama" => "KPU KOTA TEGAL"
            ],
            [
                "kode" => 657583,
                "nama" => "KPU KOTA MAGELANG"
            ],
            [
                "kode" => 657590,
                "nama" => "KPU KOTA SURAKARTA"
            ],
            [
                "kode" => 654411,
                "nama" => "KPU DI YOGYAKARTA"
            ],
            [
                "kode" => 657605,
                "nama" => "KPU KABUPATEN KULONPROGO"
            ],
            [
                "kode" => 657612,
                "nama" => "KPU KABUPATEN BANTUL"
            ],
            [
                "kode" => 657626,
                "nama" => "KPU KABUPATEN GUNUNGKIDUL"
            ],
            [
                "kode" => 657630,
                "nama" => "KPU KABUPATEN SLEMAN"
            ],
            [
                "kode" => 657647,
                "nama" => "KPU KOTA YOGYAKARTA"
            ],
            [
                "kode" => 654425,
                "nama" => "KPU PROVINSI JAWA TIMUR"
            ],
            [
                "kode" => 657651,
                "nama" => "KPU KABUPATEN BANGKALAN"
            ],
            [
                "kode" => 657668,
                "nama" => "KPU KABUPATEN BANYUWANGI"
            ],
            [
                "kode" => 657672,
                "nama" => "KPU KABUPATEN BLITAR"
            ],
            [
                "kode" => 657689,
                "nama" => "KPU KABUPATEN BOJONEGORO"
            ],
            [
                "kode" => 657693,
                "nama" => "KPU KABUPATEN BONDOWOSO"
            ],
            [
                "kode" => 657701,
                "nama" => "KPU KABUPATEN GRESIK"
            ],
            [
                "kode" => 657715,
                "nama" => "KPU KABUPATEN JEMBER"
            ],
            [
                "kode" => 657722,
                "nama" => "KPU KABUPATEN JOMBANG"
            ],
            [
                "kode" => 657736,
                "nama" => "KPU KABUPATEN KEDIRI"
            ],
            [
                "kode" => 657740,
                "nama" => "KPU KABUPATEN LAMONGAN"
            ],
            [
                "kode" => 657757,
                "nama" => "KPU KABUPATEN LUMAJANG"
            ],
            [
                "kode" => 657761,
                "nama" => "KPU KABUPATEN MADIUN"
            ],
            [
                "kode" => 657778,
                "nama" => "KPU KABUPATEN MAGETAN"
            ],
            [
                "kode" => 657782,
                "nama" => "KPU KABUPATEN MALANG"
            ],
            [
                "kode" => 657799,
                "nama" => "KPU KABUPATEN MOJOKERTO"
            ],
            [
                "kode" => 657804,
                "nama" => "KPU KABUPATEN NGANJUK"
            ],
            [
                "kode" => 657811,
                "nama" => "KPU KABUPATEN NGAWI"
            ],
            [
                "kode" => 657825,
                "nama" => "KPU KABUPATEN PACITAN"
            ],
            [
                "kode" => 657832,
                "nama" => "KPU KABUPATEN PAMEKASAN"
            ],
            [
                "kode" => 657846,
                "nama" => "KPU KABUPATEN PASURUAN"
            ],
            [
                "kode" => 657850,
                "nama" => "KPU KABUPATEN PONOROGO"
            ],
            [
                "kode" => 657867,
                "nama" => "KPU KABUPATEN PROBOLINGGO"
            ],
            [
                "kode" => 657871,
                "nama" => "KPU KABUPATEN SAMPANG"
            ],
            [
                "kode" => 657888,
                "nama" => "KPU KABUPATEN SIDOARJO"
            ],
            [
                "kode" => 657892,
                "nama" => "KPU KABUPATEN SITUBONDO"
            ],
            [
                "kode" => 657900,
                "nama" => "KPU KABUPATEN SUMENEP"
            ],
            [
                "kode" => 657914,
                "nama" => "KPU KABUPATEN TRENGGALEK"
            ],
            [
                "kode" => 657921,
                "nama" => "KPU KABUPATEN TUBAN"
            ],
            [
                "kode" => 657935,
                "nama" => "KPU KABUPATEN TULUNGAGUNG"
            ],
            [
                "kode" => 657942,
                "nama" => "KPU KOTA SURABAYA"
            ],
            [
                "kode" => 657956,
                "nama" => "KPU KOTA BATU"
            ],
            [
                "kode" => 657960,
                "nama" => "KPU KOTA BLITAR"
            ],
            [
                "kode" => 657977,
                "nama" => "KPU KOTA KEDIRI"
            ],
            [
                "kode" => 657981,
                "nama" => "KPU KOTA MADIUN"
            ],
            [
                "kode" => 657998,
                "nama" => "KPU KOTA MALANG"
            ],
            [
                "kode" => 658000,
                "nama" => "KPU KOTA MOJOKERTO"
            ],
            [
                "kode" => 658017,
                "nama" => "KPU KOTA PASURUAN"
            ],
            [
                "kode" => 658021,
                "nama" => "KPU KOTA PROBOLINGGO"
            ],
            [
                "kode" => 654289,
                "nama" => "KPU PROVINSI ACEH"
            ],
            [
                "kode" => 655629,
                "nama" => "KPU KABUPATEN ACEH SELATAN"
            ],
            [
                "kode" => 655633,
                "nama" => "KPU KABUPATEN ACEH TENGGARA"
            ],
            [
                "kode" => 655640,
                "nama" => "KPU KABUPATEN ACEH TIMUR"
            ],
            [
                "kode" => 655654,
                "nama" => "KPU KABUPATEN ACEH TENGAH"
            ],
            [
                "kode" => 655661,
                "nama" => "KPU KABUPATEN BENER MERIAH"
            ],
            [
                "kode" => 655675,
                "nama" => "KPU KABUPATEN ACEH BARAT"
            ],
            [
                "kode" => 655682,
                "nama" => "KPU KABUPATEN ACEH BESAR"
            ],
            [
                "kode" => 655696,
                "nama" => "KPU KABUPATEN ACEH UTARA"
            ],
            [
                "kode" => 655701,
                "nama" => "KPU KABUPATEN ACEH BARAT DAYA"
            ],
            [
                "kode" => 655718,
                "nama" => "KPU KABUPATEN PIDIE"
            ],
            [
                "kode" => 655722,
                "nama" => "KPU KABUPATEN SIMEULEU"
            ],
            [
                "kode" => 655739,
                "nama" => "KPU KABUPATEN ACEH SINGKIL"
            ],
            [
                "kode" => 655743,
                "nama" => "KPU KABUPATEN BIREUN"
            ],
            [
                "kode" => 655750,
                "nama" => "KPU KABUPATEN ACEH GAYO LUES"
            ],
            [
                "kode" => 655764,
                "nama" => "KPU KABUPATEN ACEH TAMIANG"
            ],
            [
                "kode" => 655771,
                "nama" => "KPU KABUPATEN ACEH JAYA"
            ],
            [
                "kode" => 655785,
                "nama" => "KPU KABUPATEN NAGAN RAYA"
            ],
            [
                "kode" => 655792,
                "nama" => "KPU KOTA BANDA ACEH"
            ],
            [
                "kode" => 655807,
                "nama" => "KPU KOTA SABANG"
            ],
            [
                "kode" => 655811,
                "nama" => "KPU KOTA LHOKSUMAWE"
            ],
            [
                "kode" => 655828,
                "nama" => "KPU KOTA LANGSA"
            ],
            [
                "kode" => 670341,
                "nama" => "KPU KAB. PIDIE JAYA"
            ],
            [
                "kode" => 670358,
                "nama" => "KPU KOTA SUBULUSSALAM"
            ],
            [
                "kode" => 654293,
                "nama" => "KPU PROVINSI SUMATERA UTARA"
            ],
            [
                "kode" => 655832,
                "nama" => "KPU KABUPATEN TAPANULI TENGAH"
            ],
            [
                "kode" => 655849,
                "nama" => "KPU KABUPATEN TAPANULI UTARA"
            ],
            [
                "kode" => 655853,
                "nama" => "KPU KABUPATEN TAPANULI SELATAN"
            ],
            [
                "kode" => 655860,
                "nama" => "KPU KABUPATEN NIAS"
            ],
            [
                "kode" => 655874,
                "nama" => "KPU KABUPATEN LANGKAT"
            ],
            [
                "kode" => 655881,
                "nama" => "KPU KABUPATEN TANAH KARO"
            ],
            [
                "kode" => 655895,
                "nama" => "KPU KABUPATEN DELI SERDANG"
            ],
            [
                "kode" => 655900,
                "nama" => "KPU KABUPATEN SERDANG BEDAGAI"
            ],
            [
                "kode" => 655917,
                "nama" => "KPU KABUPATEN SIMALUNGUN"
            ],
            [
                "kode" => 655921,
                "nama" => "KPU KABUPATEN ASAHAN"
            ],
            [
                "kode" => 655938,
                "nama" => "KPU KABUPATEN LABUHAN BATU"
            ],
            [
                "kode" => 655942,
                "nama" => "KPU KABUPATEN DAIRI"
            ],
            [
                "kode" => 655959,
                "nama" => "KPU KABUPATEN TOBA SAMOSIR"
            ],
            [
                "kode" => 655963,
                "nama" => "KPU KABUPATEN SAMOSIR"
            ],
            [
                "kode" => 655970,
                "nama" => "KPU KABUPATEN MANDAILING NATAL"
            ],
            [
                "kode" => 655984,
                "nama" => "KPU KABUPATEN NIAS SELATAN"
            ],
            [
                "kode" => 655991,
                "nama" => "KPU KABUPATEN PAKPAK BARAT"
            ],
            [
                "kode" => 656003,
                "nama" => "KPU KABUPATEN HUMBANG HASUNDUTAN"
            ],
            [
                "kode" => 656010,
                "nama" => "KPU KOTA MEDAN"
            ],
            [
                "kode" => 656024,
                "nama" => "KPU KOTA PEMATANG SIANTAR"
            ],
            [
                "kode" => 656031,
                "nama" => "KPU KOTA SIBOLGA"
            ],
            [
                "kode" => 656045,
                "nama" => "KPU KOTA TANJUNG BALAI"
            ],
            [
                "kode" => 656052,
                "nama" => "KPU KOTA BINJAI"
            ],
            [
                "kode" => 656066,
                "nama" => "KPU KOTA TEBING TINGGI"
            ],
            [
                "kode" => 656070,
                "nama" => "KPU KOTA PADANG SIDEMPUAN"
            ],
            [
                "kode" => 670383,
                "nama" => "KPU KAB. BATUBARA"
            ],
            [
                "kode" => 670760,
                "nama" => "KPU KAB. PADANG LAWAS UTARA"
            ],
            [
                "kode" => 670777,
                "nama" => "KPU KAB. PADANG LAWAS"
            ],
            [
                "kode" => 670913,
                "nama" => "KPU KAB. LABUHAN BATU SELATAN"
            ],
            [
                "kode" => 670920,
                "nama" => "KPU KAB. LABUHAN BATU UTARA"
            ],
            [
                "kode" => 680654,
                "nama" => "KPU KABUPATEN NIAS UTARA"
            ],
            [
                "kode" => 680661,
                "nama" => "KPU KABUPATEN NIAS BARAT"
            ],
            [
                "kode" => 680675,
                "nama" => "KPU KOTA GUNUNG SITOLI"
            ],
            [
                "kode" => 654301,
                "nama" => "KPU PROVINSI SUMATERA BARAT"
            ],
            [
                "kode" => 656087,
                "nama" => "KPU KABUPATEN PESISIR SELATAN"
            ],
            [
                "kode" => 656091,
                "nama" => "KPU KABUPATEN SOLOK"
            ],
            [
                "kode" => 656109,
                "nama" => "KPU KABUPATEN SOLOK SELATAN"
            ],
            [
                "kode" => 656113,
                "nama" => "KPU KABUPATEN SIJUNJUNG"
            ],
            [
                "kode" => 656120,
                "nama" => "KPU KABUPATEN DHARMAS RAYA"
            ],
            [
                "kode" => 656134,
                "nama" => "KPU KABUPATEN TANAH DATAR"
            ],
            [
                "kode" => 656141,
                "nama" => "KPU KABUPATEN PADANG PARIAMAN"
            ],
            [
                "kode" => 656155,
                "nama" => "KPU KABUPATEN AGAM"
            ],
            [
                "kode" => 656162,
                "nama" => "KPU KABUPATEN LIMA PULUH KOTA"
            ],
            [
                "kode" => 656176,
                "nama" => "KPU KABUPATEN PASAMAN"
            ],
            [
                "kode" => 656180,
                "nama" => "KPU KABUPATEN PASAMAN BARAT"
            ],
            [
                "kode" => 656197,
                "nama" => "KPU KABUPATEN KEPULAUAN MENTAWAI"
            ],
            [
                "kode" => 656202,
                "nama" => "KPU KOTA PADANG"
            ],
            [
                "kode" => 656219,
                "nama" => "KPU KOTA SOLOK"
            ],
            [
                "kode" => 656223,
                "nama" => "KPU KOTA SAWAHLUNTO"
            ],
            [
                "kode" => 656230,
                "nama" => "KPU KOTA PADANG PANJANG"
            ],
            [
                "kode" => 656244,
                "nama" => "KPU KOTA BUKITTINGGI"
            ],
            [
                "kode" => 656251,
                "nama" => "KPU KOTA PAYAKUMBUH"
            ],
            [
                "kode" => 656265,
                "nama" => "KPU KOTA PARIAMAN"
            ],
            [
                "kode" => 654315,
                "nama" => "KPU PROVINSI RIAU"
            ],
            [
                "kode" => 656272,
                "nama" => "KPU KABUPATEN KUANTAN SINGINGI"
            ],
            [
                "kode" => 656286,
                "nama" => "KPU KABUPATEN INDRAGIRI HULU"
            ],
            [
                "kode" => 656290,
                "nama" => "KPU KABUPATEN INDRAGIRI HILIR"
            ],
            [
                "kode" => 656308,
                "nama" => "KPU KABUPATEN PELALAWAN"
            ],
            [
                "kode" => 656312,
                "nama" => "KPU KABUPATEN SIAK"
            ],
            [
                "kode" => 656329,
                "nama" => "KPU KABUPATEN KAMPAR"
            ],
            [
                "kode" => 656333,
                "nama" => "KPU KABUPATEN ROKAN HULU"
            ],
            [
                "kode" => 656340,
                "nama" => "KPU KABUPATEN BENGKALIS"
            ],
            [
                "kode" => 656354,
                "nama" => "KPU KABUPATEN ROKAN HILIR"
            ],
            [
                "kode" => 656361,
                "nama" => "KPU KOTA PEKANBARU"
            ],
            [
                "kode" => 656375,
                "nama" => "KPU KOTA DUMAI"
            ],
            [
                "kode" => 670891,
                "nama" => "KPU KAB. KEPULAUAN MERANTI"
            ],
            [
                "kode" => 654322,
                "nama" => "KPU PROVINSI JAMBI"
            ],
            [
                "kode" => 656382,
                "nama" => "KPU KABUPATEN KERINCI"
            ],
            [
                "kode" => 656396,
                "nama" => "KPU KABUPATEN MERANGIN"
            ],
            [
                "kode" => 656401,
                "nama" => "KPU KABUPATEN SAROLANGUN"
            ],
            [
                "kode" => 656418,
                "nama" => "KPU KABUPATEN BATANGHARI"
            ],
            [
                "kode" => 656422,
                "nama" => "KPU KABUPATEN MUARO JAMBI"
            ],
            [
                "kode" => 656439,
                "nama" => "KPU KABUPATEN TANJUNG JABUNG TIMUR"
            ],
            [
                "kode" => 656443,
                "nama" => "KPU KABUPATEN TANJUNG JABUNG BARAT"
            ],
            [
                "kode" => 656450,
                "nama" => "KPU KABUPATEN BUNGO"
            ],
            [
                "kode" => 656464,
                "nama" => "KPU KABUPATEN TEBO"
            ],
            [
                "kode" => 656471,
                "nama" => "KPU KOTA JAMBI"
            ],
            [
                "kode" => 670934,
                "nama" => "KPU KOTA SUNGAI PENUH"
            ],
            [
                "kode" => 654336,
                "nama" => "KPU PROVINSI SUMATERA SELATAN"
            ],
            [
                "kode" => 656485,
                "nama" => "KPU KABUPATEN BANYUASIN"
            ],
            [
                "kode" => 656492,
                "nama" => "KPU KABUPATEN MUSI BANYU ASIN"
            ],
            [
                "kode" => 656507,
                "nama" => "KPU KABUPATEN MUSI RAWAS"
            ],
            [
                "kode" => 656511,
                "nama" => "KPU KABUPATEN LAHAT"
            ],
            [
                "kode" => 656528,
                "nama" => "KPU KABUPATEN MUARA ENIM"
            ],
            [
                "kode" => 656532,
                "nama" => "KPU KABUPATEN OGAN KOMERING ILIR"
            ],
            [
                "kode" => 656549,
                "nama" => "KPU KABUPATEN OGAN ILIR"
            ],
            [
                "kode" => 656553,
                "nama" => "KPU KABUPATEN OGAN KOMERING ULU"
            ],
            [
                "kode" => 656560,
                "nama" => "KPU KABUPATEN OGAN KOMERING ULU TIMUR"
            ],
            [
                "kode" => 656574,
                "nama" => "KPU KABUPATEN OGAN KOMERING ULU SELATAN"
            ],
            [
                "kode" => 656581,
                "nama" => "KPU KOTA PALEMBANG"
            ],
            [
                "kode" => 656595,
                "nama" => "KPU KOTA PAGAR ALAM"
            ],
            [
                "kode" => 656600,
                "nama" => "KPU KOTA LUBUK LINGGAU"
            ],
            [
                "kode" => 656617,
                "nama" => "KPU KOTA PRABUMULIH"
            ],
            [
                "kode" => 670252,
                "nama" => "KPU KAB EMPAT LAWANG"
            ],
            [
                "kode" => 111804,
                "nama" => "KPU KABUPATEN PENUKAL ABAB LEMATANG ILIR"
            ],
            [
                "kode" => 111904,
                "nama" => "KPU KABUPATEN MUSI RAWAS UTARA"
            ],
            [
                "kode" => 654357,
                "nama" => "KPU PROVINSI LAMPUNG"
            ],
            [
                "kode" => 656710,
                "nama" => "KPU KABUPATEN LAMPUNG TENGAH"
            ],
            [
                "kode" => 656727,
                "nama" => "KPU KABUPATEN LAMPUNG UTARA"
            ],
            [
                "kode" => 656731,
                "nama" => "KPU KABUPATEN LAMPUNG BARAT"
            ],
            [
                "kode" => 656748,
                "nama" => "KPU KABUPATEN TULANG BAWANG"
            ],
            [
                "kode" => 656752,
                "nama" => "KPU KABUPATEN TANGGAMUS"
            ],
            [
                "kode" => 656769,
                "nama" => "KPU KABUPATEN LAMPUNG TIMUR"
            ],
            [
                "kode" => 656773,
                "nama" => "KPU KABUPATEN WAY KANAN"
            ],
            [
                "kode" => 656780,
                "nama" => "KPU KABUPATEN LAMPUNG SELATAN"
            ],
            [
                "kode" => 656794,
                "nama" => "KPU KOTA METRO"
            ],
            [
                "kode" => 656802,
                "nama" => "KPU KOTA BANDAR LAMPUNG"
            ],
            [
                "kode" => 670721,
                "nama" => "KPU KAB. PESAWARAN"
            ],
            [
                "kode" => 680696,
                "nama" => "KPU KABUPATEN TULANGBAWANG BARAT"
            ],
            [
                "kode" => 680701,
                "nama" => "KPU KABUPATEN PRING SEWU"
            ],
            [
                "kode" => 680718,
                "nama" => "KPU KABUPATEN MESUJI"
            ],
            [
                "kode" => 121306,
                "nama" => "KPU KABUPATEN PESISIR BARAT"
            ],
            [
                "kode" => 654471,
                "nama" => "KPU PROVINSI KALIMANTAN BARAT"
            ],
            [
                "kode" => 658436,
                "nama" => "KPU KABUPATEN SAMBAS"
            ],
            [
                "kode" => 658440,
                "nama" => "KPU KABUPATEN BENGKAYANG"
            ],
            [
                "kode" => 658457,
                "nama" => "KPU KABUPATEN LANDAK"
            ],
            [
                "kode" => 658461,
                "nama" => "KPU KABUPATEN MEMPAWAH"
            ],
            [
                "kode" => 658478,
                "nama" => "KPU KABUPATEN SANGGAU"
            ],
            [
                "kode" => 658482,
                "nama" => "KPU KABUPATEN SEKADAU"
            ],
            [
                "kode" => 658499,
                "nama" => "KPU KABUPATEN KETAPANG"
            ],
            [
                "kode" => 658504,
                "nama" => "KPU KABUPATEN SINTANG"
            ],
            [
                "kode" => 658511,
                "nama" => "KPU KABUPATEN MELAWI"
            ],
            [
                "kode" => 658525,
                "nama" => "KPU KABUPATEN KAPUAS HULU"
            ],
            [
                "kode" => 658532,
                "nama" => "KPU KOTA PONTIANAK"
            ],
            [
                "kode" => 658546,
                "nama" => "KPU KOTA SINGKAWANG"
            ],
            [
                "kode" => 670337,
                "nama" => "KPU KAB. KAYONG UTARA"
            ],
            [
                "kode" => 670742,
                "nama" => "KPU KAB. KUBU RAYA"
            ],
            [
                "kode" => 654488,
                "nama" => "KPU PROVINSI KALIMANTAN TENGAH"
            ],
            [
                "kode" => 658550,
                "nama" => "KPU KABUPATEN KOTAWARINGIN BARAT"
            ],
            [
                "kode" => 658567,
                "nama" => "KPU KABUPATEN KOTAWARINGIN TIMUR"
            ],
            [
                "kode" => 658571,
                "nama" => "KPU KABUPATEN KAPUAS"
            ],
            [
                "kode" => 658588,
                "nama" => "KPU KABUPATEN KATINGAN"
            ],
            [
                "kode" => 658592,
                "nama" => "KPU KABUPATEN BARITO SELATAN"
            ],
            [
                "kode" => 658600,
                "nama" => "KPU KABUPATEN BARITO UTARA"
            ],
            [
                "kode" => 658614,
                "nama" => "KPU KABUPATEN SERUYAN"
            ],
            [
                "kode" => 658621,
                "nama" => "KPU KABUPATEN SUKAMARA"
            ],
            [
                "kode" => 658635,
                "nama" => "KPU KABUPATEN LAMANDAU"
            ],
            [
                "kode" => 658642,
                "nama" => "KPU KABUPATEN GUNUNG MAS"
            ],
            [
                "kode" => 658656,
                "nama" => "KPU KABUPATEN PULANG PISAU"
            ],
            [
                "kode" => 658660,
                "nama" => "KPU KABUPATEN BARITO TIMUR"
            ],
            [
                "kode" => 658677,
                "nama" => "KPU KABUPATEN MURUNG RAYA"
            ],
            [
                "kode" => 658681,
                "nama" => "KPU KOTA PALANGKARAYA"
            ],
            [
                "kode" => 654492,
                "nama" => "KPU PROVINSI KALIMANTAN SELATAN"
            ],
            [
                "kode" => 658698,
                "nama" => "KPU KABUPATEN BALANGAN"
            ],
            [
                "kode" => 658703,
                "nama" => "KPU KABUPATEN TANAH BUMBU"
            ],
            [
                "kode" => 658710,
                "nama" => "KPU KABUPATEN TABALONG"
            ],
            [
                "kode" => 658724,
                "nama" => "KPU KABUPATEN HULU SUNGAI SELATAN"
            ],
            [
                "kode" => 658731,
                "nama" => "KPU KABUPATEN HULU SUNGAI TENGAH"
            ],
            [
                "kode" => 658745,
                "nama" => "KPU KABUPATEN HULU SUNGAI UTARA"
            ],
            [
                "kode" => 658752,
                "nama" => "KPU KABUPATEN TAPIN"
            ],
            [
                "kode" => 658766,
                "nama" => "KPU KABUPATEN BARITO KUALA"
            ],
            [
                "kode" => 658770,
                "nama" => "KPU KABUPATEN BANJAR"
            ],
            [
                "kode" => 658787,
                "nama" => "KPU KABUPATEN KOTABARU"
            ],
            [
                "kode" => 658791,
                "nama" => "KPU KABUPATEN TANAHLAUT"
            ],
            [
                "kode" => 658809,
                "nama" => "KPU KOTA BANJAR BARU"
            ],
            [
                "kode" => 658813,
                "nama" => "KPU KOTA BANJARMASIN"
            ],
            [
                "kode" => 654500,
                "nama" => "KPU PROVINSI KALIMANTAN TIMUR"
            ],
            [
                "kode" => 658820,
                "nama" => "KPU KABUPATEN PENAJAM PASER UTARA"
            ],
            [
                "kode" => 658834,
                "nama" => "KPU KABUPATEN KUTAI TIMUR"
            ],
            [
                "kode" => 658841,
                "nama" => "KPU KABUPATEN KUTAI BARAT"
            ],
            [
                "kode" => 658880,
                "nama" => "KPU KABUPATEN BERAU"
            ],
            [
                "kode" => 658897,
                "nama" => "KPU KABUPATEN KUTAI KERTANEGARA"
            ],
            [
                "kode" => 658902,
                "nama" => "KPU KABUPATEN PASIR"
            ],
            [
                "kode" => 658919,
                "nama" => "KPU KOTA BONTANG"
            ],
            [
                "kode" => 658930,
                "nama" => "KPU KOTA SAMARINDA"
            ],
            [
                "kode" => 658944,
                "nama" => "KPU KOTA BALIKPAPAN"
            ],
            [
                "kode" => 161303,
                "nama" => "KPU KABUPATEN MAHAKAM ULU"
            ],
            [
                "kode" => 654514,
                "nama" => "KPU PROVINSI SULAWESI UTARA"
            ],
            [
                "kode" => 658951,
                "nama" => "KPU KABUPATEN BOLAANG MONGONDOW"
            ],
            [
                "kode" => 658965,
                "nama" => "KPU KABUPATEN MINAHASA"
            ],
            [
                "kode" => 658972,
                "nama" => "KPU KABUPATEN KEPULAUAN SANGIHE"
            ],
            [
                "kode" => 658986,
                "nama" => "KPU KABUPATEN KEPULAUAN TALAUD"
            ],
            [
                "kode" => 658990,
                "nama" => "KPU KABUPATEN MINAHASA SELATAN"
            ],
            [
                "kode" => 659005,
                "nama" => "KPU KABUPATEN MINAHASA UTARA"
            ],
            [
                "kode" => 659012,
                "nama" => "KPU KOTA MANADO"
            ],
            [
                "kode" => 659026,
                "nama" => "KPU KOTA BITUNG"
            ],
            [
                "kode" => 659030,
                "nama" => "KPU KOTA TOMOHON"
            ],
            [
                "kode" => 670294,
                "nama" => "KPU KOTA KOTAMOBAGO"
            ],
            [
                "kode" => 670302,
                "nama" => "KPU KAB. MINAHASA TENGGARA"
            ],
            [
                "kode" => 670316,
                "nama" => "KPU KAB. BOLAANG MONGONDOW UTARA"
            ],
            [
                "kode" => 670320,
                "nama" => "KPU KAB. KEP. SIAU TAGULANDANG BIARO"
            ],
            [
                "kode" => 670955,
                "nama" => "KPU KAB. BOLAANG MONGONDOW SELATAN"
            ],
            [
                "kode" => 670962,
                "nama" => "KPU KAB. BOLAANG MONGONDOW TIMUR"
            ],
            [
                "kode" => 654521,
                "nama" => "KPU PROVINSI SULAWESI TENGAH"
            ],
            [
                "kode" => 659047,
                "nama" => "KPU KABUPATEN BANGGAI KEPULAUAN"
            ],
            [
                "kode" => 659051,
                "nama" => "KPU KABUPATEN BANGGAI"
            ],
            [
                "kode" => 659068,
                "nama" => "KPU KABUPATEN POSO"
            ],
            [
                "kode" => 659072,
                "nama" => "KPU KABUPATEN MOROWALI"
            ],
            [
                "kode" => 659089,
                "nama" => "KPU KABUPATEN DONGGALA"
            ],
            [
                "kode" => 659093,
                "nama" => "KPU KABUPATEN TOLI-TOLI"
            ],
            [
                "kode" => 659101,
                "nama" => "KPU KABUPATEN BUOL"
            ],
            [
                "kode" => 659115,
                "nama" => "KPU KABUPATEN PARIGI MOUTONG"
            ],
            [
                "kode" => 659122,
                "nama" => "KPU KABUPATEN TOJO UNA-UNA"
            ],
            [
                "kode" => 659136,
                "nama" => "KPU KOTA PALU"
            ],
            [
                "kode" => 670976,
                "nama" => "KPU KAB. SIGI"
            ],
            [
                "kode" => 181305,
                "nama" => "KPU KABUPATEN BANGGAI LAUT"
            ],
            [
                "kode" => 181403,
                "nama" => "KPU KABUPATEN MOROWALI UTARA"
            ],
            [
                "kode" => 654535,
                "nama" => "KPU PROVINSI SULAWESI SELATAN"
            ],
            [
                "kode" => 659140,
                "nama" => "KPU KABUPATEN SELAYAR"
            ],
            [
                "kode" => 659157,
                "nama" => "KPU KABUPATEN BULUKUMBA"
            ],
            [
                "kode" => 659161,
                "nama" => "KPU KABUPATEN BANTAENG"
            ],
            [
                "kode" => 659178,
                "nama" => "KPU KABUPATEN JENEPONTO"
            ],
            [
                "kode" => 659182,
                "nama" => "KPU KABUPATEN TAKALAR"
            ],
            [
                "kode" => 659199,
                "nama" => "KPU KABUPATEN GOWA"
            ],
            [
                "kode" => 659204,
                "nama" => "KPU KABUPATEN SINJAI"
            ],
            [
                "kode" => 659211,
                "nama" => "KPU KABUPATEN BONE"
            ],
            [
                "kode" => 659225,
                "nama" => "KPU KABUPATEN MAROS"
            ],
            [
                "kode" => 659232,
                "nama" => "KPU KABUPATEN PANGKAJENE KEPULAUAN"
            ],
            [
                "kode" => 659246,
                "nama" => "KPU KABUPATEN BARRU"
            ],
            [
                "kode" => 659250,
                "nama" => "KPU KABUPATEN SOPPENG"
            ],
            [
                "kode" => 659267,
                "nama" => "KPU KABUPATEN WAJO"
            ],
            [
                "kode" => 659271,
                "nama" => "KPU KABUPATEN SIDENRENG RAPPANG"
            ],
            [
                "kode" => 659288,
                "nama" => "KPU KABUPATEN PINRANG"
            ],
            [
                "kode" => 659292,
                "nama" => "KPU KABUPATEN ENREKANG"
            ],
            [
                "kode" => 659300,
                "nama" => "KPU KABUPATEN LUWU"
            ],
            [
                "kode" => 659314,
                "nama" => "KPU KABUPATEN TANATORAJA"
            ],
            [
                "kode" => 659356,
                "nama" => "KPU KABUPATEN LUWU UTARA"
            ],
            [
                "kode" => 659377,
                "nama" => "KPU KABUPATEN LUWU TIMUR"
            ],
            [
                "kode" => 659398,
                "nama" => "KPU KOTA MAKASSAR"
            ],
            [
                "kode" => 659403,
                "nama" => "KPU KOTA PARE-PARE"
            ],
            [
                "kode" => 659410,
                "nama" => "KPU KOTA PALOPO"
            ],
            [
                "kode" => 671016,
                "nama" => "KPU KAB. TORAJA UTARA"
            ],
            [
                "kode" => 654542,
                "nama" => "KPU PROVINSI SULAWESI TENGGARA"
            ],
            [
                "kode" => 201205,
                "nama" => "KPU KABUPATEN KOLAKA TIMUR"
            ],
            [
                "kode" => 659424,
                "nama" => "KPU KABUPATEN KONAWE"
            ],
            [
                "kode" => 659431,
                "nama" => "KPU KABUPATEN BUTON"
            ],
            [
                "kode" => 659445,
                "nama" => "KPU KABUPATEN MUNA"
            ],
            [
                "kode" => 659452,
                "nama" => "KPU KABUPATEN KOLAKA"
            ],
            [
                "kode" => 659466,
                "nama" => "KPU KABUPATEN KONAWE SELATAN"
            ],
            [
                "kode" => 659470,
                "nama" => "KPU KABUPATEN BOMBANA"
            ],
            [
                "kode" => 659487,
                "nama" => "KPU KABUPATEN WAKATOBI"
            ],
            [
                "kode" => 659491,
                "nama" => "KPU KABUPATEN KOLAKA UTARA"
            ],
            [
                "kode" => 659509,
                "nama" => "KPU KOTA KENDARI"
            ],
            [
                "kode" => 659513,
                "nama" => "KPU KOTA BAU-BAU"
            ],
            [
                "kode" => 670390,
                "nama" => "KPU KAB. KONAWE UTARA"
            ],
            [
                "kode" => 670405,
                "nama" => "KPU KAB. BUTON UTARA"
            ],
            [
                "kode" => 201304,
                "nama" => "KPU KABUPATEN KONAWE KEPULAUAN"
            ],
            [
                "kode" => 419168,
                "nama" => "KPU KABUPATEN BUTON TENGAH"
            ],
            [
                "kode" => 419169,
                "nama" => "KPU KABUPATEN BUTON SELATAN"
            ],
            [
                "kode" => 419170,
                "nama" => "KPU KABUPATEN MUNA BARAT"
            ],
            [
                "kode" => 654560,
                "nama" => "KPU PROVINSI MALUKU"
            ],
            [
                "kode" => 659576,
                "nama" => "KPU KABUPATEN MALUKU TENGAH"
            ],
            [
                "kode" => 659580,
                "nama" => "KPU KABUPATEN SERAM BAGIAN BARAT"
            ],
            [
                "kode" => 659597,
                "nama" => "KPU KABUPATEN SERAM BAGIAN TIMUR"
            ],
            [
                "kode" => 659602,
                "nama" => "KPU KABUPATEN MALUKU TENGGARA"
            ],
            [
                "kode" => 659619,
                "nama" => "KPU KABUPATEN KEPULAUAN ARU"
            ],
            [
                "kode" => 659623,
                "nama" => "KPU KABUPATEN MALUKU TENGGARA BARAT"
            ],
            [
                "kode" => 659630,
                "nama" => "KPU KABUPATEN BURU"
            ],
            [
                "kode" => 659644,
                "nama" => "KPU KOTA AMBON"
            ],
            [
                "kode" => 670700,
                "nama" => "KPU KOTA TUAL"
            ],
            [
                "kode" => 670980,
                "nama" => "KPU KAB. BURU SELATAN"
            ],
            [
                "kode" => 670997,
                "nama" => "KPU KAB. MALUKU BARAT DAYA"
            ],
            [
                "kode" => 654446,
                "nama" => "KPU PROVINSI BALI"
            ],
            [
                "kode" => 658091,
                "nama" => "KPU KABUPATEN BULELENG"
            ],
            [
                "kode" => 658106,
                "nama" => "KPU KABUPATEN JEMBRANA"
            ],
            [
                "kode" => 658110,
                "nama" => "KPU KABUPATEN KLUNGKUNG"
            ],
            [
                "kode" => 658127,
                "nama" => "KPU KABUPATEN GIANYAR"
            ],
            [
                "kode" => 658131,
                "nama" => "KPU KABUPATEN KARANGASEM"
            ],
            [
                "kode" => 658148,
                "nama" => "KPU KABUPATEN BANGLI"
            ],
            [
                "kode" => 658152,
                "nama" => "KPU KABUPATEN BADUNG"
            ],
            [
                "kode" => 658169,
                "nama" => "KPU KABUPATEN TABANAN"
            ],
            [
                "kode" => 658173,
                "nama" => "KPU KOTA DENPASAR"
            ],
            [
                "kode" => 654450,
                "nama" => "KPU PROVINSI NUSA TENGGARA BARAT"
            ],
            [
                "kode" => 658180,
                "nama" => "KPU KABUPATEN LOMBOK BARAT"
            ],
            [
                "kode" => 658194,
                "nama" => "KPU KABUPATEN LOMBOK TENGAH"
            ],
            [
                "kode" => 658202,
                "nama" => "KPU KABUPATEN LOMBOK TIMUR"
            ],
            [
                "kode" => 658216,
                "nama" => "KPU KABUPATEN BIMA"
            ],
            [
                "kode" => 658220,
                "nama" => "KPU KABUPATEN SUMBAWA"
            ],
            [
                "kode" => 658237,
                "nama" => "KPU KABUPATEN DOMPU"
            ],
            [
                "kode" => 658241,
                "nama" => "KPU KABUPATEN SUMBAWA BARAT"
            ],
            [
                "kode" => 658258,
                "nama" => "KPU KOTA MATARAM"
            ],
            [
                "kode" => 658262,
                "nama" => "KPU KOTA BIMA"
            ],
            [
                "kode" => 671002,
                "nama" => "KPU KAB. LOMBOK UTARA"
            ],
            [
                "kode" => 654467,
                "nama" => "KPU PROVINSI NUSA TENGGARA TIMUR"
            ],
            [
                "kode" => 658279,
                "nama" => "KPU KABUPATEN KUPANG"
            ],
            [
                "kode" => 658283,
                "nama" => "KPU KABUPATEN BELU"
            ],
            [
                "kode" => 658290,
                "nama" => "KPU KABUPATEN TIMOR TENGAH UTARA"
            ],
            [
                "kode" => 658305,
                "nama" => "KPU KABUPATEN TIMOR TENGAH SELATAN"
            ],
            [
                "kode" => 658312,
                "nama" => "KPU KABUPATEN ALOR"
            ],
            [
                "kode" => 658326,
                "nama" => "KPU KABUPATEN SIKKA"
            ],
            [
                "kode" => 658330,
                "nama" => "KPU KABUPATEN FLORES TIMUR"
            ],
            [
                "kode" => 658347,
                "nama" => "KPU KABUPATEN ENDE"
            ],
            [
                "kode" => 658351,
                "nama" => "KPU KABUPATEN NGADA"
            ],
            [
                "kode" => 658368,
                "nama" => "KPU KABUPATEN MANGGARAI"
            ],
            [
                "kode" => 658372,
                "nama" => "KPU KABUPATEN SUMBA TIMUR"
            ],
            [
                "kode" => 658389,
                "nama" => "KPU KABUPATEN SUMBA BARAT"
            ],
            [
                "kode" => 658393,
                "nama" => "KPU KABUPATEN LEMBATA"
            ],
            [
                "kode" => 658401,
                "nama" => "KPU KABUPATEN ROTE NDAO"
            ],
            [
                "kode" => 658415,
                "nama" => "KPU KABUPATEN MANGGARAI BARAT"
            ],
            [
                "kode" => 658422,
                "nama" => "KPU KOTA KUPANG"
            ],
            [
                "kode" => 670269,
                "nama" => "KPU KAB. NAGEKEO"
            ],
            [
                "kode" => 670273,
                "nama" => "KPU KAB. SUMBA TENGAH"
            ],
            [
                "kode" => 670280,
                "nama" => "KPU KAB. SUMBA BARAT DAYA"
            ],
            [
                "kode" => 670756,
                "nama" => "KPU KAB. MANGGARAI TIMUR"
            ],
            [
                "kode" => 680722,
                "nama" => "KPU KABUPATEN SABU RAIJUA"
            ],
            [
                "kode" => 242205,
                "nama" => "KPU KABUPATEN MALAKA"
            ],
            [
                "kode" => 654581,
                "nama" => "KPU PROVINSI PAPUA"
            ],
            [
                "kode" => 659733,
                "nama" => "KPU KABUPATEN JAYAPURA"
            ],
            [
                "kode" => 659740,
                "nama" => "KPU KABUPATEN BIAK NUMFOR"
            ],
            [
                "kode" => 659754,
                "nama" => "KPU KABUPATEN YAPEN WAROPEN"
            ],
            [
                "kode" => 659761,
                "nama" => "KPU KABUPATEN MERAUKE"
            ],
            [
                "kode" => 659775,
                "nama" => "KPU KABUPATEN JAYAWIJAYA"
            ],
            [
                "kode" => 659782,
                "nama" => "KPU KABUPATEN PANIAI"
            ],
            [
                "kode" => 659796,
                "nama" => "KPU KABUPATEN NABIRE"
            ],
            [
                "kode" => 659801,
                "nama" => "KPU KABUPATEN PUNCAK JAYA"
            ],
            [
                "kode" => 659818,
                "nama" => "KPU KABUPATEN MIMIKA"
            ],
            [
                "kode" => 659822,
                "nama" => "KPU KABUPATEN SARMI"
            ],
            [
                "kode" => 659839,
                "nama" => "KPU KABUPATEN KEROM"
            ],
            [
                "kode" => 659843,
                "nama" => "KPU KABUPATEN PEGUNUNGAN BINTANG"
            ],
            [
                "kode" => 659850,
                "nama" => "KPU KABUPATEN YAHUKIMO"
            ],
            [
                "kode" => 659864,
                "nama" => "KPU KABUPATEN TOLIKARA"
            ],
            [
                "kode" => 659871,
                "nama" => "KPU KABUPATEN WAROPEN"
            ],
            [
                "kode" => 659885,
                "nama" => "KPU KABUPATEN BOVEN DIGUL"
            ],
            [
                "kode" => 659892,
                "nama" => "KPU KABUPATEN MAPPI"
            ],
            [
                "kode" => 659907,
                "nama" => "KPU KABUPATEN ASMAT"
            ],
            [
                "kode" => 659911,
                "nama" => "KPU KOTA JAYAPURA"
            ],
            [
                "kode" => 659928,
                "nama" => "KPU KABUPATEN SUPIORI"
            ],
            [
                "kode" => 670692,
                "nama" => "KPU KAB. MAMBERAMO"
            ],
            [
                "kode" => 670810,
                "nama" => "KPU KAB. MAMBERAMO TENGAH"
            ],
            [
                "kode" => 670824,
                "nama" => "KPU KAB. NDUGA"
            ],
            [
                "kode" => 670831,
                "nama" => "KPU KAB. LANNY JAYA"
            ],
            [
                "kode" => 670845,
                "nama" => "KPU KAB. DOGIYAI"
            ],
            [
                "kode" => 670852,
                "nama" => "KPU KAB. PUNCAK"
            ],
            [
                "kode" => 670909,
                "nama" => "KPU KAB. YALIMO"
            ],
            [
                "kode" => 680743,
                "nama" => "KPU KABUPATEN INTAN JAYA"
            ],
            [
                "kode" => 680750,
                "nama" => "KPU KABUPATEN DEIYAI"
            ],
            [
                "kode" => 654340,
                "nama" => "KPU PROVINSI BENGKULU"
            ],
            [
                "kode" => 656621,
                "nama" => "KPU KABUPATEN BENGKULU SELATAN"
            ],
            [
                "kode" => 656638,
                "nama" => "KPU KABUPATEN KAPAHIYANG"
            ],
            [
                "kode" => 656642,
                "nama" => "KPU KABUPATEN REJANG LEBONG"
            ],
            [
                "kode" => 656659,
                "nama" => "KPU KABUPATEN LEBONG"
            ],
            [
                "kode" => 656663,
                "nama" => "KPU KABUPATEN BENGKULU UTARA"
            ],
            [
                "kode" => 656670,
                "nama" => "KPU KABUPATEN K A U R"
            ],
            [
                "kode" => 656684,
                "nama" => "KPU KABUPATEN SELUMA"
            ],
            [
                "kode" => 656691,
                "nama" => "KPU KABUPATEN MUKO-MUKO"
            ],
            [
                "kode" => 656706,
                "nama" => "KPU KOTA BENGKULU"
            ],
            [
                "kode" => 670941,
                "nama" => "KPU KAB. BENGKULU TENGAH"
            ],
            [
                "kode" => 654577,
                "nama" => "KPU PROVINSI MALUKU UTARA"
            ],
            [
                "kode" => 659651,
                "nama" => "KPU KABUPATEN HALMAHERA BARAT"
            ],
            [
                "kode" => 659665,
                "nama" => "KPU KABUPATEN HALMAHERA TENGAH"
            ],
            [
                "kode" => 659672,
                "nama" => "KPU KABUPATEN HALMAHERA UTARA"
            ],
            [
                "kode" => 659686,
                "nama" => "KPU KABUPATEN HALMAHERA SELATAN"
            ],
            [
                "kode" => 659690,
                "nama" => "KPU KABUPATEN HALMAHERA TIMUR"
            ],
            [
                "kode" => 659708,
                "nama" => "KPU KABUPATEN KEPULAUAN SULA"
            ],
            [
                "kode" => 659712,
                "nama" => "KPU KOTA TERNATE"
            ],
            [
                "kode" => 659729,
                "nama" => "KPU KOTA TIDORE KEPULAUAN"
            ],
            [
                "kode" => 680739,
                "nama" => "KPU KABUPATEN KEPULAUAN MOROTAI"
            ],
            [
                "kode" => 280903,
                "nama" => "KPU KABUPATEN PULAU TALIABU"
            ],
            [
                "kode" => 654432,
                "nama" => "KPU PROVINSI B A N T E N"
            ],
            [
                "kode" => 658038,
                "nama" => "KPU KABUPATEN TANGERANG"
            ],
            [
                "kode" => 658042,
                "nama" => "KPU KABUPATEN SERANG"
            ],
            [
                "kode" => 417882,
                "nama" => "KPU KABUPATEN PANDEGLANG"
            ],
            [
                "kode" => 658063,
                "nama" => "KPU KABUPATEN LEBAK"
            ],
            [
                "kode" => 658070,
                "nama" => "KPU KOTA TANGERANG"
            ],
            [
                "kode" => 658084,
                "nama" => "KPU KOTA CILEGON"
            ],
            [
                "kode" => 670714,
                "nama" => "KPU KOTA SERANG"
            ],
            [
                "kode" => 680682,
                "nama" => "KPU KOTA TANGERANG SELATAN"
            ],
            [
                "kode" => 654361,
                "nama" => "KPU PROVINSI BANGKA BELITUNG"
            ],
            [
                "kode" => 656816,
                "nama" => "KPU KABUPATEN BELITUNG"
            ],
            [
                "kode" => 656820,
                "nama" => "KPU KABUPATEN BELITUNG TIMUR"
            ],
            [
                "kode" => 656837,
                "nama" => "KPU KABUPATEN BANGKA"
            ],
            [
                "kode" => 656841,
                "nama" => "KPU KABUPATEN BANGKA BARAT"
            ],
            [
                "kode" => 656858,
                "nama" => "KPU KABUPATEN BANGKA TENGAH"
            ],
            [
                "kode" => 656862,
                "nama" => "KPU KABUPATEN BANGKA SELATAN"
            ],
            [
                "kode" => 656879,
                "nama" => "KPU KOTA PANGKALPINANG"
            ],
            [
                "kode" => 654556,
                "nama" => "KPU PROVINSI GORONTALO"
            ],
            [
                "kode" => 659520,
                "nama" => "KPU KABUPATEN GORONTALO"
            ],
            [
                "kode" => 659534,
                "nama" => "KPU KABUPATEN BOALEMO"
            ],
            [
                "kode" => 659541,
                "nama" => "KPU KABUPATEN BONE BOLANGO"
            ],
            [
                "kode" => 659555,
                "nama" => "KPU KABUPATEN POHUWATO"
            ],
            [
                "kode" => 659562,
                "nama" => "KPU KOTA GORONTALO"
            ],
            [
                "kode" => 670362,
                "nama" => "KPU KAB. GORONTALO UTARA"
            ],
            [
                "kode" => 654378,
                "nama" => "KPU PROVINSI KEPULAUAN RIAU"
            ],
            [
                "kode" => 656883,
                "nama" => "KPU KABUPATEN BINTAN"
            ],
            [
                "kode" => 656890,
                "nama" => "KPU KABUPATEN LINGGA"
            ],
            [
                "kode" => 656905,
                "nama" => "KPU KABUPATEN KARIMUN"
            ],
            [
                "kode" => 656912,
                "nama" => "KPU KABUPATEN NATUNA"
            ],
            [
                "kode" => 656926,
                "nama" => "KPU KOTA BATAM"
            ],
            [
                "kode" => 656930,
                "nama" => "KPU KOTA TANJUNG PINANG"
            ],
            [
                "kode" => 670870,
                "nama" => "KPU KABUPATEN KEP. ANAMBAS"
            ],
            [
                "kode" => 654598,
                "nama" => "KPU PROVINSI PAPUA BARAT"
            ],
            [
                "kode" => 659932,
                "nama" => "KPU KABUPATEN FAK-FAK"
            ],
            [
                "kode" => 659949,
                "nama" => "KPU KABUPATEN SORONG"
            ],
            [
                "kode" => 659953,
                "nama" => "KPU KABUPATEN MANOKWARI"
            ],
            [
                "kode" => 659960,
                "nama" => "KPU KABUPATEN SORONG SELATAN"
            ],
            [
                "kode" => 659974,
                "nama" => "KPU KABUPATEN RAJA AMPAT"
            ],
            [
                "kode" => 659981,
                "nama" => "KPU KABUPATEN KAIMANA"
            ],
            [
                "kode" => 659995,
                "nama" => "KPU KABUPATEN TELUK BINTUNI"
            ],
            [
                "kode" => 660003,
                "nama" => "KPU KABUPATEN TELUK WONDAMA"
            ],
            [
                "kode" => 660010,
                "nama" => "KPU KOTA SORONG"
            ],
            [
                "kode" => 680764,
                "nama" => "KPU KABUPATEN TAMBRAUW"
            ],
            [
                "kode" => 680771,
                "nama" => "KPU KABUPATEN MAYBRAT"
            ],
            [
                "kode" => 331104,
                "nama" => "KPU KABUPATEN PEGUNUNGAN ARFAK"
            ],
            [
                "kode" => 331204,
                "nama" => "KPU KABUPATEN MANOKWARI SELATAN"
            ],
            [
                "kode" => 984767,
                "nama" => "KPU PROVINSI SULAWESI BARAT"
            ],
            [
                "kode" => 659321,
                "nama" => "KPU KABUPATEN POLEWALI MAMASA"
            ],
            [
                "kode" => 659335,
                "nama" => "KPU KABUPATEN MAJENE"
            ],
            [
                "kode" => 659342,
                "nama" => "KPU KABUPATEN MAMUJU"
            ],
            [
                "kode" => 659360,
                "nama" => "KPU KABUPATEN MAMASA"
            ],
            [
                "kode" => 659381,
                "nama" => "KPU KABUPATEN PASANGKAYU"
            ],
            [
                "kode" => 340545,
                "nama" => "KPU KABUPATEN MAMUJU TENGAH"
            ],
            [
                "kode" => 417755,
                "nama" => "KPU PROVINSI KALIMANTAN UTARA"
            ],
            [
                "kode" => 417839,
                "nama" => "KPU KABUPATEN MALINAU"
            ],
            [
                "kode" => 658862,
                "nama" => "KPU KABUPATEN NUNUKAN"
            ],
            [
                "kode" => 417840,
                "nama" => "KPU KABUPATEN BULUNGAN"
            ],
            [
                "kode" => 658923,
                "nama" => "KPU KOTA TARAKAN"
            ],
            [
                "kode" => 670735,
                "nama" => "KPU KAB. TANA TINDUNG"
            ],
            [

                "kode" => "670900",
                "nama" => "KPU Provinsi Papua Selatan"
            ],
            [

                "kode" => "670901",
                "nama" => "KPU Provinsi Papua Tengah"
            ],
            [

                "kode" => "670902",
                "nama" => "KPU Provinsi Papua Pegunungan"
            ],
            [
                "kode" => "670903",
                "nama" => "KPU Provinsi Papua Barat Daya"
            ]

        ];

        foreach ($listBidang as $key => $value) {

            // $checkStrimg = strpos("Provinsi", $value['nama']);
            $jumlah_min = 3;
            $jumlah_max = 2;
            $nama = $value['nama'];
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
            $Bidang[$key]->save();
        }

    }
}