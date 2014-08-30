<?php
	require_once("user.php");
	
	session_start();
	$name = $_SESSION['valid_user'];
	$old_passwd = $_POST['old_passwd'];
	$new_passwd = $_POST['new_passwd'];
	
	$user = new User();
	$result = $user->verify_user($name, $old_passwd);
	
	
	if (!is_string($result)) {
		echo "原密码错误"; //判断是否是字符串类型
		exit;
	}
	if (empty($result)) {
		echo "原密码错误"; //判断是否是字符串类型
		exit;
	}
	if ($result=='') {
		echo "原密码错误"; //判断是否是字符串类型
		exit;
	}
	
	
	$new_passwd = sha1($new_passwd);

	$sql = "update user set passwd = '".$new_passwd."' where name='".$name."'";
	
	$result = $user->update($sql);	
	echo "更改密码成功";
	exit;
?>