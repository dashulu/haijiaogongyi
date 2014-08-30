<?php
	require_once("user.php");
	
	session_start();
	$name = $_SESSION['valid_user'];
	$sex = $_POST['sex'];
	$addr = $_POST['addr'];
	$job = $_POST['job'];
	$school = $_POST['school'];
	
	
	$sql = "update user set sex = '".$sex."',addr='".$addr."',job='".$job."',school='".$school."' where name='".$name."'";
	$user = new User();
	$result = $user->update($sql);	
	echo "更新信息成功";
?>