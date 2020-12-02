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
<link href='//fonts.googleapis.com/css?family=Signika:400,600' rel='stylesheet' type='text/css'>
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

<?php

// Genero: ProgramasProgramacion.com
echo "<month class=\"month\">\n";
echo "						<week class=\"style-week-work-header\">\n";
echo "							<cell-header>TIME</cell-header>\n";
echo "							<cell-header id=\"column-1\"><div>LUN</div><div id=\"dayDateWeek1\"></div></cell-header>\n";
echo "							<cell-header id=\"column-2\"><div>MAR</div><div id=\"dayDateWeek2\"></div></cell-header>\n";
echo "							<cell-header id=\"column-3\"><div>MIE</div><div id=\"dayDateWeek3\"></div></cell-header>\n";
echo "							<cell-header id=\"column-4\"><div>JUE</div><div id=\"dayDateWeek4\"></div></cell-header>\n";
echo "							<cell-header id=\"column-5\"><div>VIE</div><div id=\"dayDateWeek5\"></div></cell-header>\n";
echo "							<cell-header id=\"column-6\"><div>SAB</div><div id=\"dayDateWeek6\"></div></cell-header>\n";
echo "						</week>\n";
echo "						<week id=\"period-1\" class=\"style-week-work\">\n";
echo "							<cell-time><span id=\"startHour\">08:10</span>-<span id=\"endHour\">08:55</span></cell-time>\n";
echo "							<cell id=\"column-1\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-2\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-3\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-4\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-5\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-6\" class=\"style-hour-voucher\">   </cell>\n";
echo "						</week>\n";
echo "						<week id=\"period-2\" class=\"style-week-work\">\n";
echo "							<cell-time>08:55-09:40</cell-time>\n";
echo "							<cell id=\"column-1\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-2\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-3\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-4\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-5\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-6\" class=\"style-hour-voucher\">   </cell>\n";
echo "						</week>\n";
echo "						<week id=\"period-3\" class=\"style-week-work\">\n";
echo "							<cell-time>09:40-10:25</cell-time>\n";
echo "							<cell id=\"column-1\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-2\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-3\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-4\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-5\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-6\" class=\"style-hour-voucher\">   </cell>\n";
echo "						</week>\n";
echo "						<week id=\"period-4\" class=\"style-week-work\">\n";
echo "							<cell-time>10:25-11:10</cell-time>\n";
echo "							<cell id=\"column-1\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-2\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-3\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-4\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-5\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-6\" class=\"style-hour-voucher\">   </cell>\n";
echo "						</week>\n";
echo "						<week id=\"period-5\" class=\"style-week-work\">\n";
echo "							<cell-time>11:10-11:25</cell-time>\n";
echo "							<cell id=\"column-1\" class=\"style-lounch-voucher\"> R </cell>\n";
echo "							<cell id=\"column-2\" class=\"style-lounch-voucher\"> E </cell>\n";
echo "							<cell id=\"column-3\" class=\"style-lounch-voucher\"> C </cell>\n";
echo "							<cell id=\"column-4\" class=\"style-lounch-voucher\"> R </cell>\n";
echo "							<cell id=\"column-5\" class=\"style-lounch-voucher\"> E </cell>\n";
echo "							<cell id=\"column-6\" class=\"style-lounch-voucher\"> O </cell>\n";
echo "						</week>\n";
echo "						<week id=\"period-6\" class=\"style-week-work\">\n";
echo "							<cell-time>11:25-12:10</cell-time>\n";
echo "							<cell id=\"column-1\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-2\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-3\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-4\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-5\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-6\" class=\"style-hour-voucher\">   </cell>\n";
echo "						</week>\n";
echo "						<week id=\"period-7\" class=\"style-week-work\">\n";
echo "							<cell-time>12:10-12:55</cell-time>\n";
echo "							<cell id=\"column-1\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-2\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-3\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-4\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-5\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-6\" class=\"style-hour-voucher\">   </cell>\n";
echo "						</week>\n";
echo "						<week id=\"period-8\" class=\"style-week-work\">\n";
echo "							<cell-time>12:55-13:25</cell-time>\n";
echo "							<cell id=\"column-1\" class=\"style-lounch-voucher\"> A </cell>\n";
echo "							<cell id=\"column-2\" class=\"style-lounch-voucher\"> L </cell>\n";
echo "							<cell id=\"column-3\" class=\"style-lounch-voucher\"> M </cell>\n";
echo "							<cell id=\"column-4\" class=\"style-lounch-voucher\"> U </cell>\n";
echo "							<cell id=\"column-5\" class=\"style-lounch-voucher\"> E </cell>\n";
echo "							<cell id=\"column-6\" class=\"style-lounch-voucher\"> R </cell>\n";
echo "						</week>\n";
echo "						<week id=\"period-9\" class=\"style-week-work\">\n";
echo "							<cell-time>13:25-14:10</cell-time>\n";
echo "							<cell id=\"column-1\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-2\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-3\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-4\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-5\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-6\" class=\"style-hour-voucher\">   </cell>\n";
echo "						</week>\n";
echo "						<week id=\"period-10\" class=\"style-week-work\">\n";
echo "							<cell-time>14:10-14:55</cell-time>\n";
echo "							<cell id=\"column-1\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-2\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-3\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-4\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-5\" class=\"style-hour-voucher\">   </cell>\n";
echo "							<cell id=\"column-6\" class=\"style-hour-voucher\">   </cell>\n";
echo "						</week>\n";
echo "					</month>\n";

