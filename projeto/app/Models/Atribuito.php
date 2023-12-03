<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atribuito extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'vaga_id',
    ];

    public function vaga() {
        return $this->belongsTo(Vaga::class);
    }
}
