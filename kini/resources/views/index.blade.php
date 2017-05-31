@extends('layouts.home')

@section('content')

	<div class="row">
		<div class="col-md-5"></div>
		<h2 id="subtitulo">PREDICCIÓN</h2>	
	</div>
	<br>
	<br>
	

	@include('form.grid2')

	<br>
	<br>
	<div class="row">
		<div class="col-md-5"></div>
		<div class="col-md-1">
			<button id="suerte" class="btn btn-success">Probar Suerte</button>	
		</div>
	</div>
	

@stop

@section('scripts')
		{!!Html::script('js/home.js')!!}
@endsection
