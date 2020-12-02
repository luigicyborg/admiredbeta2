<?php
$path = 'https://robots.org.uk/stuff/testcard.jpg';
$info = file_put_contents(
			'uploads/angel.jpg',
			 file_get_contents(
			 	urldecode(
			 		$path
			 	)
			 )
		);

echo $info;
?>

