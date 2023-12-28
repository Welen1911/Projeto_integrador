<?php

namespace Database\Seeders;

use App\Models\Vinculo;
use Illuminate\Database\Seeder;

class VinculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vinculo::factory(1)->create();
    }
}