?>
</div>
			</div>

		</div>
	</div>
<!-- 	<div class="wrap">
		<div class="login-main wthree">
			<div class="login">
				<form action="http://localhost/test4/index.php" method="post">
				 <input type="hidden" name="variable1" value="" />
				 <input type="hidden" name="variable2" value="$_SESSION['login_user_sys']" />
				 <input id="button-admired" type="submit" name="admired" value="Admired">
				</form>
			<h3>Bienvenid@ aal sistema  <i></i></h3>
			<div class="clear"> </div>
				<h4><a href="logout.php"> Cerrar sesión</a></h4>
			</div>
		</div>
	</div> -->
</div>
<!--header end here-->
<!--copy rights end here-->
<div class="copy-rights w3l">		 	
	<p>© <?php echo date("Y");?> <a href="http://obedalvarado.pw/" target="_blank">LuigiBps</a>  Todos los derechos reservados | Diseñado por  <a href="http://w3layouts.com/" target="_blank">LuigiBps</a> </p>		 	
</div>
<!--copyrights start here-->
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

	  var meses = new Array ("ENERO","FEBRERO","MARZO","ABRIL","MAYO","JUNIO","JULIO","AGOSTO","SEPTIEMBRE","OCTUBRE","NOVIEMBRE","DICIEMBRE");

	  var diasDeLaSemana = new Array ("LUN","MAR","MIE","JUE","VIE","SAB","DOM");

	  var fechaSeleccionada = vfechaSeleccionada();

	  $("#contents-month").load('load-calendar.php',{mesSeleccionado,anioSeleccionado,fechaSeleccionada});
	  document.getElementById('textMonth').innerHTML = meses[mesSeleccionado-1]+' '+anioSeleccionado;
	  $("#prevMonth").click(function(){
	  	mesSeleccionado--;
	  	if(mesSeleccionado<1){
	  		anioSeleccionado--;
	  		mesSeleccionado = 12;
	    }
	    fechaSeleccionada = vfechaSeleccionada();
	     $("#contents-month").load('load-calendar.php',{mesSeleccionado,anioSeleccionado,fechaSeleccionada});
	    document.getElementById('textMonth').innerHTML = meses[mesSeleccionado-1]+' '+anioSeleccionado;
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
	  });
	  
	  demos= document.getElementsByClassName('style-hour-voucher');

		for (var i = 0; i < demos.length; i++) {
		    demos[i].addEventListener('click',redirect,false);
		}
		function redirect(e){
		    e.target.parentNode.style.display = 'none';
		    alert(
		    		e.target.parentNode.id+
		    		'-'+
		    		e.target.id
		    	);
		}
		function colourThis(e){

			var daysForWeek = document.getElementsByClassName('style-week');
			//alert(daysForWeek.id+' '+daysForWeek.length);
	      	 for (var i = 0; i < daysForWeek.length; i++) {
	      	 	daysForWeek[i].style.backgroundColor = "";
			}
			//console.log(e.target.parentNode.parentNode.id);
			if(e.target.tagName == 'DIV'){
		 		e.target.parentNode.parentNode.style.backgroundColor = "#ff5555";
			}
		    var daysForWeek = document.getElementById(e.target.parentNode.parentNode.id).childNodes;
		    	document.getElementById('dayDateWeek1').innerHTML = daysForWeek[1].children[0].id;
		    	document.getElementById('dayDateWeek2').innerHTML = daysForWeek[2].children[0].id;
		    	document.getElementById('dayDateWeek3').innerHTML = daysForWeek[3].children[0].id;
		    	document.getElementById('dayDateWeek4').innerHTML = daysForWeek[4].children[0].id;
		    	document.getElementById('dayDateWeek5').innerHTML = daysForWeek[5].children[0].id;
		    	document.getElementById('dayDateWeek6').innerHTML = daysForWeek[6].children[0].id;
		}

		$('#contents-month').on('click', '.style-week', function(){
			var daysForWeek = document.getElementsByClassName('style-week');
			//alert(daysForWeek.id+' '+daysForWeek.length);
	      	 for (var i = 0; i < daysForWeek.length; i++) {
	      	 	//console.log(daysForWeek[i].id);
		    	daysForWeek[i].addEventListener('click',colourThis,false);
			}
		})

	  Date.prototype.getWeekNumberRealease = function(){
	  var d = new Date(Date.UTC(this.getFullYear(), this.getMonth(), this.getDate()));
	  var dayNum = d.getUTCDay() || 7;
	  d.setUTCDate(d.getUTCDate() + 4 - dayNum);
	  var yearStart = new Date(Date.UTC(d.getUTCFullYear(),0,1));
	  return Math.ceil((((d - yearStart) / 86400000) + 1)/7)
	  };
	 // alert(new Date().getWeekNumber()+' ');

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
	});	
</script>
</body>
</html>