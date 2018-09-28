<?php

namespace App\Models\Categoria;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    use SoftDeletes;

    protected $table = 'categoria';

    protected $fillable = [
        'nome',
    ];

    public function getDataCriacaoAttribute()
    {
        return $this->created_at->format('d/m/Y');
    }
}
