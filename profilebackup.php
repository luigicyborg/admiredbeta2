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
				<h3>Selecciona tu horario:</h3>
				<div class="style-cell-work">
					<month class="month">
						<week class="style-week-work-header">
							<cell-header>TIME</cell-header>
							<cell-header id="column-1"><div>L</div><div id="dayDateWeek1" class="dayDateWeek"></div></cell-header>
							<cell-header id="column-2"><div>M</div><div id="dayDateWeek2" class="dayDateWeek"></div></cell-header>
							<cell-header id="column-3"><div>X</div><div id="dayDateWeek3" class="dayDateWeek"></div></cell-header>
							<cell-header id="column-4"><div>J</div><div id="dayDateWeek4" class="dayDateWeek"></div></cell-header>
							<cell-header id="column-5"><div>V</div><div id="dayDateWeek5" class="dayDateWeek"></div></cell-header>
							<cell-header id="column-6"><div>S</div><div id="dayDateWeek6" class="dayDateWeek"></div></cell-header>
						</week>
						<week id="period-1" class="style-week-work">
							<cell-time>08:10-08:55</cell-time>
							<cell id="column-1" class="style-hour-voucher">   </cell>
							<cell id="column-2" class="style-hour-voucher">   </cell>
							<cell id="column-3" class="style-hour-voucher">   </cell>
							<cell id="column-4" class="style-hour-voucher">   </cell>
							<cell id="column-5" class="style-hour-voucher">   </cell>
							<cell id="column-6" class="style-hour-voucher">   </cell>
						</week>
						<week id="period-2" class="style-week-work">
							<cell-time>08:55-09:40</cell-time>
							<cell id="column-1" class="style-hour-voucher">   </cell>
							<cell id="column-2" class="style-hour-voucher">   </cell>
							<cell id="column-3" class="style-hour-voucher">   </cell>
							<cell id="column-4" class="style-hour-voucher">   </cell>
							<cell id="column-5" class="style-hour-voucher">   </cell>
							<cell id="column-6" class="style-hour-voucher">   </cell>
						</week>
						<week id="period-3" class="style-week-work">
							<cell-time>09:40-10:25</cell-time>
							<cell id="column-1" class="style-hour-voucher">   </cell>
							<cell id="column-2" class="style-hour-voucher">   </cell>
							<cell id="column-3" class="style-hour-voucher">   </cell>
							<cell id="column-4" class="style-hour-voucher">   </cell>
							<cell id="column-5" class="style-hour-voucher">   </cell>
							<cell id="column-6" class="style-hour-voucher">   </cell>
						</week>
						<week id="period-4" class="style-week-work">
							<cell-time>10:25-11:10</cell-time>
							<cell id="column-1" class="style-hour-voucher">   </cell>
							<cell id="column-2" class="style-hour-voucher">   </cell>
							<cell id="column-3" class="style-hour-voucher">   </cell>
							<cell id="column-4" class="style-hour-voucher">   </cell>
							<cell id="column-5" class="style-hour-voucher">   </cell>
							<cell id="column-6" class="style-hour-voucher">   </cell>
						</week>
						<week id="period-5" class="style-week-work">
							<cell-time>11:10-11:25</cell-time>
							<cell id="column-1" class="style-lounch-voucher"> R </cell>
							<cell id="column-2" class="style-lounch-voucher"> E </cell>
							<cell id="column-3" class="style-lounch-voucher"> C </cell>
							<cell id="column-4" class="style-lounch-voucher"> R </cell>
							<cell id="column-5" class="style-lounch-voucher"> E </cell>
							<cell id="column-6" class="style-lounch-voucher"> O </cell>
						</week>
						<week id="period-6" class="style-week-work">
							<cell-time>11:25-12:10</cell-time>
							<cell id="column-1" class="style-hour-voucher">   </cell>
							<cell id="column-2" class="style-hour-voucher">   </cell>
							<cell id="column-3" class="style-hour-voucher">   </cell>
							<cell id="column-4" class="style-hour-voucher">   </cell>
							<cell id="column-5" class="style-hour-voucher">   </cell>
							<cell id="column-6" class="style-hour-voucher">   </cell>
						</week>
						<week id="period-7" class="style-week-work">
							<cell-time>12:10-12:55</cell-time>
							<cell id="column-1" class="style-hour-voucher">   </cell>
							<cell id="column-2" class="style-hour-voucher">   </cell>
							<cell id="column-3" class="style-hour-voucher">   </cell>
							<cell id="column-4" class="style-hour-voucher">   </cell>
							<cell id="column-5" class="style-hour-voucher">   </cell>
							<cell id="column-6" class="style-hour-voucher">   </cell>
						</week>
						<week id="period-8" class="style-week-work">
							<cell-time>12:55-13:25</cell-time>
							<cell id="column-1" class="style-lounch-voucher"> A </cell>
							<cell id="column-2" class="style-lounch-voucher"> L </cell>
							<cell id="column-3" class="style-lounch-voucher"> M </cell>
							<cell id="column-4" class="style-lounch-voucher"> U </cell>
							<cell id="column-5" class="style-lounch-voucher"> E </cell>
							<cell id="column-6" class="style-lounch-voucher"> R </cell>
						</week>
						<week id="period-9" class="style-week-work">
							<cell-time>13:25-14:10</cell-time>
							<cell id="column-1" class="style-hour-voucher">   </cell>
							<cell id="column-2" class="style-hour-voucher">   </cell>
							<cell id="column-3" class="style-hour-voucher">   </cell>
							<cell id="column-4" class="style-hour-voucher">   </cell>
							<cell id="column-5" class="style-hour-voucher">   </cell>
							<cell id="column-6" class="style-hour-voucher">   </cell>
						</week>
						<week id="period-10" class="style-week-work">
							<cell-time>14:10-14:55</cell-time>
							<cell id="column-1" class="style-hour-voucher">   </cell>
							<cell id="column-2" class="style-hour-voucher">   </cell>
							<cell id="column-3" class="style-hour-voucher">   </cell>
							<cell id="column-4" class="style-hour-voucher">   </cell>
							<cell id="column-5" class="style-hour-voucher">   </cell>
							<cell id="column-6" class="style-hour-voucher">   </cell>
						</week>
					</month>
				</div>
			  </div>
		   </div>
		</div>
	</div>
