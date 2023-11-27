<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AreaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lista = ['Tecnologia', 'Administração', 'Logistica', 'Direito'];
        return [
            'nome' => $lista[rand(0,3)],
        ];
    }
}
