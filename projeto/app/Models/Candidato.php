<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function area() {
        return $this->belongsTo(Area::class);
    }

    public function candidaturas() {
        return $this->hasMany(Candidatura::class);
    }
}
