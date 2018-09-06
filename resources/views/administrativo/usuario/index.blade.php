@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">Usuarios - ({{ count($usuarios) }})</h4>
                <a class="btn btn-primary pull-right" href="{{ route('administrativo.usuario.editar') }}" role="button">
                    Novo
                    <i class="material-icons right">send</i>
                </a>
                <a class="btn btn-primary pull-right" href="{{ route('administrativo.usuario.editar') }}" role="button">
                    Deletar
                </a>
                
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <tr>
                                <th></th>
                                <th>Editar</th>
                                <th>Nome</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($usuarios as $usuario)
                            <tr>
                                <td>
                                    <div class="input-group">
                                        <input type="checkbox" value="{{ $usuario->id }}">
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group">
                                        <a class="btn btn-primary" href="{{ route('administrativo.usuario.editar', ['id' => $usuario->id]) }}" role="button">
                                            <i class="material-icons right">send</i>
                                        </a>
                                    </div>
                                </td>
                                <td>{{ $usuario->name }}</td>
                                <td>{{ $usuario->email }}</td>
                            <tr>
                            @empty
                            @endforelse
                        </tbody>  
@endsection