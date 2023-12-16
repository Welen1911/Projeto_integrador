<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidatura extends Model
{
    use HasFactory;

    protected $fillable = [
        'vaga_id',
        'candidato_id',
    ];

    public function vaga() {
        return $this->belongsTo(Vaga::class);
    }

    public function candidato() {
        return $this->belongsTo(Candidato::class);
    }
}
