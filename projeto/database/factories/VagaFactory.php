<?php

namespace Database\Factories;

use App\Models\Area;
use App\Models\Empresa;
use App\Models\Vinculo;
use Illuminate\Database\Eloquent\Factories\Factory;

class VagaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'empresa_id' => Empresa::find(1),
            'titulo' => $this->faker->text(10),
            'descricao' => $this->faker->text(200),
            'area_id' => Area::find(1),
            'vinculo_id' => Vinculo::find(1),
        ];
    }
}
