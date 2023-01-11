<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    protected $fillable =
        [
            'nome',
            'sigla',
            'populacao'
        ];

//    public function cidades(): \Illuminate\Database\Eloquent\Relations\HasMany
//    {
//        return $this->hasMany(Cidade::class);
//    }
}
