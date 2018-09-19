@extends('layouts.app')

@section('scripts')
<script src="{{ asset('js/administrativo/unidades/unidades.js') }}"defer></script>
@endsection

@section('content')
<div class="row justify-content-md-center">
	<div class="col-lg-10">
		<div class="main-box clearfix">
			<header class="main-box-header clearfix">
				<h2 class="pull-left">Medidas</h2>
				<div class="filter-block pull-right">
					<a href="{{route('dashboard.administrativo.unidades.create')}}" class="btn btn-primary pull-right">
						<i class="fa fa-plus-circle fa-lg"></i> Cadastrar
					</a>
					<a href="#" id="btn-excluir" class="btn btn-primary pull-right">
						<i class="fa fa-trash fa-lg"></i> Excluir
					</a>
				</div>
			</header>
			<form method="GET" action="{{route('dashboard.administrativo.unidades.delete')}}" id="form-unidades">
				<div class="main-box-body clearfix">
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
							        <th>UNIDADE</th>
							       	<th>ABREVIAÇÃO</th>
							    </tr>
							</thead>
							<tbody>
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
										<a href="{{route('dashboard.administrativo.unidades.edit', 1)}}" class="table-link">
											<span class="fa-stack">
												<i class="material-icons">edit</i>
											</span>
										</a>
									</td>
									<td>Colher de sopa</td>
									<td>csp</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection