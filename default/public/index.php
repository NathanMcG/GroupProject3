<?php

	ob_start();
	$title = 'HOME';
	$content = '';
	
	$images = glob('Files/Adverts' . "/*.jpg");
	$image = $images[0];
	require '../templates/advert.html.php';
	$content .= ob_get_clean();

	require '../templates/layout.html.php';

?>