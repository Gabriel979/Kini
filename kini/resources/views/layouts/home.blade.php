<!DOCTYPE html>
<html lang="es">
<head>
	<title>Kini Simulador</title>
	<meta charset="utf-8">
	<!-- estilo en css3 -->
	<meta name="viewport" content="width=device-width, user-scalable=no ,initial-scale=1.0" />

	<!-- Para el rastreador de Facebook -->
	<meta property="og:url"           content="http://localhost:8000" />
  	<meta property="og:type"          content="website" />
  	<meta property="og:title"         content="Kini Simulador" />
  	<meta property="og:description"   content="Simulador para Juego de azar" />
  	<meta property="og:image"         content="http://www.your-domain.com/path/image.jpg" />

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
	<h1 class="text-left hidden-sm-down titulo animated fadeInLeft"><img id="trebol-icono" src="{{asset('images/icono-kini.png')}}"> Kini Simulador</h1>
	
	<div class="redes text-center"> <button  id="compartir">Compartir<br><i class="fa fa-share-alt"></i></button></div>
	<div class="redes-menu text-center"> 
		<a href=""><i class="fa fa-facebook-square icono-face"></i></a><br>
		<a href=""><i class="fa fa-twitter-square icono-twitter"></i></a><br>
		<a href=""><i class="fa fa-whatsapp icono-whats"></i></a><br>
		<a href=""><i class="fa fa-thumbs-o-up icono-face"></i></a><br>
		<a href=""><i class="fa fa-linkedin-square icono-linkedin"></i></a><br>
		<a href=""><i class="fa fa-google-plus-square icono-gplus"></i></a><br>
	</div>


	<div class="row hidden-md-up">
		<div class="hidden-md-up">
			<div id="bar" class="dropdown text-left ">
				<button id="desp" class="boton dropdown-toggle titulo" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><i class=" fa fa-bars" ></i></button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton" >

					<div class=""><a href="{{url('inicio')}}"><button class="btn-chico btn-md"><b><i class="fa fa-home hidden-xs-down"></i> Inicio</b></button></a></div>

					<div class="submenu">
						  <a  class="" tabindex="-1" href="#"><button id="btn-sub-sort" class="btn-chico btn-md" ><i class="fa fa-calendar hidden-xs-down"></i> <b>Sorteos</b><b class="caret"></b></button></a> 
						  <ul id="submenu-fecha" class="" >
						  	@for($i=0; isset($fechas[$i]->fecha) && $i<8 ;$i++)
						  	 	@php $var=$fechas[$i]->fecha;  $mostrar=date_create($fechas[$i]->fecha); @endphp
						    	<li class="items"><a href="{{url('sorteos-anteriores', $parameters=[$fechas[$i]->fecha])}}">{{date_format($mostrar,"j/n/Y")}}</a></li>
						  	@endfor
						  </ul>
					</div >
					<div class="submenu" >
					    <a class="" tabindex="-1" href="#"><button id="btn-sub-num" class="btn-chico btn-md"> <i class="fa fa-info-circle hidden-xs-down"></i> <b> Números <span class="caret"></span></b></button></a> 
					  <ul id="submenu-num" class="boton-menu">
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
	    <div class="text-center" id="word"><img id="trebol-icono2" src="{{asset('images/icono-kini.png')}}"> Kini</div>
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
				    <i class="fa fa-calendar hidden-md-down"></i> <b class="visible-md-down hidden-lg-up">Sorteos</b> <b class="hidden-md-down " >Sorteos anteriores</b><b class="caret"></b>
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
				    <i class="fa fa-info-circle hidden-md-down"></i> <b class="visible-md-down hidden-lg-up" >Sueños</b><b class="hidden-md-down" >Sueños - significados </b><b class="caret"></b>
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
			<article id="frase" class="hidden-md-down">
				<div id="frase-2" class="fb-quotable" >
					<p id="fraseazar">{{ $frases[0]->frase }}</p>
					<p id="autor" class="text-right" >{{ $frases[0]->autor }}</p>
				</div>
				<div class="text-center"> 
					<a  id="facebook" href="https://www.facebook.com/sharer/sharer.php?u=" target="_blank" ><i class="fa fa-facebook" ></i></a>  

					<a id="twitter" href="https://twitter.com/?status="  target="_blank"><i class="fa fa-twitter" ></i></a> 

					<a id="linkedin" href="http://www.linkedin.com/shareArticle?url=" target="_blank"><i class="fa fa-linkedin" ></i></a> 

					<a id="whatsapp" href="javascript:window.open('','','width=600,height=400,left=50,top=50,toolbar=yes')" target="_blank"><i class="fa fa-whatsapp" ></i></a>   
					
					<a id="googleplus" href="https://plus.google.com/share?url=" target="_blank"><i class="fa fa-google-plus" ></i></a>  
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

