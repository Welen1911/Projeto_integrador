<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vinculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
    ];

    public function vagas() {
        return $this->hasMany(Vaga::class);
    }
}
