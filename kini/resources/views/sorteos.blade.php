@extends('layouts.home')

@section('content')

	<div class="row text-center">
		<div class="container-fluid" ><center> <h2 id="subtitulo" class="text-center" >Sorteos anteriores</h2> </center></div>
	</div>
	
	<br>
	<br>

	@include('form.grid3')

	<br>
	<br>

	<div class="row">
		 @php $mostrar=date_create($filas[0]->fecha); @endphp
		<div class="container-fluid text-center fecha-sorteo"><h4>Fecha: <span>{{date_format($mostrar,"j/n/Y")}}</span> </h4></div>
	</div>
	
@stop
