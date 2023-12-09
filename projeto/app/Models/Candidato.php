<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'sobre',
        'curriculo',
        'area_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function area() {
        return $this->belongsTo(Area::class);
    }

    public function candidaturas() {
        return $this->hasMany(Candidatura::class);
    }

    public function experiencias() {
        return $this->hasMany(Experienca::class);
    }

    public function formacaos() {
        return $this->hasMany(Formacao::class);
    }
}