</div>

<div id="contact">Contact</div>

<div id="contactForm">

  <h1>Keep in touch!</h1>
  <small>I'll get back to you as quickly as possible</small>
  
  <form action="#">
    <input placeholder="Name" type="text" required />
    <input placeholder="Email" type="email" required />
    <input placeholder="Subject" type="text" required />
    <textarea placeholder="Comment"></textarea>
    <input class="formBtn" type="submit" />
    <input class="formBtn" type="reset" />
  </form>
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

	  document.getElementById('textMonth').innerHTML = meses[mesSeleccionado-1]+' '+anioSeleccionado;

	  //document.getElementsById('class-week-work').style.visibility='visible';
	  //document.getElementsById('class-week-work').style.visibility='hidden';
	  //document.getElementsById('class-week-work').style.visibility = 'hidden';
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
	     document.getElementById('class-week-work').style.visibility = "hidden";
	  });
	  
	  demos= document.getElementsByClassName('style-hour-voucher');

		for (var i = 0; i < demos.length; i++) {
		    demos[i].addEventListener('click',redirect,false);
		}
		function redirect(e){
		    //e.target.parentNode.style.display = 'none';
		   var daysForWeek = document.getElementsByClassName('dayDateWeek');
		   //var daysForWeek = document.getElementsById('dayDateWeek1');

		   var mesMostrado = mesSeleccionado;
		   var anioMostrado = anioSeleccionado;

		   if(parseInt(semanaSeleccionada.substring(4,5)) == 1){
				if(parseInt(daysForWeek[e.target.id.substring(7,8)-1].textContent) > 7){
					mesMostrado = mesSeleccionado - 1;
					if(mesMostrado == 0){
						mesMostrado = 12;
						anioMostrado = anioSeleccionado - 1;
					}
				}
		   }else if(parseInt(semanaSeleccionada.substring(4,5)) >= 5){
				if(parseInt(daysForWeek[e.target.id.substring(7,8)-1].textContent) < 7){
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
			var diaMostrado = daysForWeek[e.target.id.substring(7,8)-1].textContent;
			if(parseInt(daysForWeek[e.target.id.substring(7,8)-1].textContent) < 10)
			{
				diaMostrado = '0'+diaMostrado;
			}
		    alert(
		    		'inicia:   '+
		    		anioMostrado+
		    		'-'+
		    		mesMostradoTexto+
		    		'-'+
					//document.getElementsByClassName('dayDateWeek'+e.target.id.substring(7,8)).textContent+
					//document.getElementsByClassName('cdayDateWeek1').id+
					diaMostrado+
		    		'T'+
		    		e.target.parentNode.textContent.replace(/\s/g, "").substring(0,5)+':00'+
		    		'\n'+
		    		'acaba: '+
		    		anioMostrado+
		    		'-'+
		    		mesMostradoTexto+
		    		'-'+
		    		diaMostrado+
		    		'T'+
		    		e.target.parentNode.textContent.replace(/\s/g, "").substring(6,11)+':00'
		    		//+'\n'+daysForWeek[e.target.id.substring(7,8)-1].className
		    		// e.target.parentNode.id+
		    		// '-'+
		    		//e.target.id.substring(7,8)
		    	);
		}
		// function colourThis(e){

		// 	var daysForWeek = document.getElementsByClassName('style-week');
		// 	//alert(daysForWeek.id+' '+daysForWeek.length);
	 //      	 for (var i = 0; i < daysForWeek.length; i++) {
	 //      	 	daysForWeek[i].style.backgroundColor = "";
		// 	}
		// 	//console.log(e.target.parentNode.parentNode.id);
		// 	if(e.target.tagName == 'DIV'){
		//  		e.target.parentNode.parentNode.style.backgroundColor = "#ff5555";
		//  		semanaSeleccionada=e.target.parentNode.parentNode.id;
		//  		//alert(semanaSeleccionada.substring(4,5));
		// 	}
		// 	//alert('CLICK: '+semanaSeleccionada);
		//     var daysForWeek = document.getElementById(e.target.parentNode.parentNode.id).childNodes;
		//     	document.getElementById('dayDateWeek1').innerHTML = daysForWeek[1].children[0].id;
		//     	document.getElementById('dayDateWeek2').innerHTML = daysForWeek[2].children[0].id;
		//     	document.getElementById('dayDateWeek3').innerHTML = daysForWeek[3].children[0].id;
		//     	document.getElementById('dayDateWeek4').innerHTML = daysForWeek[4].children[0].id;
		//     	document.getElementById('dayDateWeek5').innerHTML = daysForWeek[5].children[0].id;
		//     	document.getElementById('dayDateWeek6').innerHTML = daysForWeek[6].children[0].id;
		// }

		$('#contents-month').on('click', '.style-week', function(){
			document.getElementById('class-week-work').style.visibility = "visible";
			//alert('CLICK: '+this.id);
			semanaSeleccionada = this.id;
			var daysForWeek = document.getElementsByClassName('style-week');
			//alert(daysForWeek.id+' '+daysForWeek.length);
	      	 for (var i = 0; i < daysForWeek.length; i++) {
	      	 	daysForWeek[i].style.backgroundColor = "";
			}
			//alert('CLICK: '+this.id);
			this.style.backgroundColor = "#ff5555";
			//alert('CLICK: '+this.children[1].children[0].id);
		    	document.getElementById('dayDateWeek1').innerHTML = this.children[1].children[0].id;
		    	document.getElementById('dayDateWeek2').innerHTML = this.children[2].children[0].id;
		    	document.getElementById('dayDateWeek3').innerHTML = this.children[3].children[0].id;
		    	document.getElementById('dayDateWeek4').innerHTML = this.children[4].children[0].id;
		    	document.getElementById('dayDateWeek5').innerHTML = this.children[5].children[0].id;
		    	document.getElementById('dayDateWeek6').innerHTML = this.children[6].children[0].id;
		    	scrollSmoothToBottom();

		})


		// $('#contents-month').on('click', '.style-week', function(){
		// 	alert('CLICK: '+semanaSeleccionada);
		// 	var daysForWeek = document.getElementsByClassName('style-week');
		// 	//alert(daysForWeek.id+' '+daysForWeek.length);
	 //      	 for (var i = 0; i < daysForWeek.length; i++) {
	 //      	 	//console.log(daysForWeek[i].id);
		//     	daysForWeek[i].addEventListener('click',colourThis,false);
		// 	}

		// })

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
	      scrollTop: document.body.scrollHeight-(document.body.scrollHeight/1.6)
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
