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

<script src="js/jquery-1.9.1.min.js" type="text/javascript">
</script>
<script src="js/FileSaver.js-master/dist/FileSaver.min.js" type="text/javascript">
</script>
<script src="js/dom-to-image-master/dist/dom-to-image.min.js" type="text/javascript">
</script>

<script type="text/javascript" src="js/html2canvas.min.js"></script>
</head>
<body>
<!--header start here-->
<?php
	if(isset($_REQUEST['info-datetime'])){
		echo '<input class="date-time-for-load" type="hidden" value="'.$_REQUEST['info-datetime'].'" disabled/>';	
	}
	
?>

<div class="header agile">
	<div class="logo-sas-main"><img src="media/Logo-SAS-cuadrado-reduced.png" class="logo-sas-main" alt="sas">
		</div>
		<h3 class="title-sas-main">GESTION DE ACCESO A INTERNET</h3>

	<div class="wrap">
		<div class="login-main wthree">
			<div class="login">
				<h3>Selecciona la semana:</h3>
				<div class="style-cell">
					 <month class="month">
						<week class="style-month-header">
							<cell-header>
								<a href="#" id="prevMonth">ANT</a>
							</cell-header>
							<cell-header id="textMonth">
								
							</cell-header>
							<cell-header>
								<a href="#" id="nextMonth">SIG</a>
							</cell-header>
						</week>
					</month>
					<div class="contentWrapper" id="contents-month">
						
					</div>
				</div>
			 <div id="class-week-work">

			  </div>
			  	<input id ="sessionUser" type="hidden" value="<?php echo $login_session?>" name="">
					
					<div id="preLimite" class="modal0">

					  <!-- Modal content -->
					   
					</div>

					<div id="preRegistro" class="modal1">

					  <!-- Modal content -->

					</div>
					<!-- The Modal -->
					<div id="voucherCountainer" class="modal2">
					  <!-- Modal content -->
					    
					</div>
					<!-- The Modal -->
					<div id="voucherViewer" class="modal3">
					  <!-- Modal content -->
					    
					</div>


			    <!-- END POPUP DIV -->
			    <a href='logout.php'>Cerrar sesion.</a>
		   </div>
		</div>
	</div>
</div>

<div class="copy-rights w3l">		 	
	<p>© <?php echo date("Y");?> <a href="http://obedalvarado.pw/" target="_blank">RiesgoCERO</a>  Todos los derechos reservados | Diseñado por  <a href="http://w3layouts.com/" target="_blank">RiesgoCERO</a> </p>		 	
</div>
<script type="text/javascript">
	$(document).ready(function(){

		var indice = 1;

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

	  var materia = '0';
	  var idClaseSeleccionado = 0;
	  var idHorasPickeadasSeleccion = 0;
	  var numeroPeriodoID = 0;

	  var idAulaCodApsElementSelected = 0;

	  var dominioDelUsuario = '@saintandrews.edu.bo';
	  dominioDelUsuario = dominioDelUsuario.toUpperCase();
	  var nombreDelVoucher = 'FechaActual_USUARIO';


	  var extenciondeVoucher = '.png';

	  var idVoucherForDelete = 0;

	  var d = new Date();

	  var datestring = d.getFullYear().toString() + (d.getMonth()+1).toString() + d.getDate().toString() + d.getHours().toString() + d.getMinutes().toString() + d.getSeconds().toString();

	  var meses = new Array ("ENERO","FEBRERO","MARZO","ABRIL","MAYO","JUNIO","JULIO","AGOSTO","SEPTIEMBRE","OCTUBRE","NOVIEMBRE","DICIEMBRE");

	  var diasDeLaSemana = new Array ("LUN","MAR","MIE","JUE","VIE","SAB","DOM");

	  var fechaSeleccionada = vfechaSeleccionada();

	  var nameSessionUser = document.getElementById("sessionUser").value;


	  var limiteVouchersSeleccionado = 1;


	  $("#preLimite").load('load-limitVouchers.php');


	  $("#preRegistro").load('load-asignatures.php',{nameSessionUser});

	  //alert(nameSessionUser);

	  $("#contents-month").load('load-calendar.php',{mesSeleccionado,anioSeleccionado,fechaSeleccionada});



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

		    scrollSmoothToBottom();
		})
				  
