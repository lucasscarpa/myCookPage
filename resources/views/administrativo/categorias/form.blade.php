@extends('layouts.app')

@section('scripts')
@endsection

@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-12">
				<nav aria-label="">
					<ol class="breadcrumb" style="background-color: #1A2035;">
						<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="#">Administrativo</a></li>
						<li class="breadcrumb-item active"><a href="#">Categorias</a></li>
					</ol>
				</nav>
			</div>
		</div>
        <div class="main-box">
            <header>
                <h2>Formulário de Categorias</h2>
            </header>
        
            <form method="POST" action="{{route('dashboard.administrativo.categoria.cadastrar')}}" id="form-unidades">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nome" class="control-label">Nome</label>
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="" value="{{ old('nome', $receita->nome) }}">
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-8">
                        <button type="submit" class="btn btn-success pull-right"><i class="fa fa-save"></i> Cadastrar</button>
                        <a href="{{route('dashboard.administrativo.receita.index')}}" class="btn btn-success pull-right"><i class="fa fa-arrow-left"></i> Voltar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection