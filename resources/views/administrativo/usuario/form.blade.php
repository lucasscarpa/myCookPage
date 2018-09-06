@extends('layouts.app')

@section('content')
<div class="col-md-6 offset-md-3">
    <div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">Formulário</h4>
        <p class="card-category">Cadastro/Edição de Usuários</p>
    </div>
    <div class="card-body">
            <form method="POST" action="{{ route('administrativo.usuario.cadastrar') }}">
            @if($errors->any())
                @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
                @endforeach
            @endif
                @csrf
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="form-group">
                            <label class="bmd-label-floating">Nome</label>
                            <input id="nome" name="nome" type="text" class="form-control" @if(isset($usuario)) value="{{ $usuario->nome }}" @endif>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="form-group">
                            <label class="bmd-label-floating">Email</label>
                            <input id="email" name="email" type="email" class="form-control" @if(isset($usuario)) value="{{ $usuario->email }}" @endif>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="form-group">
                            <label class="bmd-label-floating">Endereço</label>
                            <input id="endereco" name="endereco" type="endereco" class="form-control" @if(isset($usuario)) value="{{ $usuario->endereco }}" @endif>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="form-group">
                            <label class="bmd-label-floating">Senha</label>
                            <input id="password" name="senha" type="password" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="form-group">
                            <label class="bmd-label-floating">Confirma Senha</label>
                            <input id="password" name="confirma_senha" type="password" class="form-control">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Cadastrar</button>
                <div class="clearfix"></div>
            </form>

        </div>
    </div>
    </div>
</div>
@endsection