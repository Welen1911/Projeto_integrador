<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formacao extends Model
{
    use HasFactory;

    protected $fillable = [
        'instituto',
        'tipo',
        'curso',
        'cursando',
        'candidato_id',
    ];

    public function candidato() {
        return $this->belongsTo(Candidato::class);
    }
}
