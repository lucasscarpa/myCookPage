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
				<h2>Filtro</h2>
			</header>
		<div>

		<form method="GET" action="#" id="form-unidades">
			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<label for="nome" class="control-label">Categoria</label>
						<input type="text" class="form-control" name="categoria" id="nome" placeholder="">
					</div>
				</div>
            <div>
            <div class="row">
				<div class="col-md-12">
					<input type="submit" value="Filtrar" class="btn btn-success btn-block"/>
				</div>
			</div>
		</form>
	</div>
</div>
@include('template.mensagens')
<div class="row">
	<div class="col-lg-12">
		<div class="main-box">
			<header>
				<h2 class="pull-left">Receitas ({{($categorias->count())}})</h2>
				<div class="filter-block pull-right">
					<a href="{{ route('dashboard.administrativo.categorias.form') }}" class="btn btn-success pull-right">
						<i class="fa fa-plus-circle fa-lg"></i> Cadastrar
					</a>
					<a href="#" id="btn-excluir" class="btn btn-success pull-right">
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
							<th>Categoria</th>
							<th>Data Criação</th>
						</tr>
					</thead>
					<tbody>
						@foreach($categorias as $categoria)
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
								<a href="{{route('dashboard.administrativo.categorias.form', $categoria->id)}}" class="table-link">
									<span class="fa-stack">
										<i class="material-icons">edit</i>
									</span>
								</a>
							</td>
							<td>{{ $categoria->nome }}</td>
							<td>{{ $categoria->data_criacao }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection