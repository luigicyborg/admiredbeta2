<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>SAS ADMIRED</title>
    <!--<script src="js/admiredInitPage.js" type="text/javascript"></script>-->
    <script src="js/qrcode.js" type="text/javascript"></script>
</head>
<body>
		<?php

			$horas_squery=mysqli_query($con, "select valor from configuracion where tipo like 'horas'");
			$row = mysqli_fetch_assoc($horas_squery);
			$horas_config =$row['valor'];



			$materia= $_REQUEST['materia'];
			//echo "<h1>MATERIA: ".$materia."</h1>";

			$idClaseSeleccionado = $_REQUEST['idClaseSeleccionado'];
			//echo "<h1>ID CLASE: ".$idClaseSeleccionado."</h1>";
			$materia_query = mysqli_query(
										$con,
										 "
										 select 
										 	m.detalle 
										 from 
										 	clases as c 
										   ,materia as m
										 	where 
										 		c.id = ".$idClaseSeleccionado."
										 	and c.id_materia like m.id
										 	"
									  );

			
			
			$row = mysqli_fetch_assoc($materia_query);
			$nombreMateriaSeleccionado = $row['detalle'];
			//echo "<h1>ID CLASE: ".$idClaseSeleccionado."</h1>";


			$aulas_query = mysqli_query(
										$con,
										 "
										 select 
										 	au.curso
										 from 
										 	clases as c 
										   ,aulas as au
										 	where 
										 		c.id = ".$idClaseSeleccionado."
										 	and c.id_aula like au.id
										 	"
									  );

			$row = mysqli_fetch_assoc($aulas_query);
			$nombreAulaSeleccionada = $row['curso'];



			$idAulaCodApsElementSelected= $_REQUEST['idAulaCodApsElementSelected'];
			//echo "<h1>AULA COD APS: ".$idAulaCodApsElementSelected."</h1>";


			$idHorasPickeadasSeleccion= $_REQUEST['idHorasPickeadasSeleccion'];
			//echo "<h1>HORAS PICKEADAS: ".$idHorasPickeadasSeleccion."</h1>";


			$fechaSeleccionada= new Datetime($_REQUEST['fechaSeleccionada']);
			//echo "<h1>FECHA PICKEADA 1</h1>";
			//echo "<h1>".$fechaSeleccionada->format('Y-M-d h:i:s')."</h1>";
			//echo "<h1>ANIO= ".$fechaSeleccionada->format('Y')."</h1>";
			//echo "<h1>MES= ".$fechaSeleccionada->format('m')."</h1>";
			//echo "<h1>DIA= ".$fechaSeleccionada->format('d')."</h1>";
			//echo "<h1>HORA= ".$fechaSeleccionada->format('H')."</h1>";
			//echo "<h1>MINUTO= ".$fechaSeleccionada->format('i')."</h1>";
			$fechaPickeada1= new Datetime($_REQUEST['fechaPickeada1']);
			//echo "<h1>FECHA PICKEADA 1</h1>";
	//		echo "<h1>".$fechaPickeada1->format('Y-M-d h:i:s')."</h1>";
			//echo "<h1>ANIO= ".$fechaPickeada1->format('Y')."</h1>";
			//echo "<h1>MES= ".$fechaPickeada1->format('m')."</h1>";
			//echo "<h1>DIA= ".$fechaPickeada1->format('d')."</h1>";
			//echo "<h1>HORA= ".$fechaPickeada1->format('H')."</h1>";
			//echo "<h1>MINUTO= ".$fechaPickeada1->format('i')."</h1>";
			$fechaPickeada2= new Datetime($_REQUEST['fechaPickeada2']);
			//echo "<h1>FECHA PICKEADA 2</h1>";
	//		echo "<h1>".$fechaPickeada2->format('Y-M-d h:i:s')."</h1>";
			//echo "<h1>ANIO= ".$fechaPickeada2->format('Y')."</h1>";
			//echo "<h1>MES= ".$fechaPickeada2->format('m')."</h1>";
			//echo "<h1>DIA= ".$fechaPickeada2->format('d')."</h1>";
			//echo "<h1>HORA= ".$fechaPickeada2->format('H')."</h1>";
			//echo "<h1>MINUTO= ".$fechaPickeada2->format('i')."</h1>";
			
			$limiteVouchersSeleccionado= $_REQUEST['limiteVouchersSeleccionado'];
			//echo "<h1>FECHA PICKEADA 2</h1>";
			//echo "<h1>".$limiteVouchersSeleccionado."</h1>";
			//echo "<h1>ANIO= ".$fechaPickeada2->format('Y')."</h1>";
			//echo "<h1>MES= ".$fechaPickeada2->format('m')."</h1>";
			//echo "<h1>DIA= ".$fechaPickeada2->format('d')."</h1>";
			//echo "<h1>HORA= ".$fechaPickeada2->format('H')."</h1>";
			//echo "<h1>MINUTO= ".$fechaPickeada2->format('i')."</h1>";

			$nombreDelVoucher= $_REQUEST['nombreDelVoucher'];
			//echo "<h1>FECHA PICKEADA 2</h1>";
			//echo "<h1>".$limiteVouchersSeleccionado."</h1>";
			//echo "<h1>ANIO= ".$fechaPickeada2->format('Y')."</h1>";
			//echo "<h1>MES= ".$fechaPickeada2->format('m')."</h1>";
			//echo "<h1>DIA= ".$fechaPickeada2->format('d')."</h1>";
			//echo "<h1>HORA= ".$fechaPickeada2->format('H')."</h1>";
			//echo "<h1>MINUTO= ".$fechaPickeada2->format('i')."</h1>";

            $voucher= "";
            $data = '12345679ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            for($i = 0; $i < 5; $i++) {
                $voucher .= substr($data, (rand()%(strlen($data))), 1);
            }
            

   
			$horaInicio = $fechaPickeada1->format('H:i');
			$horaFin = $fechaPickeada2->format('H:i');
			$dia_week_array_text = array('DOMINGO','LUNES','MARTES','MIERCOLES','JUEVES','VIERNES','SABADO');
			$dia_week = $dia_week_array_text[$fechaPickeada1->format('w')];
			$month_array_text = array('ENE','FEB','MAR','ABR','MAY','JUN','JUL','AGO','SEP','OCT','NOV','DIC');
			$mes_texto = $month_array_text[intval($fechaPickeada1->format('m'))-1];
			//echo "<h1>DIA SEMANA: ".$fechaPickeada1->format('w')."</h1>";
			//echo "<h1>MES: ".$fechaPickeada1->format('m')."</h1>";
			$dia = $fechaPickeada1->format('d');
			$anio_4 = $fechaPickeada1->format('Y');
			$profesorNombre = str_replace('@SAINTANDREWS.EDU.BO','',strtoupper($login_session));
	
			$fecha_actual = new DateTime();

			$insert_voucher_query = "insert into vouchers (
													codigo
													, inicio
													, fin
													, id_clase
													, fecha
													, id_group_aps
													, estado
													, id_horas
													, number_session
													, imagen
												) values (
													'".$voucher."'
													,'".$fechaPickeada1->format('Y-m-d H:i:s')."'
													,'".$fechaPickeada2->format('Y-m-d H:i:s')."'
													 ,".$idClaseSeleccionado."
													 ,'".$fecha_actual->format('Y-m-d H:i:s')."'
													 , ".$horas_config."
													 ,'REGISTRADO'
													 ,".$idHorasPickeadasSeleccion."
													 ,".$limiteVouchersSeleccionado."
													 ,'".$nombreDelVoucher."'
													 ) ";

				if (mysqli_query($con, $insert_voucher_query)) {
				  //echo "New record created successfully";
				} else {
				  //echo "Error: " . $insert_voucher_query . "<br>" . mysqli_error($con);
				}
	            
							$insert_radius1_query = "insert into radcheck (
													username
													, attribute
													, op
													, value
												) values (
													'".$voucher."'
													,'Cleartext-Password'
													,':='
													 ,'".$voucher."'
													 ) ";

				if (mysqli_query($conrad, $insert_radius1_query)) {
				  echo "New record created successfully";
				} else {
				  echo "Error: " . $insert_radius1_query . "<br>" . mysqli_error($conrad);
				}
				

				/* adding the user to the default group defined */
	//                         $sql = "INSERT INTO usergroup values ('$username', '".$configValues['CONFIG_GROUP_NAME'].
	// 				"', '".$configValues['CONFIG_GROUP_PRIORITY']."')";
	//                         $res = $dbSocket->query($sql);

	// $insert_radius1_query = "insert into radcheck (
	// 												username
	// 												, attribute
	// 												, op
	// 												, value
	// 											) values (
	// 												'".$voucher."'
	// 												,'User-Password'
	// 												,'=='
	// 												 '".$voucher."'
	// 												 ) ";

	// 			if (mysqli_query($conrad, $insert_radius1_query)) {
	// 			  echo "New record created successfully";
	// 			} else {
	// 			  echo "Error: " . $insert_radius1_query . "<br>" . mysqli_error($conrad);
	// 			}
				$print_voucher.='<div id="style-voucher" class="style-voucher">';
					$print_voucher.='<label class="font-background-voucher">VOUCHER GENERADO EXITOSAMENTE</label>';
					$print_voucher.='<br/><button id="closeButton" class="button-copy">COPIAR Y CERRAR</button><br/><p></p>';
					$print_voucher.='<div id="logImage5" class="style-container-voucher">';
						$print_voucher.='<div id="voucherContainerImge" class="containerVoucher">';	
							$print_voucher.='<div id="voucherGenerated" class="tablagen">';

							  $print_voucher.='<div id="logImage3" class="fila">';
							    $print_voucher.='<div id="logImage1" class="col"><img src="media/Logo-SAS-cuadrado-reduced.png" class="img-logo-voucher" alt="sas"></div>';
							    $print_voucher.='<div id="logImage2" class="col"><div id="qrDIVcode" ></div></div>';
							  $print_voucher.='</div>';
							  $print_voucher.='<div class="fila0">';
								    $print_voucher.='<div class="col1">';
								    $print_voucher.='<label for="seleccionMateriaa"> USUARIO:</label>';
								    $print_voucher.='</div>';
								    $print_voucher.='<div class="col2"><input class="input-voucher-code" value="'.$voucher.'" disabled/>';
								    $print_voucher.='</div>';
							  $print_voucher.='</div>';
							  $print_voucher.='<div id="logImage4" class="fila0">';
								  $print_voucher.='<div class="col1">';
								    $print_voucher.='<label for="seleccionMateria"> PASSWORD:</label>';
								    $print_voucher.='</div>';
								    $print_voucher.='<div class="col2"><input id="qrCode" class="input-voucher-code" value="'.$voucher.'" disabled/>';
								    $print_voucher.='</div>';
							  $print_voucher.='</div>';
							 
							  $print_voucher.='<div class="fila1">';
							    $print_voucher.='<div class="col">DE: '.$horaInicio.' HASTA: '.$horaFin.'</div>';
							  $print_voucher.='</div>';
							   $print_voucher.='<div class="fila01">';
							    $print_voucher.='<div class="col1">MATERIA:</div>';
							    $print_voucher.='<div class="col2">'.$nombreMateriaSeleccionado.'</div>';
							  $print_voucher.='</div>';
							   $print_voucher.='<div class="fila01">';
							    $print_voucher.='<div class="col1">AULA:</div>';
							    $print_voucher.='<div class="col2">'.$nombreAulaSeleccionada.'</div>';
							  $print_voucher.='</div>';
							  $print_voucher.='<div class="fila1">';
							    $print_voucher.='<div class="col">202008071238_'.$profesorNombre.'</div>';
							    $print_voucher.='<div class="col">Vence: '.$dia_week.' '.$dia.'/'.$mes_texto.'/'.$anio_4.'</div>';
							  $print_voucher.='</div>';

							$print_voucher.='</div>';
						$print_voucher.='</div>';
							
						
					$print_voucher.='</div>';
					$print_voucher.='<span class="close2">&times;</span>';
				$print_voucher.='</div>';

			
			echo $print_voucher;

	
		?>
	<pre id="log"></pre>   
	<script type="text/javascript">
                      var i=1;
                      var qrcode = new QRCode(document.getElementById("qrDIVcode"), {
                      width : 80,
                      height : 80
                      });

                      function makeCode(){
                            var elText = document.getElementById("qrCode");        
                            if (!elText.value) {
                                alert("Input a text");
                                elText.focus();
                                return;
                            }
                            qrcode.makeCode(elText.value);
                      }
                      makeCode();
                 </script>

</body>
</html>


