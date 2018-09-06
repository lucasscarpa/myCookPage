<?php

namespace App\Models\Usuario;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    use SoftDeletes;
    use Notifiable;

    protected $table = 'usuario';

    protected $fillable = [
        'name', 'email', 'endereco', 'password',
    ];

    protected $hidden = [
        'senha', 'remember_token', 'confirma_senha'
    ];

}
