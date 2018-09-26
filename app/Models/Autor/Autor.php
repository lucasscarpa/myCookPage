<?php

namespace App\Models\Autor;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Autor extends Model
{
    use SoftDeletes;

    protected $table = 'autor';

    protected $fillable = [
        'nome',
    ];

}
