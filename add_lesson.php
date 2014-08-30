<?php
	require_once("db_lesson.php");
	require_once("user.php");
	
	session_start();
	if(!isset($_SESSION['valid_user'])) {
		echo "请先登入";
		exit;
	}
	
	$lesson_grade = $_POST['lesson_grade'];
	$lesson_name = $_POST['lesson_name'];
	
	$user = new User();
	$id = $user->get_personal_info($_SESSION['valid_user']);
	$id = $id[0]['id_user'];
	
	$d = new Lesson();
	$data = $d->insert_lesson($id, $lesson_name, $lesson_grade);
	foreach($data as $item) {
		echo '<div><input type="text" style="margin-top:10px;height:inherit;margin-left:80px;width:100px;" id="user_name" value="'.
											$item["name"].'" readonly="true"/><input  type="text" style="margin-top:10px;height:inherit;margin-left:80px;width:100px" id="user_name" value="'.
											$item["grade"].'" readonly="true"/>
												<span style="display:none">'.$item['id_lesson'].'</span>
												<div class="btn-group" >
												  <button type="button" class="btn btn-default" onclick="lesson_edit(this)">编辑</button>
												  <button type="button" class="btn btn-default" onclick="lesson_save(this)">保存</button>
												  <button type="button" class="btn btn-default" onclick="lesson_delete(this)">删除</button>
												</div></div>';
	}
	exit;
	
?>