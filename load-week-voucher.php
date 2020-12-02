<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>SAS ADMIRED</title>
</head>
<body>
	  <div class="calendar">
		<?php

			// SQL Query para completar la informacion del usuario
			$horas_squery=mysqli_query($con, "select valor from configuracion where tipo like 'horas'");
			$row = mysqli_fetch_assoc($horas_squery);
			$horas_config =$row['valor'];

			$horas_squery=mysqli_query($con, "select * from Horarios where id = ".$horas_config."");
			$row = mysqli_fetch_assoc($horas_squery);
			$horario_detalle =$row['detalle'];
			$horario_tipo =$row['tipo'];

			$horas_squery=mysqli_query($con, "select * from Horas where id_horario = ".$horas_config."");
			
			$corre_array=array();
			$horas_array = array();
			$tipos_horas_array = array();
			$num_horas_array = array();
			$cantidad_de_periodos = mysqli_num_rows($horas_squery);
			$ID_horas_array = array();
			//echo ">>>>>".$cantidad_de_periodos."<<<<<<";
			//echo '<br/>';
			//vfcrerersx$row = mysql_fetch_assoc($horas_squery);
			while($row = mysqli_fetch_assoc($horas_squery)){
			
				$corre_array[] = $row['numero'];
				$horas_array[] = substr($row['horaInicio'],0,5).'-'.substr($row['horaFin'],0,5);
				$tipos_horas_array[] = $row['tipo'];
				$num_horas_array[] = $row['num_tipo'];
				$ID_horas_array[] = $row['id'];
				//echo substr($row['horaInicio'],0,5).'-'.substr($row['horaFin'],0,5).'<br/>';
			}
			setlocale(LC_ALL,"es_ES");	
			$fecha_semana_inicio = new DateTime($_REQUEST["semanaFechaInicio"]);
			$fecha_semana_fin = new DateTime($_REQUEST["semanaFechaFin"]);
			$fecha_query_prepare_inicio = $fecha_semana_inicio->format('Y-m-d').' 00:00:00';
			$fecha_query_prepare_fin = $fecha_semana_fin->format('Y-m-d').' 23:59:59';

			//echo $fecha_query_prepare_inicio;
			//echo $fecha_query_prepare_fin;
			

			
			//echo '<h1>asdasdas'.$id_voucherss_array[0].'</h1>'; 

			$semana_array = array();
			$semana_texto_array = array();
			$fecha_dia_array = array();
			$semana_texto_array_header = array('DOM','LUN','MAR','MIE','JUE','VIE','SAB');
			//$fechaInicio=strtotime("25-02-2008");
			//$fechaFin=strtotime("01-04-2008");
			$fechaInicio=strtotime($fecha_semana_inicio->format('d-m-Y'));
			$fechaFin=strtotime($fecha_semana_fin->format('d-m-Y'));
			$indice=0;
			for($i=$fechaInicio; $i<=$fechaFin; $i+=86400){
			    //echo date("d-m-Y", $i)."<br>";
			    $semana_array[$indice] = substr(date("d-m-Y", $i),0,2);
			    $semana_texto_array[] = date("l", $i);
			    $fecha_dia_array[$indice] = date("Y-m-d", $i);
			    //echo date("w", $i)."<br>";
			    //echo substr(date("d-m-Y", $i),0,2)."<br>";
			    $indice++;
			}
		
				$class_week='<h3> Pulse sobre los periodos. </h3>';
				$class_week.='<div class="style-cell-work">';
				$class_week.='<month class="month">';
					$class_week.='<week class="style-week-work-header">';
						$class_week.='<cell-header>TIME</cell-header>';
						for($x = 1; $x <= 6; $x++):
							$class_week.='<cell-header id="column-'.($x+1).'"><div>'.$semana_texto_array_header[$x].'</div><div id="dayDateWeek'.($x+1).'" class="dayDateWeek">'.$semana_array[$x].'</div></cell-header>';
						endfor;
					$class_week.='</week>';
				$max_periods = sizeof($horas_array);   //TAMANO DE LA MATRIZ x 6
				$aux_number = 1;
				for($x = 0; $x < $max_periods; $x++):
					if($tipos_horas_array[$x]=='recreo'):
						$class_week.='<week id="period-'.$aux_number.'" class="style-lounch-work"><input id="idHorasPickeadas_'.($x+1).'" type="hidden" value="'.$ID_horas_array[$x].'" disabled/>';
							$class_week.='<cell-time>'.$horas_array[$x].'</cell-time>';	
							$class_week.='<cell id="column-1" class="style-playtime-voucher">   '.strtoupper($tipos_horas_array[$x]).'</cell>';
					
						$class_week.='</week>';
						$aux_number++;
					elseif($tipos_horas_array[$x]=='almuerzo'):
						$class_week.='<week id="period-'.$aux_number.'" class="style-lounch-work"><input id="idHorasPickeadas_'.($x+1).'" type="hidden" value="'.$ID_horas_array[$x].'" disabled/>';
							$class_week.='<cell-time>'.$horas_array[$x].'</cell-time>';
							$class_week.='<cell id="column-1" class="style-lounch-voucher">   '.strtoupper($tipos_horas_array[$x]).'</cell>';
						$class_week.='</week>';
						$aux_number++;
					else:
						$class_week.='<week id="period-'.$aux_number.'" class="style-week-work"><input id="idHorasPickeadas_'.($x+1).'" type="hidden" value="'.$ID_horas_array[$x].'" disabled/>';
							$class_week.='<cell-time>'.$horas_array[$x].'</cell-time>';
							$aux = $x + 1;
							$vouchers_squery=mysqli_query($con,
																"
																select 
																	v.id as id_voucher
																	,v.id_horas
																    ,h.*
																 from vouchers as v,
																				 usuario as u,
																				 login as l,
										                                         Horas as h
																	where 
										                            	
																		DATE_FORMAT(v.inicio,'%Y-%m-%d') = '".$fecha_dia_array[1]."'
										                                and DATE_FORMAT(v.fin,'%Y-%m-%d') = '".$fecha_dia_array[1]."'
										                            and u.id_user like l.id_usuario
										                            and l.email like '".$login_session."'
										                            and v.id_horas like h.id
										                            and h.id_horario = ".$horas_config."
										                            and h.numero = ".$aux."
																"
									);
							$row = mysqli_fetch_assoc($vouchers_squery);
							$row_id_cell =$row['id_voucher'];
							if(isset($row_id_cell)):
								$class_week.='<cell id="column-1" class="style-hour-exist-voucher">'.$num_horas_array[$x].'°P<input type="hidden" value="'.$row_id_cell.'" disabled></cell>';
							else:
								$class_week.='<cell id="column-1" class="style-hour-voucher">'.$num_horas_array[$x].'°P'.$row_id_cell.'<input type="hidden" value="FREE" disabled></cell>';
							endif;

							$vouchers_squery=mysqli_query($con,
																"
																select 
																	v.id as id_voucher
																	,v.id_horas
																    ,h.*
																 from vouchers as v,
																				 usuario as u,
																				 login as l,
										                                         Horas as h
																	where 
										                            	
																		DATE_FORMAT(v.inicio,'%Y-%m-%d') = '".$fecha_dia_array[2]."'
										                                and DATE_FORMAT(v.fin,'%Y-%m-%d') = '".$fecha_dia_array[2]."'
										                            and u.id_user like l.id_usuario
										                            and l.email like '".$login_session."'
										                            and v.id_horas like h.id
										                            and h.id_horario = ".$horas_config."
										                            and h.numero = ".$aux."
																		
																		"
									);
							$row = mysqli_fetch_assoc($vouchers_squery);
							$row_id_cell =$row['id_voucher'];
							if(isset($row_id_cell)):
								$class_week.='<cell id="column-2" class="style-hour-exist-voucher">'.$num_horas_array[$x].'°P<input type="hidden" value="'.$row_id_cell.'" disabled></cell>';
							else:
								$class_week.='<cell id="column-2" class="style-hour-voucher">'.$num_horas_array[$x].'°P'.$row_id_cell.'<input type="hidden" value="FREE" disabled></cell>';
							endif;

							$vouchers_squery=mysqli_query($con,
																"
																select 
																	v.id as id_voucher
																	,v.id_horas
																    ,h.*
																 from vouchers as v,
																				 usuario as u,
																				 login as l,
										                                         Horas as h
																	where 
										                            	
																		DATE_FORMAT(v.inicio,'%Y-%m-%d') = '".$fecha_dia_array[3]."'
										                                and DATE_FORMAT(v.fin,'%Y-%m-%d') = '".$fecha_dia_array[3]."'
										                            and u.id_user like l.id_usuario
										                            and l.email like '".$login_session."'
										                            and v.id_horas like h.id
										                            and h.id_horario = ".$horas_config."
										                            and h.numero = ".$aux."
																		
																		"
									);
							$row = mysqli_fetch_assoc($vouchers_squery);
							$row_id_cell =$row['id_voucher'];
							if(isset($row_id_cell)):
								$class_week.='<cell id="column-3" class="style-hour-exist-voucher">'.$num_horas_array[$x].'°P<input type="hidden" value="'.$row_id_cell.'" disabled></cell>';
							else:
								$class_week.='<cell id="column-3" class="style-hour-voucher">'.$num_horas_array[$x].'°P'.$row_id_cell.'<input type="hidden" value="FREE" disabled></cell>';
							endif;
							$vouchers_squery=mysqli_query($con,
																"
																select 
																	v.id as id_voucher
																	,v.id_horas
																    ,h.*
																 from vouchers as v,
																				 usuario as u,
																				 login as l,
										                                         Horas as h
																	where 
										                            	
																		DATE_FORMAT(v.inicio,'%Y-%m-%d') = '".$fecha_dia_array[4]."'
										                                and DATE_FORMAT(v.fin,'%Y-%m-%d') = '".$fecha_dia_array[4]."'
										                            and u.id_user like l.id_usuario
										                            and l.email like '".$login_session."'
										                            and v.id_horas like h.id
										                            and h.id_horario = ".$horas_config."
										                            and h.numero = ".$aux."
																		
																		"
									);
							$row = mysqli_fetch_assoc($vouchers_squery);
							$row_id_cell =$row['id_voucher'];
							if(isset($row_id_cell)):
								$class_week.='<cell id="column-4" class="style-hour-exist-voucher">'.$num_horas_array[$x].'°P<input type="hidden" value="'.$row_id_cell.'" disabled></cell>';
							else:
								$class_week.='<cell id="column-4" class="style-hour-voucher">'.$num_horas_array[$x].'°P'.$row_id_cell.'<input type="hidden" value="FREE" disabled></cell>';
							endif;
							$vouchers_squery=mysqli_query($con,
																"
																select 
																	v.id as id_voucher
																	,v.id_horas
																    ,h.*
																 from vouchers as v,
																				 usuario as u,
																				 login as l,
										                                         Horas as h
																	where 
										                            	
																		DATE_FORMAT(v.inicio,'%Y-%m-%d') = '".$fecha_dia_array[5]."'
										                                and DATE_FORMAT(v.fin,'%Y-%m-%d') = '".$fecha_dia_array[5]."'
										                            and u.id_user like l.id_usuario
										                            and l.email like '".$login_session."'
										                            and v.id_horas like h.id
										                            and h.id_horario = ".$horas_config."
										                            and h.numero = ".$aux."
																		
																		"
									);
							$row = mysqli_fetch_assoc($vouchers_squery);
							$row_id_cell =$row['id_voucher'];
							if(isset($row_id_cell)):
								$class_week.='<cell id="column-5" class="style-hour-exist-voucher">'.$num_horas_array[$x].'°P<input type="hidden" value="'.$row_id_cell.'" disabled></cell>';
							else:
								$class_week.='<cell id="column-5" class="style-hour-voucher">'.$num_horas_array[$x].'°P'.$row_id_cell.'<input type="hidden" value="FREE" disabled></cell>';
							endif;
							$vouchers_squery=mysqli_query($con,
																"
																select 
																	v.id as id_voucher
																	,v.id_horas
																    ,h.*
																 from vouchers as v,
																				 usuario as u,
																				 login as l,
										                                         Horas as h
																	where 
										                            	
																		DATE_FORMAT(v.inicio,'%Y-%m-%d') = '".$fecha_dia_array[6]."'
										                                and DATE_FORMAT(v.fin,'%Y-%m-%d') = '".$fecha_dia_array[6]."'
										                            and u.id_user like l.id_usuario
										                            and l.email like '".$login_session."'
										                            and v.id_horas like h.id
										                            and h.id_horario = ".$horas_config."
										                            and h.numero = ".$aux."
																		
																		"
									);
							$row = mysqli_fetch_assoc($vouchers_squery);
							$row_id_cell =$row['id_voucher'];
							if(isset($row_id_cell)):
								$class_week.='<cell id="column-6" class="style-hour-exist-voucher">'.$num_horas_array[$x].'°P<input type="hidden" value="'.$row_id_cell.'" disabled></cell>';
							else:
								$class_week.='<cell id="column-6" class="style-hour-voucher">'.$num_horas_array[$x].'°P'.$row_id_cell.'<input type="hidden" value="FREE" disabled></cell>';
							endif;
						$class_week.='</week>';
						$aux_number++;
					endif;					
				endfor;
				$class_week.='</month>';
				$class_week.='</div>';
				echo $class_week;


			//echo draw_class_week($horas_config,$horario_detalle,$horario_tipo,$cantidad_de_periodos,$horas_array);

		?>
	  </div>
	<pre id="log"></pre>   
</body>
</html>


