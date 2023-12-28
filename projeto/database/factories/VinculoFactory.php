<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VinculoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $vinculo = ['PJ', 'FR', 'CLT'];
        return [
            'nome' => $vinculo[rand(0, 2)],
        ];
    }
}
