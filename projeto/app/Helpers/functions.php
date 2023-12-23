<?php

use App\Enums\TipoVinculo;

if (!function_exists('getVinculo')) {
    function getVinculo(string $vinculo): string {
        return TipoVinculo::fromVinculo($vinculo);
    }
}