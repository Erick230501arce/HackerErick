/*alert("Archivo cargado  por Erick David Arce Leyva");*/


$(document).ready(function () {
	//alert("Archivo cargado  por Erick David Arce Leyva");

	 //accediendo a los enlaces
	var botonInicio = $('#botonInicio');
	var botonEs = $('#botonEs');
	var botonFactores = $('#botonFactores');
	var botonContacto = $('#botonContacto');

	

    //accediento a las secciones

    var seccionAcerca = $('#es').offset().top;
    var seccionTrabajos = $('#factores').offset().top;
    var seccionContacto = $('#contacto').offset().top;


   // alert(seccionAcerca);


   //animando botones
     botonEs.on('click', function(e){

         //quita la funcionalidad del enlace
          e.preventDefault();

     	//creando  un selector al html y body
     	$('html,body').animate({
     		scrollTop:  seccionAcerca

     	});
	});

     botonFactores.on('click', function(a){

         //quita la funcionalidad del enlace
          a.preventDefault();

     	//creando  un selector al html y body
     	$('html,body').animate({
     		scrollTop:  seccionTrabajos

     	});
	});

     botonContacto.on('click', function(r){

         //quita la funcionalidad del enlace
          r.preventDefault();

     	//creando  un selector al html y body
     	$('html,body').animate({
     		scrollTop:  seccionContacto

     	});
	});


 });



