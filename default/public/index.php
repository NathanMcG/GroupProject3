<?php

	session_start();

	if(!isset($_SESSION['basket'])){
		$_SESSION['basket'] = array();
	}

	if(isset($_POST['basket_id'])){
		if(isset($_POST['+'])){
			$_SESSION['basket'][$_POST['basket_id']]['quantity'] = $_SESSION['basket'][$_POST['basket_id']]['quantity'] + 1;
		}
		if(isset($_POST['-'])){
			$_SESSION['basket'][$_POST['basket_id']]['quantity'] = $_SESSION['basket'][$_POST['basket_id']]['quantity'] - 1;
		}
		if($_SESSION['basket'][$_POST['basket_id']]['quantity'] == 0){
			unset($_SESSION['basket'][$_POST['basket_id']]);
		}
		if(isset($_POST['gift'])){
			$_SESSION['basket'][$_POST['basket_id']]['gift'] = !$_SESSION['basket'][$_POST['basket_id']]['gift'];
		}

	}

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