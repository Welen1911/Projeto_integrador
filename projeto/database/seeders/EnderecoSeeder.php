<?php

namespace Database\Seeders;

use App\Models\Cidade;
use App\Models\Endereco;
use App\Models\Estado;
use Illuminate\Database\Seeder;

class EnderecoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estado::factory(1)->create();
        Cidade::factory(1)->create();
        Endereco::factory(1)->create();
    }
}
