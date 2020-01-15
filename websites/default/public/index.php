<?php

	require 'functions.php';

	$pageContent = 'hello';

	$info = pdo()('SELECT * FROM products');

	$info = $info->fetch();

	$pageContent. $info;

	require 'layout.php';

?>
