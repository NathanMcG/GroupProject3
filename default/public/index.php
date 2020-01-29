<?php

	require 'functions.php';

	$pageContent = 'hello';

	$info = pdo()->query('SELECT * FROM users');

	$info = $info->fetch();

	$pageContent. $info[0];

	require '../templates/layout.php';

?>