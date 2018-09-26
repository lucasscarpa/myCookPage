<?php

namespace App\Models\Ingrediente;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ingrediente extends Model
{
    use SoftDeletes;

    protected $table = 'ingrediente';

    protected $fillable = [
        'nome',
        'unidade_medida',
        'preco'
    ];

}

