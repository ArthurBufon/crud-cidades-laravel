<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;

    public $fillable = [
        'nome',
        'cep',
        'populacao',
        'estado_id',
        'estado_sigla'
    ];

//    public function estado(): \Illuminate\Database\Eloquent\Relations\HasOne
//    {
//        return $this->hasOne(Estado::class);
//    }
}
