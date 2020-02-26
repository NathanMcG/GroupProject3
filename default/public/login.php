<?php
	require '../templates/loadTemplate.php';
	require '../templates/functions.php';
	$title = 'Log In';

	$variables = array();
	$content = loadTemplate('../templates/login.html.php',$variables);

	require '../templates/layout.html.php';