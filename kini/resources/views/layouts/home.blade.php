<!DOCTYPE html>
<html lang="es">
<head>
	<title>Kini Simulador</title>
	<meta charset="utf-8">
	<!-- estilo en css3 -->
	<meta name="viewport" content="width=device-width, user-scalable=no ,initial-scale=1.0" />

	<link rel="shorcut icon" href="{{asset('images/icono2.png')}}" />
	<link rel="stylesheet" href="{{asset('css/font-awesome/css/font-awesome.min.css')}}" />
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/animate.css')}}" rel="stylesheet" />
	<link rel="stylesheet" href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />

   	<script src="{{asset('js/jquery.min.js')}}"></script>
   	<script src="{{asset('js/tether.min.js')}}"></script>
  	<script src="{{asset('js/bootstrap.js')}}"></script>
  	
</head>
<body>

<nav >
	<h1 class="text-left hidden-sm-down titulo animated fadeInLeft"><img id="trebol-icono" src="{{asset('images/icono-kini.png')}}"> Kini Simulador  </h1>

	<div class="row hidden-md-up">
		<div class="hidden-md-up">
			<div id="bar" class="dropdown text-left ">
				<button id="desp" class="boton dropdown-toggle titulo" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><i class=" fa fa-bars" ></i></button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton" >

					<div class="container-fluid"><a href="{{url('inicio')}}"><button class="btn-lg boton"><b><i class="fa fa-home"></i>  Inicio</b></button></a></div>

					<div class="dropdown-submenu">
						  <a  class="test" tabindex="-1" href="#"><button class="boton" ><i class="fa fa-calendar"></i> <b>Sorteos</b><b class="caret"></b></button></a> 
						  <ul class="dropdown-menu" >
						  	@for($i=0; isset($fechas[$i]->fecha) && $i<8 ;$i++)
						  	 	@php $var=$fechas[$i]->fecha;  $mostrar=date_create($fechas[$i]->fecha); @endphp
						    	<li class="items"><a href="{{url('sorteos-anteriores', $parameters=[$fechas[$i]->fecha])}}">{{date_format($mostrar,"j/n/Y")}}</a></li>
						  	@endfor
						  </ul>
					</div >
					<div class="dropdown-submenu" >
					    <a class="test" tabindex="-1" href="#"><button class="boton"> <i class="fa fa-info-circle"></i> <b> Números <span class="caret"></span></b></button></a> 
					  <ul class="boton-menu dropdown-menu">
					    <li class="items"> <a tabindex="-1" class="boton-menu" href="{{url('numeros-suenos')}}">Sueños  <i class="fa fa-bed"></i></a></li>
					    <li class="items"> <a tabindex="-1" class="boton-menu" href="{{url('numeros-profesiones')}}">Profesiones  <i class="fa fa-user-md"></i></a></li>
					    <li class="items"> <a tabindex="-1" class="boton-menu" href="{{url('numeros-nombres')}}">Nombres  <i class="fa fa-font"></i></a></li>
					    <li class="items"> <a tabindex="-1" class="boton-menu" href="{{url('numeros-animales')}}">Animales  <i class="fa fa-paw"></i></a></li>
					    <li class="items"> <a tabindex="-1" class="boton-menu" href="{{url('numeros-futbol')}}">Fútbol  <i class="fa fa-futbol-o"></i></a></li>
					  </ul>
					</div>
				</div>
	    	</div>
	    </div>
	    <div class="text-right" id="word">Kini</div>
	</div>
</nav>

<br>

<!-- Menú de inicio para pantallas medianas y grandes -->
<div class="row">
	<div id="col-izq" class="hidden-sm-down col-md-2 col_izq fadeInLeft text-left">
		<aside >
			<ul class="nav navbar-nav">
				<li class="li-left" ><a href="{{url('inicio')}}"><button class="boton"> <b><i class="fa fa-home"></i>  Inicio </b></button></a></li>
				
				<li class="dropdown li-left" id="desplegar">
				   <button data-target="desplegar" class="boton dropdown-toggle" data-toggle="dropdown"  >
				    <i class="fa fa-calendar"></i>  <b>Sorteos anteriores</b> <b class="caret"></b>
				  </button> 
				  <ul class="boton-menu dropdown-menu" >
				  @for($i=0; isset($fechas[$i]->fecha) && $i<8 ;$i++)
				  	 @php $var=$fechas[$i]->fecha;  $mostrar=date_create($fechas[$i]->fecha); @endphp
				    <li class="li-left"><a href="{{url('sorteos-anteriores', $parameters=[$fechas[$i]->fecha])}}"><button class="boton text-center">{{date_format($mostrar,"j/n/Y")}}</button></a></li>
				  @endfor
				  </ul>
				</li>

				<li class="dropdown li-left" id="numeros">
				   <button data-target="numeros" class="boton dropdown-toggle" data-toggle="dropdown" >
				    <i class="fa fa-info-circle"></i>  <b>Números - significados </b> <b class="caret"></b>
				  </button> 
				  <ul class="boton-menu dropdown-menu" >
				    <li class="li-left"><a href="{{url('numeros-suenos')}}"><button class="boton">  Sueños  <i class="fa fa-bed"></i></button></a> </li>
				    <li class="li-left"><a href="{{url('numeros-profesiones')}}"><button class="boton">  Profesiones  <i class="fa fa-user-md"></i></button></a> </li>
				    <li class="li-left"><a href="{{url('numeros-nombres')}}"><button class="boton">  Nombres  <i class="fa fa-font"></i></button></a> </li>
				    <li class="li-left"><a href="{{url('numeros-animales')}}"><button class="boton">  Animales  <i class="fa fa-paw"></i></button></a> </li>
				    <li class="li-left"><a href="{{url('numeros-futbol')}}"><button class="boton">  Fútbol  <i class="fa fa-futbol-o"></i></button></a> </li>
				  </ul>
				</li>
				
			</ul>	
		</aside>


		<br>
		<br>
		<br>

		<section>
			<article id="frase">
			<div id="frase-2">
				<p>{{ $frases[0]->frase }}</p>
				<p class="text-right" >{{ $frases[0]->autor }}</p>
			</div>	
			</article>
		</section>

	</div>



	<div class="container-fluid  col-xs-9 col-sm-9 col-md-9 text-center">
		
		@yield('content')	

	</div>


	<aside  id="contenedor" class="hidden-sm-down col-md-1 col_der"> 
		<div id="girando"> <p>Anuncie aquí!</p> </div>
	</aside>

</div>

<br>
<br>
<br>

<footer class="foot">
	<div  class="row  " itemscope >
		<div id="email" class="text-left col-xs-5 col-sm-5 col-md-5"> <p><span itemprop="contact">info@gabriel-sanchez.com</span></p></div>
		<div  id="item" class="text-center col-xs-3 col-sm-3 col-md-3" style="text-align: center;" > <b>"Jugar compulsivamente es perjudicial para la salud"</b> </div>
	</div>	
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12"><p class="text-center">En caso de divergencia, entre el contenido del presente informe 
		con el extracto oficial de la Lotería Administradora del juego, tendrá plena validez éste último.</p>
		</div>
	</div>
</footer>



@section('scripts')
		{!!Html::script('js/animaciones.js')!!}
@endsection


</body>

@yield('scripts')


</html>