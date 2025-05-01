<?php

namespace Database\Seeders;

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
        $this->call([
            UsersTableSeedeer::class,
            KotaSeeder::class,
            PesertaSeeder::class,
            // BidangDataSeeder::class,
            // JabtanDataSeeder::class,

        ]);
    }
}
