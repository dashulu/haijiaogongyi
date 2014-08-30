<?php
	require_once("user.php");
	
	session_start();
	$name = $_POST['name'];
	$password = $_POST['password'];
	
	$user = new User();
	$result = $user->verify_user($name, $password);
	if($result == "") {
		header("Location: index.php");
		exit;
	} else if($result == "student") {
		$_SESSION['valid_user'] = $name;
		header("Location: personal_center.php");
		exit;
	} else if($result == "teacher") {
		$_SESSION['valid_user'] = $name;
		header("Location: personal_center.php");
		exit;
	}
?>