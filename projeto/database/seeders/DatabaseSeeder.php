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
            EnderecoSeeder::class,
            UserSeeder::class,
            AreaSeeder::class,
            VinculoSeeder::class,
            EmpresaSeeder::class,
        ]);
    }
}
