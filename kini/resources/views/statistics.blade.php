@extends('layouts.home')

@section('content')

	<h2>Estadísticas</h2>
	<br>

	@include('alerts.success')
	@include('alerts.errors')
	@include('alerts.request')

		<br>
		
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-4">
				<label>Base de datos actualizada al:   (aaaa-mm-dd)</label> 
			</div>
			<div class="col-md-3">	
				<input type="text" name="fecha" value="" readonly class="form-control">
			</div>
			<div class="col-md-1"></div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-4">
				<h4>Números más repetidos</h4>
				<br>
				<ol>
					@if(isset($numbers))
						@foreach($numbers as $number)
							<li>{{$number}}</li>
							<li>{{$number}}</li>
							<li>{{$number}}</li>
							<li>{{$number}}</li>
							<li>{{$number}}</li>
							<li>{{$number}}</li>
						@endforeach
					@endif		
				</ol>
			</div>
			<div class="col-md-1">
			</div>
			<div class="col-md-4">
				<h4>Números que salen menos</h4>
				<br>
				<ol>
					@if(isset($numbers2))
						@foreach($numbers2 as $number2)
							<li>{{$number2}}</li>
							<li>{{$number2}}</li>
							<li>{{$number2}}</li>
							<li>{{$number2}}</li>
							<li>{{$number2}}</li>
							<li>{{$number2}}</li>
						@endforeach
					@endif
				</ol>
			</div>
		</div>

		<br>
		

@stop

@section('scripts')
		
@endsection