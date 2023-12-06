<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;

    public function enderecos() {
        return $this->hasMany(Endereco::class);
    }

    public function estado() {
        return $this->belongsTo(Estado::class);
    }
}
