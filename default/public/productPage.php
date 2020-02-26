<?php
	require '../templates/loadTemplate.php';
	require '../templates/functions.php';
	$title = 'Product';
	
	/*$stmt = pdo()->prepare('SELECT * FROM products WHERE product_id=3');
	$stmt->execute();*/
	$product=find(pdo(),'products','product_id','3')[0];

	$variables = array('product'=>$product);
	$content = loadTemplate('../templates/product.html.php',$variables);

	require '../templates/layout.html.php';