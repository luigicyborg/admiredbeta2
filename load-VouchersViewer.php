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
			$idVoucherFind = $_REQUEST['idVoucherFind'];


			$idVoucher_squery=mysqli_query($con, "select * from vouchers where id = ".$idVoucherFind."");
			$row = mysqli_fetch_assoc($idVoucher_squery);
			$voucher_id =$row['id'];
			$voucher_image =$row['imagen'];



			$idEchoVoucher= '';
			$idEchoVoucher.='<div class="style-voucher">';
				$idEchoVoucher.='<div class="style-container-voucher">';
						$idEchoVoucher.='<label for="idVoucherIdViewer">Voucher:</label>';
						$idEchoVoucher.='<br/><button id="deleteButton" class="button-copy">ELIMINA VOUCHER</button><br/><p></p>';

						$idEchoVoucher.="<img src='uploads/".$voucher_image."' />";
						$idEchoVoucher.='<input id="idVoucherPicked" type="hidden" value="'.$voucher_id.'" disabled/>';
						$idEchoVoucher.='<input id="voucherNameFilePicked" type="hidden" value="'.$voucher_image.'" disabled/>';
						$idEchoVoucher.='<p>Elimine el voucher para reservar otro en lugar de esta reserva.</p>';
				$idEchoVoucher.='</div>';
				$idEchoVoucher.='<span class="close3">&times;</span>';
			$idEchoVoucher.='</div>';

			echo $idEchoVoucher;


		?>
	  </div>
	<pre id="log"></pre>   
	

</body>
</html>


