@extends('layouts.app')

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
				<h2>Filtro</h2>
			</header>
            <div>
                <form method="GET" action="{{route('dashboard.administrativo.receita.filtrar')}}" id="form-unidades">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="nome" class="control-label">Nome</label>
                                <input type="text" class="form-control" name="nome" id="nome" placeholder="" @if(isset($request)) value="{{$request['obra_id']}}" @endif>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="categoria" class="control-label">Categoria</label>
                                <select class="form-control" name="autor_id" id="autor">
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
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="data" class="control-label">Data Criação</label>
                                <select class="form-control" name="data" id="data">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" value="Filtrar" class="btn btn-primary btn-block"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
			<div class="col-lg-12">
                <div class="main-box">
                    <header>
						<h2 class="pull-left">Gerenciar Receitas ({{($receitas->count())}})</h2>
						<div class="filter-block pull-right">
							<a href="{{ route('dashboard.administrativo.receita.form') }}" class="btn btn-primary pull-right">
								<i class="fa fa-plus-circle fa-lg"></i> Cadastrar
							</a>
							<a href="#" id="btn-excluir" class="btn btn-primary pull-right">
								<i class="fa fa-trash fa-lg"></i> Excluir
							</a>
						</div>
					</header>
                    <div>
						<div class="table-responsive">
                            <table class="table datatable" id="lista-unidades">
							<thead>
							    <tr>
							    	<th style="width: 13px;">
										<div class="chbox">
											<div class="checkbox-nice">
												<input type="checkbox" id="checkbox-all">
												<label for="checkbox-all"></label>
											</div>
										</div>
									</th>
									<th style="width: 13px;">&nbsp;</th>
							        <th>Nome</th>
							       	<th>Categoria</th>
							       	<th>Autor</th>
							       	<th>Data Criação</th>
							    </tr>
							</thead>
							<tbody>
                                @foreach($receitas as $receita)
								<tr>
									<td>
										<div class="chbox">
											<div class="checkbox-nice">
												<input type="checkbox" name="id[]" value="1" id="checkbox-index">
												<label for="checkbox-index"></label>
											</div>
										</div>
									</td>
									<td>
										<a href="{{route('dashboard.administrativo.unidades.edit', $receita->id)}}" class="table-link">
											<span class="fa-stack">
												<i class="material-icons">edit</i>
											</span>
										</a>
									</td>
									<td>{{ $receita->nome }}</td>
									<td>{{ $receita->categoria->nome }}</td>
									<td>{{ $receita->autor->nome }}</td>
									<td>{{ $receita->data_criacao }}</td>
								</tr>
                                @endforeach
							</tbody>
						</table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
@endsection