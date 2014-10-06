<?php
	require_once("out.php");
	require_once("view.php");	
	$users = get_users();
	display($users);
?>