<div class="row">
	<div class="col-xs-1 col-sm-1 col-md-1"> </div>
	<div class="col-xs-10 col-sm-10 col-md-10">
		<article id="frase-chico" class="visible-md-down hidden-lg-up">
			<div id="" class="fb-quote" >
				<p id="fraseazar">{{ $frases[0]->frase }}</p>
				<p id="autor" class="text-right" >{{ $frases[0]->autor }}</p>
			</div>
			<div class="text-center iconos-chicos"> 
				<a  id="facebook" href="https://www.facebook.com/sharer/sharer.php?u=" target="_blank" ><i class="ic fa fa-facebook" ></i></a>  

				<a id="twitter" href="https://twitter.com/?status="  target="_blank"><i class="ic fa fa-twitter" ></i></a> 

				<a id="linkedin" href="http://www.linkedin.com/shareArticle?url=" target="_blank"><i class="ic fa fa-linkedin" ></i></a> 

				<a id="whatsapp" href="javascript:window.open('','','width=600,height=400,left=50,top=50,toolbar=yes')" target="_blank"><i class="ic fa fa-whatsapp" ></i></a>   
				<a id="googleplus" href="https://plus.google.com/share?url=" target="_blank"><i class="ic fa fa-google-plus" ></i></a>  
			</div>	
		</article>
	</div>	
</div>

<a href="#" class="scrollup"><i class="fa fa-chevron-circle-up"></i></a>

<footer class="foot">
	<div  class="row  " itemscope >
		<div id="email" class="text-left col-xs-5 col-sm-5 col-md-5"> <p><span itemprop="contact"><a href="mailto:info@gabriel-sanchez.com">info@gabriel-sanchez.com</a></span></p></div>
		<div  id="item" class="text-center col-xs-3 col-sm-3 col-md-3" style="text-align: center;" > <b>"Jugar compulsivamente es perjudicial para la salud"</b> </div>
	</div>	
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12"><p class="text-center">En caso de divergencia, entre el contenido del presente informe 
		con el extracto oficial de la Lotería Administradora del juego, tendrá plena validez éste último.</p>
		</div>
	</div>
</footer>




		{!!Html::script('js/animaciones.js')!!}

<script type="text/javascript">
	
	$(document).ready(function(){
		
		var frase = $("#fraseazar").html();	
		var autor = $("#autor").html();		

		var tw= 'https://twitter.com/?status='+frase;
		var face= 'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(frase)+''+encodeURIComponent(autor);
		var linked= 'http://www.linkedin.com/shareArticle?url='+frase+''+autor;
		var gplus= 'https://plus.google.com/share?url='+frase+''+autor;


		$("#twitter").attr("href",tw);
		$("#facebook").attr("href",face);
		$("#linkedin").attr("href",linked);
		$("#googleplus").attr("href",gplus);

	});
</script>

<!-- Comment #2: SDK -->
  <div id="fb-root"></div>
  <script>
	  (function(d, s, id) {
	    var js, fjs = d.getElementsByTagName(s)[0];
	    if (d.getElementById(id)) return;
	    js = d.createElement(s); js.id = id;
	    js.src = "//connect.facebook.net/spa_ES/sdk.js#xfbml=1&version=v2.6";
	    fjs.parentNode.insertBefore(js, fjs);
	  }(document, 'script', 'facebook-jssdk'));
  </script>


</body>



@yield('scripts')


</html>