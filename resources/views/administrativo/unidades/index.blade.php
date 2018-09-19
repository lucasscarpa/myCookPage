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
					<a href="#" class="btn btn-primary pull-right">
						<i class="fa fa-plus-circle fa-lg"></i> Cadastrar
					</a>
					<a href="#" id="btn-excluir" class="btn btn-primary pull-right">
						<i class="fa fa-trash fa-lg"></i> Excluir
					</a>
				</div>
			</header>
			<div class="main-box-body clearfix">
				<div class="table-responsive">
					<table class="table datatable" id="lista-unidades">
						<thead>
						    <tr>
						    	<th>
									<div class="chbox">
										<div class="checkbox-nice">
											<input type="checkbox" id="checkbox-all">
											<label for="checkbox-all"></label>
										</div>
									</div>
								</th>
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
								<td>Colher de sopa</td>
								<td>csp</td>
							</tr>
							<tr>
								<td>
									<div class="chbox">
										<div class="checkbox-nice">
											<input type="checkbox" name="id[]" value="1" id="checkbox-index">
											<label for="checkbox-index"></label>
										</div>
									</div>
								</td>
								<td>Colher de chá</td>
								<td>csh</td>
							</tr>
							<tr>
								<td>
									<div class="chbox">
										<div class="checkbox-nice">
											<input type="checkbox" name="id[]" value="1" id="checkbox-index">
											<label for="checkbox-index"></label>
										</div>
									</div>
								</td>
								<td>Colher de sobremesa</td>
								<td>csb</td>
							</tr>
						</tbody>

					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection