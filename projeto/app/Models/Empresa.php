<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'cnpj',
        'descricao',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function vagas() {
        return $this->hasMany(Vaga::class);
    }
}
