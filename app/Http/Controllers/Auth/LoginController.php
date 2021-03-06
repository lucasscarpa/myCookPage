<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginFormRequest;
use App\Models\Usuario\Interfaces\RepositoryEloquent as UsuarioEloquent;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;

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
    protected $redirectTo = '/categoria';

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
        return view('login.index');
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();

        return redirect()->route('login.index')
            ->with('sucesso', ['Você saiu do sistema']);
    }

    public function autenticar(LoginFormRequest $request)
    {
        $usuarioLogado = $this->usuario->autenticacao($request->all());

        if($usuarioLogado) {
            Auth::attempt($request->only('email', 'password'));
            return redirect()->intended($this->redirectTo);

        } else {
            session()->flash('error', ['e-mail ou senha inválido']);
            return view('login.index');

        }
    }
}