/*	--->		CARGAR EL HORARIO SEMANAL			*/
       //$("#class-week-work").load('load-week-voucher.php',{mesSeleccionado,anioSeleccionado,fechaSeleccionada});
			


/*	--->		CLICK EN EL PERDIODO DEL HORARIO SEMANAL			*/
       $('#class-week-work').on('click', '.style-hour-voucher', function(){

      


			d = new Date();

			datestring = d.getFullYear().toString() + (d.getMonth()+1).toString() + d.getDate().toString() + d.getHours().toString() + d.getMinutes().toString() + d.getSeconds().toString();
			//alert(datestring);

     		//alert(this.parentNode.id);	
     		//alert(this.parentNode.id.substring(7,8));	
     		//alert(this.children[0].value);

			numeroPeriodoID = this.parentNode.id.substring(this.parentNode.id.indexOf("-")+1,this.parentNode.id.length);
     		emergente0.style.display = "block";


     		//emergente1.style.display = "block";

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

   			var fechaPickeadaTexto = anioMostrado + "-" + mesMostradoTexto + "-" + diaMostrado;

   			var fechaPickeada1 = fechaPickeadaTexto + " " + this.parentNode.textContent.replace(/\s/g, "").substring(0,5)+':00';
			var fechaPickeada2 = fechaPickeadaTexto + " " + this.parentNode.textContent.replace(/\s/g, "").substring(6,11)+':00';


			document.getElementById('seleccionLimite').addEventListener('change', 
				function() {

					var e = document.getElementById('seleccionLimite');
					limiteVouchersSeleccionado = e.options[e.selectedIndex].text;
					emergente0.style.display = "none";	
					emergente1.style.display = "block";	

			               });




			document.getElementById('seleccionMateria').addEventListener('change', 
				function() {
					var e = document.getElementById('seleccionMateria');
					var idClaseElement = document.getElementById('comboBoxClases_'+e.selectedIndex);
					var idAulaCodApsElement = document.getElementById('comboBoxAulas_'+e.selectedIndex);
					var idHorasPickeadas = document.getElementById('idHorasPickeadas_'+numeroPeriodoID);
					//var idHorasPickeadas = document.getElementById('idHorasPickeadas_1');

					//var idClaseElement = document.getElementById('comboBoxClases_0');
					idClaseSeleccionado = idClaseElement.value;
					//alert(idClaseSeleccionado);
					idAulaCodApsElementSelected = idAulaCodApsElement.value;
					//alert(idAulaCodApsElementSelected);
					idHorasPickeadasSeleccion = idHorasPickeadas.value;
					//alert(e.selectedIndex);
					//alert(idClaseSeleccionado);
					materia = e.options[e.selectedIndex].text;


			        emergente1.style.display = "none";

					nameSessionUser = nameSessionUser.toUpperCase();
					nombreDelVoucher = datestring+'_'+nameSessionUser.replace(dominioDelUsuario,'')+extenciondeVoucher;


					$("#voucherCountainer").load('load-vouchers.php',
					{
						fechaPickeada1,
						fechaPickeada2,
						idClaseSeleccionado,
						fechaSeleccionada, 						
						idAulaCodApsElementSelected,
						idHorasPickeadasSeleccion,
						limiteVouchersSeleccionado,
						nombreDelVoucher					
					});
			        	emergente2.style.display = "block";
			});	 
		})

