<?php

	require '../functions.php';

	$pageContent = 'hello';

	$info = pdo()->query('SELECT * FROM products');

	$info = $info->fetch();

	$pageContent. $info;

	require '../phpGeneral/layout.php';

?>