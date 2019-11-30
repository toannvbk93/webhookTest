<?php
	require_once "Router.php";
	$router = new Router("./config.json");
	$router->LoadConfig();
	// echo $router->listAccessMethod[0];
	//echo array_search("/", $router->listAccessPath);
?>
