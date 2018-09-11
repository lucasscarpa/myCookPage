<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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

        if ($this->usuario->auth->check())
        {
            
        }
        
        return view('auth.login')
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
            if( !$request->get('empresa') && count($usuarioLogado) > 1 ) {
                return $this->selectEmpresa($request, $usuarioLogado);
            }

            if( count($usuarioLogado) > 1 ) {
                $usuarioLogado = array_where($usuarioLogado, function ($usuario) use ($request) {
                    return $usuario['empresa'][0]['id'] == $request->get('empresa');
                });
            }

            $dadosUsuario = reset($usuarioLogado);
            $bloqueioAcesso = false;

            // Tratamento para acesso ao sistema.
            if( $dadosUsuario['bloqueado'] ) {
                $bloqueioAcesso = true;
                $error = 'Acesso bloqueado';
            } else {
                if( !$dadosUsuario['desenvolvedor'] ) {
                    $empresa = reset($dadosUsuario['empresa']);

                    if( $empresa['bloqueado'] && $empresa['fornecedor']['tipo_bloqueio'] != 1 ) {
                        $bloqueioAcesso = true;
                        $error = $empresa['construtora'] ? 'Construtora Bloqueada' : 'Fornecedor Bloqueado';
                    }
                }
            }

            if( $bloqueioAcesso ) {
                session()->flash('error', [$error]);

                return $this->selectEmpresa($request);
            }

            $this->usuario->session($usuarioLogado, $request);
            Auth::loginUsingId(usuario('id'));

            $this->logAcesso->create([
                'usuario_id' => usuario('id'),
                'empresa_id' => empresa('id')
            ]);

            dispatch(new \autodoc\Jobs\Scandoc\EnviarSenhaScandoc(usuario('email'), $request->input('senha')));

            if(usuario()['empresa']['sem_acesso_aplicacao']) {
                return redirect('dashboard/empresa/mrv/colaborador/listar');
            }

            session()->flash('changelog', true);

            return $request->input('redirect') ? redirect($request->input('redirect')) : $this->usuario->dashboard();
        } else {
            session()->flash('error', ['e-mail ou senha inválido']);

            return $this->selectEmpresa($request);
        }
    }
}
