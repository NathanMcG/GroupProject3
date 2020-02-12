<?php
	require '../templates/loadTemplate.php';
	require '../templates/functions.php';
	$title = 'HOME';
	
	$stmt = pdo()->prepare('SELECT * FROM products WHERE product_id=3');
	$product=$stmt->fetch();

	$variables = array('product'=>$product);
	$content = loadTemplate('../templates/product.html.php',[]);

	require '../templates/layout.html.php';