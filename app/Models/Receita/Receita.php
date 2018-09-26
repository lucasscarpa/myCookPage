<?php

namespace App\Models\Receita;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Ingrediente\Ingrediente;
use App\Models\Autor\Autor;
use App\Models\Categoria\Categoria;

class Receita extends Model
{
    use SoftDeletes;

    protected $table = 'receita';

    protected $fillable = [
        'nome',
        'descricao',
        'categoria_id',
        'autor_id'
    ];

    public function ingrediente()
    {
        return $this->belongsToMany(Ingrediente::class, 'receita_ingrediente', 'receita_id');
    }

    public function autor()
    {
        return $this->belongsTo(Autor::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function getDataCriacaoAttribute()
    {
        return $this->created_at->format('d/m/Y');
    }

}
