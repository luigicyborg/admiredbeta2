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
			$preLimite= '';
			$preLimite.='<div class="style-voucher">';
				$preLimite.='<div class="style-container-voucher">';
						$preLimite.='<label for="seleccionLimite">Limite de conexiones:</label>';
						$preLimite.='<select id="seleccionLimite">';
						  //$preLimite.='<option selected="selected">seleccione..</option>';
						for($x = 1; $x <= 300; $x++):		
						  $preLimite.='<option value="'.$x.'">'.$x.'</option>';
						endfor;  
						$preLimite.='</select>';
						$preLimite.='<span class="close0">&times;</span>';
						$preLimite.='<p>Limite el numero de dispositivos que puede conectarse con este voucher.</p>';
				$preLimite.='</div>';
				$preLimite.='<span class="close0">&times;</span>';
			$preLimite.='</div>';
				echo $preLimite;


		?>
	  </div>
	<pre id="log"></pre>   
	

</body>
</html>


