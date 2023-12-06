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

    public function users() {
        return $this->hasMany(User::class);
    }

    public function cidade() {
        return $this->belongsTo(Cidade::class);
    }
}
