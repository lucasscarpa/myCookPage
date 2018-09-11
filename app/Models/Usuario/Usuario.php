<?php

namespace App\Models\Usuario;

use Hash;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use SoftDeletes;
    use Authenticatable, Notifiable, CanResetPassword;

    protected $table = 'usuario';

    protected $fillable = [
        'name', 'email', 'endereco', 'senha',
    ];

    protected $hidden = [
        'senha', 'remember_token', 'confirma_senha'
    ];

    public function getAuthPassword()
    {
        return $this->senha;
    }

}
