@extends('layouts.home')

@section('content')

	<div class="row">
	
		<div class="container-fluid text-center bounce"><h2 id="subtitulo">PREDICCIÓN</h2></div>
	</div>
	
	<br>
	<br>
	
	@include('form.grid2')

	<br>
	<br>
	<div class="row">
		<div class="container-fluid text-center">
			<button id="suerte" class="btn btn-success">Probar Suerte</button>	
		</div>
	</div>
	

@stop

@section('scripts')
		{!!Html::script('js/home.js')!!}
@endsection
