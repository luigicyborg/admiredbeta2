<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>SAS ADMIRED</title>

    <!--<script src="js/admiredInitPage.js" type="text/javascript"></script>-->
</head>
<body>
	  <div class="calendar">
		<?php  /* ANEXAR Y BUSCAR EL NOMBRE DEL AULA */ 
			$nameSessionUser = $_REQUEST['nameSessionUser'];
			//echo $nameSessionUser.'sadas<br/>';select m.detalle,c.id_aula,au.curso,u.nombre, CONCAT(au.curso,' - ',m.detalle) as 'comboBox' from login as l, usuario as u, clases as c, materia as m, aulas as au where l.email like 'estefacha@sas.edu.bo' and l.id_usuario like u.id_user and u.id_user like c.id_profesor and c.id_materia like m.id and c.id_aula like au.id
			$user_squery=mysqli_query(
										$con, 
												"
												select 
													CONCAT(c.id,'') as 'id_clase'
												   ,m.detalle
												   ,c.id_aula
												   ,au.cod_aps
												   ,au.curso
												   ,u.nombre
												   ,CONCAT(au.curso,' - ',m.detalle) as 'comboBox' 
												   from 
												   		login as l
												   	   ,usuario as u
												   	   ,clases as c
												   	   ,materia as m
												   	   ,aulas as au 
												   	   where 
												   	   			l.email like '".$nameSessionUser."' 
												   	   		and l.id_usuario like u.id_user 
												   	   		and u.id_user like c.id_profesor 
												   	   		and c.id_materia like m.id 
												   	   		and c.id_aula like au.id
												"
									);
			$array_Clases_id = array();
			$nombre_array=array();
			//$array_Aulas_id = array();
			$array_Aulas_id_group_ap = array();

			while($row = mysqli_fetch_assoc($user_squery)){
				$nombre_array[] = $row['comboBox'];
				$array_Clases_id[] = $row['id_clase'];
				//$array_Aulas_id[] = $row['id_clase'];
				$array_Aulas_id_group_ap[] = $row['cod_aps'];
				//$nombre_array[] = $row['detalle'];
				//echo $row['nombre'].'<br/>';
			}

			function draw_asignatures($names_array,$array_Clases_id,$array_Aulas_id_group_ap){
					$preRegister= '';
			$preRegister.='<div class="style-voucher">';
				$preRegister.='<div class="style-container-voucher">';
						$preRegister.='<p>Select a tipo de voucher:</p>';
						$preRegister.='<div class="input_radio">';
						  $preRegister.='<input type="radio" id="huey" name="voucher_type" value="one" checked>';
						  $preRegister.='<label for="huey">Acceso solo en el aula.</label>';
						  $preRegister.='<input type="radio" id="dewey" name="voucher_type" value="all">';
						  $preRegister.='<label for="dewey">Acceso en cualquier lugar del colegio.</label>';
						$preRegister.='</div>';
							$max_array = sizeof($names_array);
						$preRegister.='<label for="seleccionMateria">Aula:</label>';

						for($x = 0; $x < $max_array; $x++):		
						  $preRegister.='<input id="comboBoxClases_'.($x+1).'" type="hidden" value="'.$array_Clases_id[$x].'" disabled/>';
						  $preRegister.='<input id="comboBoxAulas_'.($x+1).'" type="hidden" value="'.$array_Aulas_id_group_ap[$x].'" disabled/>';
						endfor; 

						$preRegister.='<select id="seleccionMateria">';
						  $preRegister.='<option selected="selected">seleccione..</option>';
						for($x = 0; $x < $max_array; $x++):		
						  $preRegister.='<option value="materia1">'.$names_array[$x].'</option>';
						endfor;  
						$preRegister.='</select>';
						$preRegister.='<span class="close1">&times;</span>';
				$preRegister.='</div>';
			$preRegister.='</div>';
				return $preRegister;
			}
			echo draw_asignatures($nombre_array, $array_Clases_id,$array_Aulas_id_group_ap);
		?>
	  </div>
	<pre id="log"></pre>   
	

</body>
</html>


