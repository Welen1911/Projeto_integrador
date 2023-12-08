<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $fillable = [
        'bairro',
        'rua',
        'numero',
        'complemento',
        'cidade_id',
    ];

    public function users() {
        return $this->hasMany(User::class);
    }

    public function cidade() {
        return $this->belongsTo(Cidade::class);
    }
}
