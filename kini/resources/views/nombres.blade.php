@extends('layouts.home')

@section('content')

	<div class="row text-center">
		<div class="container-fluid" ><center> <h2 id="subtitulo" class="text-center" >Los Números de los nombres</h2> </center></div>
	</div>
	
	<br>

	@include('form.cien-nombres')

	
@stop
