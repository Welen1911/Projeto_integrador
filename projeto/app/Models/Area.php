<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome'
    ];

    public function users() {
        return $this->hasMany(Candidato::class);
    }

    public function vagas() {
        return $this->hasMany(Vaga::class);
    }
}
