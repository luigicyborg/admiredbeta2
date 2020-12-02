<?php
include('session.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>ADMIRED - VOUCHERS</title>
<!-- Custom Theme files -->
<link href="css/style-work.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/profile-mes-semana.css" rel="stylesheet" type="text/css" media="all"/>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 

<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
</head>
<body>
<!--header start here-->
<h1>Crea un Voucher</h1>
<div class="header agile">
	<div class="wrap">
		<div class="login-main wthree">
			<div class="login">
				<h3>Selecciona la semana:</h3>
				<div class="style-cell">
					 <month class="month">
						<week class="style-month-header">
							<cell-header>
								<a href="#" id="prevMonth"><--ANT</a>
							</cell-header>
							<cell-header id="textMonth">
								
							</cell-header>
							<cell-header>
								<a href="#" id="nextMonth">SIG--></a>
							</cell-header>
						</week>
					</month>
					<div class="contentWrapper" id="contents-month">
						
					</div>
				</div>
			 <div id="class-week-work">

			  </div>
			  	<!-- POPUP DIV 
					<h2>Modal Example</h2>
-->
					<!-- Trigger/Open The Modal 
					<button id="myBtn">Open Modal</button>
-->
					<div id="preRegistro" class="modal1">

					  <!-- Modal content -->
					    <div class="pre-registro">
					    	<p>Select a tipo de voucher:</p>
							<div class="input_radio">
							  <input type="radio" id="huey" name="voucher_type" value="one"
							         checked>
							  <label for="huey">Acceso solo en el aula.</label>
							  <input type="radio" id="dewey" name="voucher_type" value="all">
							  <label for="dewey">Acceso en cualquier lugar del colegio.</label>
							</div>

					  		<label for="seleccionMateria">Asignatura:</label>
							<select id="seleccionMateria">
							  <option value="materia1">MATEMATICAS</option>
							  <option value="materia2">SOCIALES</option>
							  <option value="materia3">INGLES</option>
							  <option value="materia4">CIENCIAS</option>
							</select>
						    <span class="close1">&times;</span>
						    <p>Seleccionando la asignatura se creara el Voucher de acceso, copie la informacion de la siguiente ventana para imprimirlo o compartirlo por cualquier medio.</p>
					    </div>
					</div>
					<!-- The Modal -->
					<div id="voucher" class="modal2">
					  <!-- Modal content -->
					    <div class="style-voucher">
						  	<label for="seleccionMateria">VOUCHER:</label>
						  	<label for="seleccionMateria">FECHA:</label>
						  	<label for="seleccionMateria">EMPIEZA:</label>
						  	<label for="seleccionMateria">TERMINA:</label>
						  	<label for="seleccionMateria">MATERIA:</label>
						  	<label for="seleccionMateria">AULA:</label>
						  	<label for="seleccionMateria">FECHA DE CREACION:</label>
						    <span class="close2">&times;</span>
					    </div>
					</div>
			    <!-- END POPUP DIV -->
		   </div>
		</div>
	</div>
</div>

<div class="copy-rights w3l">		 	
	<p>© <?php echo date("Y");?> <a href="http://obedalvarado.pw/" target="_blank">LuigiBps</a>  Todos los derechos reservados | Diseñado por  <a href="http://w3layouts.com/" target="_blank">LuigiBps</a> </p>		 	
</div>
<script type="text/javascript">
	$(document).ready(function(){

	  var fecha = new Date();
	  var tiempo = fecha.getTime();
	  var anioActual = fecha.getFullYear();  
	  var mesActual = fecha.getMonth()+1; /* 0 - 11 */
	  var diaActual = fecha.getDate();
	  var diaSemanaActualUTC = fecha.getUTCDay() || 7;
	  var diaSemanaActual = fecha.getDay();
	  var horaActual = fecha.getHours();
	  var minutoActual = fecha.getMinutes();
	  var segundoActual = fecha.getSeconds();

	  var anioSeleccionado = anioActual;
	  var mesSeleccionado = mesActual;
	  var diaSeleccionado = diaActual;
	  var horaSeleccionada = horaActual;
	  var minutoSeleccionado = minutoActual;
	  var segundoSeleccionado = segundoActual;

	  var semanaSeleccionada = 'week1';

	  var banderaHorarioSemanal = false;

	  var meses = new Array ("ENERO","FEBRERO","MARZO","ABRIL","MAYO","JUNIO","JULIO","AGOSTO","SEPTIEMBRE","OCTUBRE","NOVIEMBRE","DICIEMBRE");

	  var diasDeLaSemana = new Array ("LUN","MAR","MIE","JUE","VIE","SAB","DOM");

	  var fechaSeleccionada = vfechaSeleccionada();

	  $("#contents-month").load('load-calendar.php',{mesSeleccionado,anioSeleccionado,fechaSeleccionada});

	  $("#preRegistro").load('load-materias.php',{<?php echo $login_session; ?>});


	  document.getElementById('textMonth').innerHTML = meses[mesSeleccionado-1]+' '+anioSeleccionado;
	    /*	--->		OCULTAR EL HORARIO SEMANAL			*/
	  document.getElementById('class-week-work').style.visibility = "hidden";

	  $("#prevMonth").click(function(){
	  	mesSeleccionado--;
	  	if(mesSeleccionado<1){
	  		anioSeleccionado--;
	  		mesSeleccionado = 12;
	    }
	    fechaSeleccionada = vfechaSeleccionada();
	    $("#contents-month").load('load-calendar.php',{mesSeleccionado,anioSeleccionado,fechaSeleccionada});
	    document.getElementById('textMonth').innerHTML = meses[mesSeleccionado-1]+' '+anioSeleccionado;
	    /*	--->		OCULTAR EL HORARIO SEMANAL			*/
	    document.getElementById('class-week-work').style.visibility = "hidden";
	  });
	  
	  $("#nextMonth").click(function(){
	  	mesSeleccionado++;
	  	if(mesSeleccionado>12){
	  		anioSeleccionado++;
	  		mesSeleccionado = 1;
	    }
	    fechaSeleccionada = vfechaSeleccionada();
	    $("#contents-month").load('load-calendar.php',{mesSeleccionado,anioSeleccionado,fechaSeleccionada});
	    document.getElementById('textMonth').innerHTML = meses[mesSeleccionado-1]+' '+anioSeleccionado;
	    /*	--->		OCULTAR EL HORARIO SEMANAL			*/
	    document.getElementById('class-week-work').style.visibility = "hidden";
	  });

/*	--->		CLICK EN LA SEMANA DEL CALENDARIO MENSUAL			*/
		$('#contents-month').on('click', '.style-week', function(){
			semanaSeleccionada = this.id;

			var anioInicio = anioSeleccionado;
			var anioFin = anioSeleccionado;

		    var mesMostrado = mesSeleccionado;
		    var mesMostradoAnterior = mesSeleccionado - 1;
		    var mesMostradoPosterior = mesSeleccionado + 1;
		    var mesInicio = mesSeleccionado;
		    var mesFin = mesSeleccionado;

		    var anioMostrado = anioSeleccionado;

		    if(parseInt(semanaSeleccionada.substring(4,5)) == 1){
			 	if(parseInt(this.children[0].children[0].id) > 7){
					mesInicio = mesMostradoAnterior;
			 		if(mesInicio == 0){
			 			mesInicio = 12;
			 			anioInicio = anioSeleccionado - 1;
			 		}
			 	}
		    }else if(parseInt(semanaSeleccionada.substring(4,5)) >= 5){
			 	if(parseInt(this.children[6].children[0].id) < 7){
			 		mesFin = mesMostradoPosterior;
			 		if(mesFin == 13){
			 			mesFin = 1;
			 			anioFin = anioSeleccionado + 1;
			 		}
			 	}
		    }

		    var semanaFechaInicio = anioInicio+'-'+mesInicio+'-'+this.children[0].children[0].id+' '+horaActual+':'+minutoSeleccionado+':'+segundoSeleccionado;
			var semanaFechaFin = anioFin+'-'+mesFin+'-'+this.children[6].children[0].id+' '+horaActual+':'+minutoSeleccionado+':'+segundoSeleccionado;

			//alert('ENVIAR: Semana '+this.id+'\n Desde:'+semanaFechaInicio+'\n'+' Hasta:'+semanaFechaFin);
			
			$("#class-week-work").load('load-week-voucher.php',{semanaFechaInicio,semanaFechaFin});
			

			document.getElementById('class-week-work').style.visibility = "visible";


			var daysForWeek = document.getElementsByClassName('style-week');
			//alert(daysForWeek.id+' '+daysForWeek.length);
	      	 for (var i = 0; i < daysForWeek.length; i++) {
	      	 	daysForWeek[i].style.backgroundColor = "";
			}
			//alert('CLICK: '+this.id);
			this.style.backgroundColor = "#ff5555";
			//alert('CLICK: '+this.children[1].children[0].id);
		    	// document.getElementById('dayDateWeek1').innerHTML = this.children[1].children[0].id;
		    	// document.getElementById('dayDateWeek2').innerHTML = this.children[2].children[0].id;
		    	// document.getElementById('dayDateWeek3').innerHTML = this.children[3].children[0].id;
		    	// document.getElementById('dayDateWeek4').innerHTML = this.children[4].children[0].id;
		    	// document.getElementById('dayDateWeek5').innerHTML = this.children[5].children[0].id;
		    	// document.getElementById('dayDateWeek6').innerHTML = this.children[6].children[0].id;
		    scrollSmoothToBottom();
		})

/*	--->		CARGAR EL HORARIO SEMANAL			*/
       //$("#class-week-work").load('load-week-voucher.php',{mesSeleccionado,anioSeleccionado,fechaSeleccionada});

/*	--->		CLICK EN EL PERDIODO DEL HORARIO SEMANAL			*/
       $('#class-week-work').on('click', '.style-hour-voucher', function(){
       		emergente1.style.display = "block";
       		document.getElementById('seleccionMateria').addEventListener('change', function() {
			  emergente1.style.display = "none";
			  emergente2.style.display = "block";
			});



            var daysForWeek = document.getElementsByClassName('dayDateWeek');
		    var mesMostrado = mesSeleccionado;
		    var anioMostrado = anioSeleccionado;

		    if(parseInt(semanaSeleccionada.substring(4,5)) == 1){
			 	if(parseInt(daysForWeek[this.id.substring(7,8)-1].textContent) > 7){
					mesMostrado = mesSeleccionado - 1;
			 		if(mesMostrado == 0){
			 			mesMostrado = 12;
			 			anioMostrado = anioSeleccionado - 1;
			 		}
			 	}
		    }else if(parseInt(semanaSeleccionada.substring(4,5)) >= 5){
			 	if(parseInt(daysForWeek[this.id.substring(7,8)-1].textContent) < 7){
			 		mesMostrado = mesSeleccionado + 1;
			 		if(mesMostrado == 13){
			 			mesMostrado = 1;
			 			anioMostrado = anioSeleccionado + 1;
			 		}
			 	}
		    }
		    var mesMostradoTexto = mesMostrado;
		    if(mesMostrado < 10){
		    		mesMostradoTexto = '0'+mesMostrado;
		    }
		    
			var diaMostrado = daysForWeek[this.id.substring(7,8)-1].textContent;
			// if(parseInt(daysForWeek[this.id.substring(7,8)-1].textContent) < 10)
			// {
			// 	diaMostrado = '0'+diaMostrado;
			// }
		    /*alert(
		    		'inicia:   '+
		    		anioMostrado+
		    		'-'+
		    		mesMostradoTexto+
		    		'-'+
					diaMostrado+
		    		'T'+
		    		this.parentNode.textContent.replace(/\s/g, "").substring(0,5)+':00'+
		    		'\n'+
		    		'acaba: '+
		    		anioMostrado+
		    		'-'+
		    		mesMostradoTexto+
		    		'-'+
		    		diaMostrado+
		    		'T'+
		    		this.parentNode.textContent.replace(/\s/g, "").substring(6,11)+':00'
		    	);*/
		})


	  Date.prototype.getDayNumberRelease = function(){
	  var d = new Date(Date.UTC(this.getFullYear(), this.getMonth(), this.getDate()));
	  var dayNum = d.getUTCDay() || 7;
	  return dayNum
	  };

	  Date.prototype.getDayNumberCustom = function(yearFull,monthNumber,dateNumber){
		  var d = new Date(Date.UTC(yearFull, monthNumber, dateNumber));
		  var dayNum = d.getUTCDay() || 7;
		  return dayNum
	  };

		function vfechaSeleccionada() {
		  return anioSeleccionado+'-'+mesSeleccionado+'-'+diaSeleccionado+' '+horaActual+':'+minutoSeleccionado+':'+segundoSeleccionado;
		}

		var emergente1 = document.getElementById("preRegistro");
		var emergente2 = document.getElementById("voucher");
		//var btn = document.getElementById("myBtn");

		var span1 = document.getElementsByClassName("close1")[0];
		var span2 = document.getElementsByClassName("close2")[0];


		//var select = document.getElementsById("seleccionMateria");
		// btn.onclick = function() {
		//   modal.style.display = "block";
		// }

		span1.onclick = function() {
		  emergente1.style.display = "none";
		}
		span2.onclick = function() {
		  emergente2.style.display = "none";
		}
		window.onclick = function(event) {
		  if (event.target == emergente1) {
		    emergente1.style.display = "none";
		  }
		  if (event.target == emergente2) {
		    emergente2.style.display = "none";
		  }
		}
	});	

	scrollingElement = (document.scrollingElement || document.body)
	function scrollToBottom () {
	   scrollingElement.scrollTop = scrollingElement.scrollHeight;
	}

	function scrollToTop (id) {
	   scrollingElement.scrollTop = 0;
	}

	//Require jQuery
	function scrollSmoothToBottom (id) {
	   $(scrollingElement).animate({
	      scrollTop: document.body.scrollHeight-(document.body.scrollHeight/1.5)
	   }, 300);
	}

	//Require jQuery
	function scrollSmoothToTop (id) {
	   $(scrollingElement).animate({
	      scrollTop: 0
	   }, 500);
	}



</script>
</body>
</html>