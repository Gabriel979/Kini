<!DOCTYPE html>
<html lang="es">
<head>
	<title>Kini Great Simulator</title>
	<meta charset="utf-8">
	<!-- estilo en css3 -->


	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="{{asset("css/font-awesome/css/font-awesome.min.css")}}">

	<script src="{{asset('js/jquery.min.js')}}"></script>
	<script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
	<script src="{{asset('js/jquery.flexisel.js')}}"></script>
	<script src="{{asset('js/tether.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>
<body>

<nav>
	<h1 class="text-left">Kini Great Simulator</h1>
</nav>


<div class="row">
	<div class="col-md-2">
		<aside>
		<ul>
			<li>{!!link_to('/', $title ="Inicio", $attributes = [], $secure = null)!!}</li>
			<li>{!!link_to('cargar', $title ="Cargar Datos", $attributes = [], $secure = null)!!}</li>
			<li>{!!link_to('estadisticas', $title ="Ver Estadísticas", $attributes = ['target'=>'_blank'], $secure = null)!!}</li>
		</ul>
		</aside>	
	</div>

	<div class="col-md-10 text-center">
		
		@yield('content')	

	</div>

</div>

<br>
<br>
<br>

<footer class="text-center">
	<div itemscope >
		<p>Mi nombre:<span itemprop="name">Gabriel Sanchez</span> </p>
		<p>Soy <span itemprop="title">Programador</span></p>
		<p>Mi web:<span itemprop="url">www.gabriel-sanchez.com</span></p>
		<p>Mi e-mail:<span itemprop="contact">info@gabriel-sanchez.com</span></p>
	</div>	
</footer>

</body>

@section('scripts')
@show

</html>