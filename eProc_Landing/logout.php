<?php
session_start();
include "logout_google.php";
	$_SESSION = array();
	session_destroy();
	header('location: sign-in.php');
?>