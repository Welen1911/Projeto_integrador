<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisito extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'vagas_id',
    ];

    public function vaga() {
        return $this->belongsTo(Vaga::class);
    }
}
