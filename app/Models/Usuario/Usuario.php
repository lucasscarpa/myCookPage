<?php

namespace App\Models\Usuario;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use Notifiable;

    public $table = 'usuario';

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'senha', 'remember_token', 'confirma_senha'
    ];

}
