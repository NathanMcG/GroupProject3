<?php

	session_start();

	//Ensures basket is array
	if(!isset($_SESSION['basket'])){
		$_SESSION['basket'] = array();
	}

	//Manages changing basket details
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

	$page = '../pages/' . ltrim(explode('/?', $_SERVER['REQUEST_URI'])[0], '/') . '.php';

	if(file_exists($page)){
		require $page;
	}
	else{
		require '../pages/home.php';
	}

	/*if (isset($_GET['page'])) {
		require '../pages/' . $_GET['page'] . '.php';
	}
	else {
		require '../pages/home.php';
	}*/




	//Displays basket
    if(count($_SESSION['basket'])>0){
        $variables = array();
        $content .= loadTemplate('../templates/basket.html.php',$variables);
    }


	require  '../templates/layout.html.php';

?>