<?php
	require_once("db_message.php");
	require_once("user.php");
	
	session_start();
	if(!isset($_SESSION['valid_user'])) {
		echo "请先登入";
		exit;
	}
	
	$content = $_POST['message'];
	$message_to = $_POST['message_to'];
	
	

	
	$user = new User();
	$id = $user->get_personal_info($_SESSION['valid_user']);
	$id = $id[0]['id_user'];
	
	
	
	$d = new Message();
	$data = $d->insert_message($content, $id, $message_to);
	echo "留言成功";
	exit;
	
?>