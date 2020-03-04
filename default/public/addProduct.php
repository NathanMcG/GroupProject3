<?php
	require '../templates/loadTemplate.php';
	require '../templates/functions.php';
	$title = 'Add Products';

	$variables = array();
	$content = loadTemplate('../templates/addProducts.html.php',$variables);

	require '../templates/layout.html.php';