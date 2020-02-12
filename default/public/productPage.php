<?php
	require '../templates/loadTemplate.php';
	require '../templates/functions.php';
	$title = 'HOME';
	
	$stmt = pdo()->prepare('SELECT * FROM products WHERE product_id=3');
	$stmt->execute();
	$product=$stmt->fetch();

	var_dump($product);

	$variables = array('product'=>$product);
	$content = loadTemplate('../templates/product.html.php',$variables);

	require '../templates/layout.html.php';