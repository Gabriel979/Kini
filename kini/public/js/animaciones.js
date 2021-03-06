$(document).ready(function(){
  	
  	//Muestra sub-menu de fechas-sorteos en miniatura
	$("#btn-sub-sort").click(function(){
		$("#submenu-fecha").slideToggle("slow");
		$("#submenu-num").hide();
	});


	//Muestra sub-menu de numeros, en miniatura
	$("#btn-sub-num").click(function(){
		$("#submenu-num").slideToggle("slow");
		$("#submenu-fecha").hide();
	});
	

	//Función predefinida para la animación de elementos con Animate.css
	$.fn.extend({
	    animateCss: function (animationName) {
	        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
	        this.addClass('animated ' + animationName).one(animationEnd, function() {
	            $(this).removeClass('animated ' + animationName);
	        });
	    }
	});


	//Aniamción de las esferas
  	$('.ball').animateCss('flip');
  	$('.ball2').animateCss('flip');
  	$('.ball3').animateCss('flip');
  	$('.ball4').animateCss('flip');
  	$('#col-izq').animateCss('fadeInLeft');


  	//Para el hover azul de animales, sueños y profesiones
	$(".text").mouseover(function(){

		$(this).css("background-color","blue");
		$(this).css("border-color","white");
		
		var este2=$(this).find("span");
		este2.css("color","white");
	});


	$(".text").mouseleave(function(){
		
		$(this).css("color","black");
		$(this).css("background-color","transparent");
		$(this).css("border-color","blue");

		var este2=$(this).find("span");
		este2.css("color","blue");
	});
	


	//Para el hover azul de nombres
	$(".nombres").mouseover(function(){

		$(this).css("background-color","blue");
		$(this).css("border-color","white");
		
		var este2=$(this).find("span");
		este2.css("color","white");
	});


	$(".nombres").mouseleave(function(){
		
		$(this).css("color","black");
		$(this).css("background-color","transparent");
		$(this).css("border-color","blue");

		var este2=$(this).find("span");
		este2.css("color","blue");
	});


	//Para el hover azul de nombres
	$(".futbol").mouseover(function(){

		$(this).css("background-color","blue");
		$(this).css("border-color","white");
		
		var este2=$(this).find("span");
		este2.css("color","white");
	});


	$(".futbol").mouseleave(function(){
		
		$(this).css("color","black");
		$(this).css("background-color","transparent");
		$(this).css("border-color","blue");

		var este2=$(this).find("span");
		este2.css("color","blue");
	});
	


	//desplegar lentamente los menús
	$(".dropdown-toggle").click(function(e){

		e.preventDefault();

		var padre_li=$(this).parent();

		var btn_presionado= padre_li.find(".dropdown-menu");

		btn_presionado.slideToggle("slow");

	});

	//comportamiento del menu al salir el mouse del elemento
	
	$(".dropdown-menu").mouseleave(function(){
		$(".dropdown-menu").slideUp("slow");
	});

	

});


//Cambia de imagenes de fondo según pantalla.
$(document).ready(function(){

	var ancho= $(window).width();

	if (ancho<=753){
		$('body').css('background-image', "url('../images/fondo-chico2-kini.png')");
	}

	if (ancho>753){
		$('body').css('background-image', "url('../images/fondo7.png')");
	}

	$(window).resize(function(){

		var ancho= $(window).width();

		if (ancho<=753){
			$('body').css('background-image', "url('../images/fondo-chico2-kini.png')");
		}

		if (ancho>753){
			$('body').css('background-image', "url('../images/fondo7.png')");
		}

	});



	//scroll del boton para subir en la pantalla
	$(window).scroll(function(){
	   if ($(this).scrollTop() > 100) {
	        $('.scrollup').fadeIn();
	   } else {
	        $('.scrollup').fadeOut();
	   }
	});

	$('.scrollup').click(function(){
	    $("html, body").animate({ scrollTop: 0 }, fast);
	    return false;
	});



	//comportamiento del menu "Compartir"
	$("#compartir").click(function(){
		$(".redes-menu").slideToggle("slow");
	});


	$(".redes-menu").mouseleave(function(){
		$(".redes-menu").slideUp("slow");
	});
	


});	 		 
