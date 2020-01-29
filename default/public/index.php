<?php

	ob_start();
	$title = 'HOME';
	$content = '';
	
	$adverts = scandir('Files/Adverts');
	var_dump($adverts);
	for($i=2;$i<count($adverts);$i++){
		$image = $adverts[$i];
		require '../templates/advert.html.php';
		$content .= ob_get_clean();
	}

	require '../templates/layout.html.php';

?>