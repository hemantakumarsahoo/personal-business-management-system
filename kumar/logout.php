<?php
	session_start();
	unset($_SESSION["u"]);
	header('location:login.php');
?>