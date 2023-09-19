<?php 
	session_start();
	$_SESSION['user'] = null;
	// unset($_SESSION['user']);
	// session_destroy();
	header('Location: http://localhost:403/Guitar/index.php?controller=home');
	exit();
?>