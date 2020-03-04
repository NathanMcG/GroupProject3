<?php
	require '../templates/loadTemplate.php';
	require '../templates/functions.php';
	$title = 'Product';
	$product=find(pdo(),'products','product_id','3')[0];

	$variables = array('product'=>$product);
	$content = loadTemplate('../templates/product.html.php',$variables);

	require '../templates/layout.html.php';