<?php
	require '../loadTemplate.php';
	require '../classes/DatabaseTable.php';

	if (isset($_GET['page'])) {
		require '../pages/' . $_GET['page'] . '.php';
	}
	else {
		require '../pages/home.php';
	}

	require  '../templates/layout.html.php';

?>