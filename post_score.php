<?php
	require_once("user.php");
	
	@session_start();
	if(!isset($_SESSION['valid_user'])) {
		echo "请先登入";
		exit;
	}
	
	$score = $_POST['score'];
	$user_id = $_POST['user_id'];

	$sql = "select * from user where id_user = ".$user_id;
	$user = new User();
	$data = $user->select($sql);
	$data = $data[0];
/*	if(count($data) > 0) {
		
		$data = $data[0];
		$t = count($data);
		echo "$data has data".":".$data['user_id'].":".$data['name'];
		exit;
	} else {
		echo "$data has no data";
		exit;
	}*/

	$count = intval($data['score_count']);
	
	$score = $score + intval($count)*$data['score'];
	$count++;
	$score = $score*1.0/$count;
	
	
	$sql = "update user set score = ".$score.", score_count=".$count." where id_user='".$user_id."'";

	$user->update($sql);
	echo "评分成功";
	exit;
	
?>