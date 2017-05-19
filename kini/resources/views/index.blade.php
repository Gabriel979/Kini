@extends('layouts.home')

@section('content')

	<h2>Predicción</h2>
	@include('form.grid2')

	<br>
	<button id="suerte" class="btn btn-success">Probar Suerte</button>
	

@stop

@section('scripts')
		{!!Html::script('js/home.js')!!}
@endsection
