@extends('layouts.app')

@section('scripts')
<script src="{{ asset('js/administrativo/receitas/receitas.js')}}"></script>

<script type="text/javascript">

</script>
@endsection

@section('styles')
<style>
    .ck-editor__editable {
        min-height: 400px;
    }
</style>
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
						<li class="breadcrumb-item active"><a href="#">Receitas</a></li>
					</ol>
				</nav>
			</div>
		</div>
        <div class="main-box">
            <header>
                <h2>Formulário de Receitas</h2>
            </header>
        
            <form method="POST" action="{{route('dashboard.administrativo.receita.cadastrar')}}" id="form-unidades">
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
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="categoria" class="control-label">Categoria</label>
                            <select class="form-control" name="categoria_id" id="categoria">
                                <option value="0">Todas</option>
                                @foreach($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="autor" class="control-label">Autor</label>
                            <select class="form-control" name="autor_id" id="autor">
                                <option value="0">Todos</option>
                                @foreach($autores as $autor)
                                <option value="{{ $autor->id }}">{{ $autor->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-md-8 ck-reset ck-editor">
                        <textarea class="ck-blurred ck-editor__editable ck-rounded-corners ck-editor__editable_inline" role="textbox" aria-label="Rich Text Editor, main" contenteditable="true" name="descricao" id="editor"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <button type="submit" class="btn btn-success pull-right"><i class="fa fa-save"></i> Cadastrar</button>
                        <a href="{{route('dashboard.administrativo.receita.index')}}" class="btn btn-success pull-right"><i class="fa fa-arrow-left"></i> Voltar</a>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection

