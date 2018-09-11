<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginFormRequest;
use App\Models\Usuario\Interfaces\RepositoryEloquent as UsuarioEloquent;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UsuarioEloquent $usuario)
    {
        $this->middleware('guest')->except('logout');
        $this->usuario = $usuario;
    }

    public function index(Request $request)
    {
        session()->flush();

        return view('login.index')
            ->with('redirect', $request->input('redirect'));
    }

    public function logout()
    {
        \Auth::logout();

        return view('welcome');
    }

    public function validar(LoginFormRequest $request)
    {
        $usuarioLogado = $this->usuario->autenticacao($request->all());

        if($usuarioLogado) {
            $this->usuario->dashboard();
        } else {
            session()->flash('error', ['e-mail ou senha inválido']);

            return $this->selectEmpresa($request);
        }

        
    }
}
