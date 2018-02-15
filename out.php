<?php 
	// session_destroy();
	include 'lib/javaSc.php';
	session_start();
	if ($_SESSION['user']!="") {
		unset($_SESSION['user']);
		$jav->redir("login.php");
	}elseif ($_SESSION['admin']!="") {
		unset($_SESSION['admin']);
		$jav->redir("login.php");
	}
 ?>