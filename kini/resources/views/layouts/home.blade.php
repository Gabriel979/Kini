<!DOCTYPE html>
<html lang="es">
<head>
	<title>Kini Simulador</title>
	<meta charset="utf-8">
	<!-- estilo en css3 -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="shorcut icon" href="{{asset('images/icono.png')}}" />
	<link rel="stylesheet" href="{{asset('css/font-awesome/css/font-awesome.min.css')}}" />
	<link rel="stylesheet" href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />

	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>

   	<script src="{{asset('js/jquery.min.js')}}"></script>
   	<script src="{{asset('js/tether.min.js')}}"></script>
  	<script src="{{asset('js/bootstrap.min.js')}}"></script>
  	
</head>
<body>

<nav>
	<h1 id="titulo" class="text-left">Kini Simulador</h1>
</nav>

<br>

<div class="row">
	<div class="col-md-2 col_izq">
		<aside>
			<ul class="nav navbar-nav">
				<li> <button class="boton"><b>Inicio</b></button> </li>
				<li class="dropdown" id="desplegar">
				   <button data-target="desplegar" class="boton dropdown-toggle" data-toggle="dropdown"  >
				    <b> Sorteos anteriores</b> <b class="caret"></b>
				  </button> 
				  <ul class="boton-menu dropdown-menu" >
				  @for($i=0; isset($fechas[$i]->fecha) && $i<8 ;$i++)
				  	 @php $var=$fechas[$i]->fecha;  $mostrar=date_create($fechas[$i]->fecha); @endphp
				    <li><a class="boton-menu" href="{{url('sorteos-anteriores')}}">{{date_format($mostrar,"j/n/Y")}}</a></li>
				  @endfor
				  </ul>
				</li>
			</ul>	
		</aside>


		<br>
		<br>
		<br>

		<section>
			<article id="frase">
				<p>"El azar favorece a una mente bien entrenada"</p>
				<p class="text-center" >Louis Pasteur</p>
			</article>
		</section>

	</div>



	<div class="col-md-9 text-center">
		
		@yield('content')	

	</div>
	<div  id="contenedor" class="col-md-1 col_der"> <div id="girando"> <p>Anuncie aquí!</p> </div></div>

</div>

<br>
<br>
<br>

<footer class="foot">
	<div  class="row  " itemscope >
		<div id="email" class="text-left col-md-5"> <p><span itemprop="contact">info@gabriel-sanchez.com</span></p></div>
		<div  id="item" class="text-center col-md-3" style="text-align: center;" > <b>"Jugar compulsivamente es perjudicial para la salud"</b> </div>
	</div>	
	<div class="row">
		<div class="col-md-12"><p class="text-center">En caso de divergencia, entre el contenido del presente informe 
		con el extracto oficial de la Lotería Administradora del juego, tendrá plena validez éste último.</p>
		</div>
	</div>
</footer>


</body>

@yield('scripts')


</html>