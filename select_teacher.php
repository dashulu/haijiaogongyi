<?php
	require_once("user.php");
	require_once("db_lesson.php");
	require_once("config_show.php");

	$sex = $_POST['sex'];
	$addr = $_POST['addr'];
	$subject = $_POST['subject'];
	$job = $_POST['job'];
	$page_num = $_POST['page_num'];
	
	$sql = "";
	if($sex != "不限") {
		if($sex == "男")
			$sex = "male";
		else 
			$sex = "female";
			
		$sql = $sql."sex = '".$sex."' ";
	} 
	if($addr != "不限") {
		if($sql != "") {
			$sql = $sql."and addr like '%".$addr."%' ";
		} else {
			$sql = $sql."addr like '%".$addr."%' ";
		}
	}
	
	
	
	if($job != "不限") {
		if($sql != "") {
			$sql = $sql."and job = '".$job."' ";
		} else {
			$sql = $sql."job = '".$job."' ";
		}
	}
	
	
	$user = new User();
	$lesson = new Lesson();
	$count = 0;
	$begin = ($page_num - 1)*DEMAND_PAGE_NUM;
	
	if($subject != "不限") {
		if($sql != "") {
			$count = $user->select("select count(*) from user,lesson where type = 'teacher' and ".$sql." and lesson.is_del = 0 and user.id_user = lesson.user_id_user and lesson.name like '%".$subject."%' group by user.id_user");
			$count = $count[0]['count(*)'];
			$sql = "select user.name,user.id_user,user.type,user.school,user.sex,user.score,user.score_count,user.time_for_lesson,user.job,user.addr,user.register_time from user,lesson where type = 'teacher' and ".$sql." and lesson.is_del = 0 and user.id_user = lesson.user_id_user and lesson.name like '%".$subject."%' group by user.id_user limit ".$begin.",".DEMAND_PAGE_NUM;
		} else {
			$count = $user->select("select count(*) from user,lesson where type = 'teacher' and lesson.is_del = 0 and user.id_user = lesson.user_id_user and lesson.name like '%".$subject."%'  group by user.id_user");
			$count = $count[0]['count(*)'];
			$sql = "select user.name,user.id_user,user.type,user.school,user.sex,user.score,user.score_count,user.time_for_lesson,user.job,user.addr,user.register_time from user,lesson where type = 'teacher' and lesson.is_del = 0 and user.id_user = lesson.user_id_user and lesson.name like '%".$subject."%'  group by user.id_user limit ".$begin.",".DEMAND_PAGE_NUM;
		}
	} else {
		if($sql != "") {
			$count = $user->select("select count(*) from user where type = 'teacher' and ".$sql);
			$count = $count[0]['count(*)'];
			$sql = "select * from user where type = 'teacher' and ".$sql." limit ".$begin.",".DEMAND_PAGE_NUM;
		} else {
			$count = $user->select("select count(*) from user where type = 'teacher'");
			$count = $count[0]['count(*)'];
			$sql = "select * from user where type = 'teacher' limit ".$begin.",".DEMAND_PAGE_NUM;
		}
	}
					
	
	$data = $user->select($sql);

	
	foreach ($data as $item) {
		$result = $lesson->get_lesson($item['id_user']);
		echo '
			<div id="teacher_intro">
				<div id="teacher_intro_left">
			
				';
				if($item['has_pic'] == 0) {
					echo '<img src="images/favicon.gif" alt="img" id="teacher_favicon" class="favicon">'; 
				} else {
					echo '<img src="favicon_dir/'.$item["name"].'.png" alt="img" id="teacher_favicon" class="t_favicon">';
				}
		echo '
				<div style="margin-top:35px;">
				<p ><span class="user_name"><b>'.$item['name'].'</b></span> 
						<span style="display:none">'.$item['id_user'].'</span>
						<!--
						<div  onclick="post_message_check(this)"  class="leave_message_button" style="margin-right:90px;" >给我留言</div>
						<div onclick="post_score_check(this)"  class="leave_message_button" >我要评价</div>
						-->
					</p>
					<p></p>
					<p></p>
					<p></p>
					<p>性别：';
		if($item['sex'] == 'male' || $item['sex'] == '男') {
			echo '男';
		} else if($item['sex'] == 'female' || $item['sex'] == '女') {
			echo '女';
		} else {
			echo '保密';
		}
		echo 
			'</p>
					<p>地区：';
		if($item['addr'] == '') {
			echo '未填写';
		} else {
			echo $item['addr'];
		}
		echo 
			'</p>
					<p>职业：';
		if($item['job'] == '') {
			echo '未填写';
		} else {
			echo $item['job'];
		}
		echo '</p>
					<p>教授课程：';
		if(count($result) == 0) {
			echo '未开设课程';
		} else {
			foreach($result as $l) {
				echo $l['grade']."-".$l['name'].',';
			}
		}
		echo 
			'</p>
				</div>
				</div>
				<div id="Layer1" style="float:left;margin-top:25px; width:1px; background-color:rgb(199, 205, 209);height:200px;"></div>
					
				<div id="teacher_intro_right" >
					<div id="teacher_score" style="text-align:center;">
						<p style="margin-left:50px;margin-top:65px;">教师评价：
			';
		for($i=0;$i < 5;$i++) {
			if($item['score'] - $i >= 1) {
				echo '<img src="images/star.jpg" width="15px" height="15px">';
			} else if($item['score'] - $i > 0) {
				echo '<img src="images/half_star.png" width="15px" height="15px">';
			} else {
				echo '<img src="images/nst.png" width="15px" height="15px">';
			}
		}
		echo '
							<span>'.round($item['score'], 1).'/'.$item['score_count'].'</span>
						</p>
						
						<span style="display:none">'.$item['id_user'].'</span>
						
						<div class="detail" onclick="post_score_check(this)" style="margin-left:43%;">
							<p style="padding-right:0px;margin-left:5px;">我要评价</p>
						</div>
						
						<div class="detail" onclick="post_message_check(this)" style="margin-left:43%;">
							<p style="padding-right:0px;margin-left:5px;">给我留言</p>
						</div>
					</div>
				</div>
			</div>
		';
	}

	echo '
			<div id="page_select">
				<span  id="page_num" style="display:none">'.$page_num.'</span>
				<div class="btn-group" style="margin-bottom:5px;">';
		
	if($page_num != 1) {
		echo '<button type="button" class="btn btn-default"  onclick="select_page(this)">上一页</button>';
	}  else {
		echo '<button type="button" class="btn btn-default"  onclick="select_page(this)"  disabled="disabled">上一页</button>';
	}
	$i = 1;
	if($page_num - 5 > 0) {
		$i = $page_num - 5;
	}
	for(;$i <= ($count - 1 + DEMAND_PAGE_NUM)/DEMAND_PAGE_NUM && $i < 10;$i++) {
		if($page_num == $i)
			echo '<button type="button" class="btn btn-default"  onclick="select_page(this)" disabled="disabled"><b>'.$i.'</b></button>';
		else 
			echo '<button type="button" class="btn btn-default"  onclick="select_page(this)">'.$i.'</button>';
	}
	if( $count/DEMAND_PAGE_NUM > $page_num ) {
		echo '<button type="button" class="btn btn-default"  onclick="select_page(this)">下一页</button>';
	}  else {
		echo '<button type="button" class="btn btn-default"  onclick="select_page(this)"  disabled="disabled">下一页</button>';
	}
	echo'
			</div>
		</div>
		';
		

	
	
	exit;
?>