@extends('layouts.home')

@section('content')

	<div class="row text-center">
		<div class="col-md-12" ><center> <h2 id="subtitulo" class="text-center" >Sorteos anteriores</h2> </center></div>
	</div>
	
	<br>
	<br>

	@include('form.grid3')

	<br>
	<br>

	<div class="row">
		<div class="col-md-5"></div>
		<div class="col-md-3"><h4>Fecha: <span>{{$filas[0]->fecha}}</span> </h4></div>
	</div>
	
@stop
