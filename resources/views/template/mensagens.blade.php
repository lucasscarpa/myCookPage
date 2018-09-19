@if (session('sucesso'))
	<div class="alert alert-success" role="alert">
		<ul class="list-unstyled">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			@foreach (session('sucesso') as $mensagem)
				<li>
					<i class="fa fa-check-circle fa-fw fa-lg"></i>
					{!! $mensagem !!}
				</li>
			@endforeach
		</ul>
	</div>
@endif

@if ($errors->count())
	<div class="alert alert-danger" role="alert">
		<ul class="list-unstyled">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			@foreach ($errors->all() as $mensagem)
				<li>
					<i class="fa fa-times-circle fa-fw fa-lg"></i>
					{!! $mensagem !!}
				</li>
			@endforeach
		</ul>
	</div>
@endif