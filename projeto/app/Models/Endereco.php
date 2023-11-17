<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $fillable = [
        'estado',
        'cidade',
        'bairro',
        'cep',
        'rua',
        'numero',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
