<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lista = ['Tecnologia', 'Administração', 'Logistica', 'Direito'];
        foreach ($lista as $area) {
            Area::create([
                'nome' => $area
            ]);
        }
    }
}
