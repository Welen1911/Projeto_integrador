<?php

namespace App\Enums;

enum TipoVinculo: string
{
    case PJ = "PJ";
    case CLT = "Carteira Assinada";
    case FR = "Freelance";

    public static function fromVinculo(string $vinculo): string
    {
        foreach (self::cases() as $tipo) {
            if ($tipo->name == $vinculo) {
                return $tipo->value;
            }
        }
    }
}
