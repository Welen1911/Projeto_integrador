<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    use HasFactory;

    protected $fillable = [
        'empresa_id',
        'titulo',
        'descricao',
        'area_id',
        'vinculo_id',
    ];

    public function empresa() {
        return $this->belongsTo(Empresa::class);
    }

    public function area() {
        return $this->belongsTo(Area::class);
    }

    public function candidaturas() {
        return $this->hasMany(Candidatura::class);
    }

    public function vinculo() {
        return $this->belongsTo(Vinculo::class);
    }

    public function requisitos() {
        return $this->hasMany(Requisito::class);
    }

    public function atributos() {
        return $this->hasMany(Atribuito::class);
    }
}
