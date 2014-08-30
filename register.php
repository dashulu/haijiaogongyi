<?php
	@session_start();
	require_once("user.php");

	$name = $_POST['name'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$school = $_POST['school'];
	$sex = $_POST['sex'];
	$job = $_POST['job'];
	$verify_code = $_POST['verify_code'];
	
/*	echo 'name:'.$name.'  password:'.$password.
		 '  password2:'.$password2.'  school:'.
		 $school.'  sex:'.$sex.'   job:'.$job.
		 '   verify_code'.$verify_code;
*/	
	if($name == "" || $password == "" || $password2 == "") {
		header("Location: index.php");
		exit;
	}
	if($password != $password2) {
		header("Location: index.php");
		exit;
	}
	if($job == "teacher" && $verify_code != "345678") {
		header("Location: index.php");
		exit;
	}
	if(!($job == "teacher" || $job == "student")) {
		header("Location: index.php");
		exit;
	}
		 
	
	$user = new User();
	$result = $user->insert_user($name, $password, $job, $sex, $school);
	if($result) {
		$_SESSION['valid_user'] = $name;
		header("Location: personal_center.php");
	//		$result = $user->get_sql();
	//	echo "<p>result:".$result."</p>";
		exit;
	} else {
		header("Location: index.php");
	//	$result = $user->get_sql();
	//	echo "<p>result:".$result."</p>";
		exit;
	}
?>