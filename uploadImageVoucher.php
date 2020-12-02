<?php
  
if( isset($_FILES['image']) and !$_FILES['image']['error'] ){
  file_put_contents( 
  		"uploads/".$_POST['fileName'], 
  		file_get_contents($_FILES['image']['tmp_name']
  	)
  );
}

?>