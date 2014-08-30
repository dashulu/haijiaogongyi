<?php
	require_once("db_lesson.php");
	
	session_start();
	if(!isset($_SESSION['valid_user'])) {
		echo "请先登入";
		exit;
	}
	
	$lesson_grade = $_POST['lesson_grade'];
	$lesson_name = $_POST['lesson_name'];
	$lesson_id = $_POST['lesson_id'];
		
	$d = new Lesson();
	$sql = "update lesson set name = '".$lesson_name."',grade='".$lesson_grade."' where id_lesson = ".$lesson_id;
	$data = $d->update($sql);
	echo "修改成功";
	exit;
	
?>