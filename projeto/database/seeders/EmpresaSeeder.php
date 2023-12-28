<?php

namespace Database\Seeders;

use App\Models\Empresa;
use App\Models\Vaga;
use Illuminate\Database\Seeder;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Empresa::factory(1)->create();
        Vaga::factory(10)->create();
    }
}
