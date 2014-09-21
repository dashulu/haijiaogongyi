<?php
	require_once("db_lesson.php");
	require_once("user.php");
	
	session_start();
	if(!isset($_SESSION['valid_user'])) {
		echo "请先登入";
		exit;
	}
	
	$lesson_id = $_POST['lesson_id'];
		
	$d = new Lesson();
	$sql = "update lesson set is_del = 1 where id_lesson = ".$lesson_id;
	$d->update($sql);
	$user = new User();
	$id = $user->get_personal_info($_SESSION['valid_user']);
	$id = $id[0]['id_user'];
	$data = $d->get_lesson($id);
	
/*	foreach($data as $item) {
		echo '<div><input type="text" style="margin-top:10px;height:inherit;margin-left:80px;width:100px;" id="user_name" value="'.
											$item["name"].'" readonly="true"/><input  type="text" style="margin-top:10px;height:inherit;margin-left:80px;width:100px" id="user_name" value="'.
											$item["grade"].'" readonly="true"/>
												<span style="display:none">'.$item['id_lesson'].'</span>
												<div class="btn-group" >
												  <button type="button" class="btn btn-default" onclick="lesson_edit(this)">编辑</button>
												  <button type="button" class="btn btn-default" onclick="lesson_save(this)">保存</button>
												  <button type="button" class="btn btn-default" onclick="lesson_delete(this)">删除</button>
												</div></div>';
	} */
	
	foreach($data as $item) {
									echo '<div><input type="text" style="margin-top:10px;height:inherit;margin-left:80px;width:100px;" id="user_name" value="'.
											$item["name"].'" readonly="true"/><input  type="text" style="margin-top:10px;height:inherit;margin-left:80px;width:100px" id="user_name" value="'.
											$item["grade"].'" readonly="true"/>
												<span style="display:none">'.$item['id_lesson'].'</span>
												<div class="btn-group" style="margin-top:-20px;">
												  <div style="color:rgb(241,242,242);margin-left:15px;float:left;width:50;background:rgb(75,92,102);" class="detail" onclick="lesson_edit(this)">编辑</div>
												  <div style="color:rgb(241,242,242);margin-left:5px;float:left;width:50;background:rgb(75,92,102);" class="detail" onclick="lesson_save(this)">保存</div>
												  <div style="color:rgb(241,242,242);margin-left:5px;float:left;width:50;background:rgb(75,92,102);" class="detail" onclick="lesson_delete(this)">删除</div>
												</div></div>';
									
								}
							
	exit;
	
?>