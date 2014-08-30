<?php
	require_once("db_demands.php");
	require_once("user.php");
	require_once("config_show.php");
	
	@session_start();
	if(!isset($_SESSION['valid_user'])) {
		echo "false";
		exit;
	}
	
	$name = $_POST['name'];
	$sex = $_POST['sex'];
	$addr = $_POST['addr'];
	$subject = $_POST['subject'];
	$grade = $_POST['grade'];
	$phone = $_POST['phone'];
	$desc = $_POST['desc'];
	
	$user = new User();
	$id = $user->get_personal_info($_SESSION['valid_user']);
	$id = $id[0]['id_user'];
	
	$d = new Demand();
	$data = $d->insert_demand($desc, $sex, $addr, $name, $subject, $phone, $grade, $id);
	
	if($data == "") {
		echo "null";
		exit;
	}
	
	$count = 0;
	$page_num = 1;
	$count = $d->select("select count(*) from demand");
	$count = $count[0]['count(*)'];
	$data = $d->select("select * from demand order by id_demand desc limit 0,".DEMAND_PAGE_NUM);
	
	foreach ($data as $item) {
			echo '<div id="teacher_intro">
					<div>
						<div id="teacher_intro_left">';
						$name = $user->get_personal_info_from_id($item["user_id_user"]);
						$name = $name[0];
						if($name["has_pic"] == 0) {
							echo '<img src="images/favicon.gif" alt="img" id="teacher_favicon">'; 
						} else {
							echo '<img src="favicon_dir/'.$name["name"].'.png" alt="img" id="teacher_favicon" class="favicon">'; 
						}
			echo '
						<div  style="margin-top:7px;">
							<p width="200px">
								<span class="user_name"><b>'.$item['name'].'</b>
								</span> 
								<div ><span style="display:none">'.$item['user_id_user'].'</span><div onclick="post_message_check(this)" src="images/leave_message.png" class="leave_message_button">给我留言</div></div>
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
			echo '</p><p>所在地区：';
			if($item['addr'] == '') {
				echo '未知';
			} else {
				echo $item['addr'];
			}
			echo '<p>学习课程：';
			if($item['subject'] == '') {
				echo '未知';
			} else {
				echo $item['subject'];
			}			
			echo	'</p><p>发布日期：'.$item['time'].'</p>
						</div>
						</div>
						<div id="teacher_intro_right" >
							<div style="margin-left:8px">
							<h4>需求描述</h4>
							<p>'.$item['description'].'</p>
							<p>联系方式:'.$item['phone'].'</p></div>
						</div>
					</div>
				</div>';
		}

	echo '
	<div id="page_select">
		<span  id="page_num" style="display:none">'.$page_num.'</span>
		<div class="btn-group" style="margin-top:5px;margin-bottom:5px;">';
	
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
	
	echo '</div>';

	exit;
	
?>