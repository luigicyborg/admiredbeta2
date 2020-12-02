<?php
    include('session.php');

	if( isset($_POST['nameFile_Voucher'])){
		//echo $_POST['nameFile_Voucher'];
	  If (unlink('uploads/'.$_POST['nameFile_Voucher'])) {
		  // file was successfully deleted
	  	// sql to delete a record

	  	echo "deleted image successfully";
			$sql = "delete from vouchers WHERE id=".$_POST['id_Voucher']."";

			if (mysqli_query($con, $sql)) {
			//  echo "Record deleted successfully";
			} else {
			//  echo "Error deleting record: " . $con->error;
			}
		} else {
		  // there was a problem deleting the file
		}
	}

?>