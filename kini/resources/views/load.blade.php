@extends('layouts.home')

@section('content')

	<h2>Cargar Nuevos Datos</h2>
	<br>

	@include('alerts.success')
	@include('alerts.errors')
	@include('alerts.request')

	{!! Form::open(['url' => 'cargar/store', 'method' => 'post']) !!}

		@include('form.grid')

		<br>

		<label>Ingrese la fecha del sorteo:</label> <input type="date" name="fecha" required >

		<br>
		<br>

		<button type="submit" class="btn btn-primary">Guardar <i class="fa fa-save"></i> </button>
	{!! Form::close() !!}	
		

@stop

@section('scripts')
		{!!Html::script('js/load.js')!!}
@endsection