<?php

namespace App\Models\Usuario;

use autodoc\Events\ColaboradorModificado;
use Illuminate\Auth\AuthManager as Auth;
use App\Models\Usuario\Interfaces\RepositoryEloquent as RepositoryEloquentInterface;
use App\Models\Usuario\Usuario;
use Carbon\Carbon;

class RepositoryEloquent implements RepositoryEloquentInterface
{

    public function __construct(Usuario $usuario, Auth $auth)
    {
        $this->auth = $auth;
        $this->usuario = $usuario;
    }


    public function all($columns = ['*'])
    {
        return $this->usuario->all();

    }

    public function find($id, $columns = ['*'])
    {

    }

    public function findBy($field, $operation, $value, $columns = ['*'])
    {

    }

    public function create(array $data)
    {

    }

    public function update(array $data, $id)
    {

    }

    public function destroy($id)
    {

    }

    public function destroyIn(array $id)
    {

    }

    public function search(array $data, $with = null, $fields = [])
    {
        $query = $this->usuario->query();

        if ($with) {
            $query->with($with);
        }

        if( $data['email'] ) {
            $query->whereIn('email', is_array($data['email']) ? $data['email'] : [ $data['email'] ]);
        }

        return $query->get();

    }

    public function autenticacao($input)
    {
        $filtro = [
            'email' => $input['email'],
            'collection' => true
        ];

        $usuarios = $this->search($filtro);
        $totalUsuarios = $usuarios->count();

        if ( ! $this->verificarPassword( $input['senha'], $usuarios->first()->getAuthPassword()) ) {
            return false;
        }

        if( $totalUsuarios > 1 ) {
            return $usuarios->toArray();
        }

        return $usuarios->first();
    }

    public function verificarPassword($senha, $hashSenha)
    {
        return \Hash::check($senha, $hashSenha);
    }

    /**
     * Verifica o tipo do usuário e redireciona para sua pagina correta.
     *
     * @author Danilo Correa <dcorrea@autodoc.com.br>
     */
    public function dashboard()
    {
        dd($this->auth->user()->empresa()->get());
        $usuario = $this->auth->user()->empresa()->get();

        if ($usuario->count()) {
            return redirect()
                ->route('dashboard.empresa.historico-individual.index');
        } else {
            return redirect()
                ->route('dashboard.construtora.index');
        }
    }

    public function session($usuario, $request)
    {
        $request->session()->put('usuario', $usuario);
    }

}