/*	--->		CLICK EN EL PERDIODO DEL HORARIO SEMANAL			*/
       $('#class-week-work').on('click', '.style-hour-exist-voucher', function(){

     
     		//alert(this.children[0].value+"-----------------sdasdasd");
     		var idVoucherFind = this.children[0].value;

     		idVoucherForDelete = idVoucherFind;

     		$("#voucherViewer").load('load-VouchersViewer.php',{idVoucherFind});


			emergente3.style.display = "block";
		 
		})

	$('#voucherViewer').on('click', '#deleteButton', function(){
		var idVoucherData = new FormData();
		var idVoucherPicked = document.getElementById('idVoucherPicked').value;
		//alert(idVoucherPicked);
		var voucherNameFilePicked = document.getElementById('voucherNameFilePicked').value;
		//alert(voucherNameFilePicked);
		idVoucherData.append('id_Voucher', idVoucherPicked);
		idVoucherData.append('nameFile_Voucher', voucherNameFilePicked);
		$.ajax('deleteImageVoucher.php',
			{
			    	method: "POST",
			    	data: idVoucherData,
			    	processData: false,
			    	contentType: false,
			    	error:function(err){
				        console.error(err);
				    },
				    success:function(data){
				        console.log(data);
				    },
				    complete:function(){
				        console.log("Deleted finished.");
				    }

			});
		emergente3.style.display = "none";
		location.reload();
	});
				



	  $('#voucherCountainer').on('click', '#closeButton', function(){
			

			//voucherGenerated
			domtoimage.toBlob(document.getElementById('voucherGenerated'),{quality: 1.0})
			    .then(function(blob) {

			 //    nameSessionUser = nameSessionUser.toUpperCase();
				// nombreDelVoucher = datestring+'_'+nameSessionUser.replace(dominioDelUsuario,'')+extenciondeVoucher;
			    
			    //alert(nombreDelVoucher);
			    
			    var formData = new FormData();
			    //formData.append('nameImage', nombreDelVoucher);
			    formData.append('image', blob);
			    formData.append('fileName', nombreDelVoucher);
			    $.ajax('uploadImageVoucher.php',{
			    	method: "POST",
			    	data: formData,
			    	processData: false,
			    	contentType: false,
			    	error:function(err){
				        console.error(err);
				    },
				    success:function(data){
				        console.log(data);
				    },
				    complete:function(){
				        console.log("Request finished.");
				    }

			    });

			    window.saveAs(blob, nombreDelVoucher);

			});
	        async_function();
	  });
		


		//This function executes returns promise after 4 seconds 
		var second_function = function() { 
			console.log("Entered second function"); 
			return new Promise(resolve => { 
			    setTimeout(function() { 
			    resolve("\t\t This is second promise"); 
			    console.log("Returned second promise"); 

			    emergente2.style.display = "none"; 				//Cerrar
			    //$("#class-week-work").load('load-week-voucher.php',{semanaFechaInicio,semanaFechaFin});
			    location.reload();
			    }, 2000); 

			}); 
		}; 
		  
		var async_function = async function() { 
				  
		const second_promise= await second_function(); 
		
		} 
		  
	
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

		var emergente0 = document.getElementById("preLimite");
		var emergente1 = document.getElementById("preRegistro");
		var emergente2 = document.getElementById("voucherCountainer");
		var emergente3 = document.getElementById("voucherViewer");
		//var btn = document.getElementById("myBtn");


		var span1 = document.getElementsByClassName("close1")[0];
		var span2 = document.getElementsByClassName("close2")[0];
		var span3 = document.getElementsByClassName("close3")[0];



		
		window.onclick = function(event) {
		   if (event.target == emergente0) {
		    emergente0.style.display = "none";
		  }

		  if (event.target == emergente1) {
		    emergente1.style.display = "none";
		  }
		  if (event.target == emergente2) {
		    emergente2.style.display = "none";
		  }
		  if (event.target == emergente3) {
		    emergente3.style.display = "none";
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
	      scrollTop: document.body.scrollHeight-(document.body.scrollHeight/2.5)
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