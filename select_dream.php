<?php
	require_once("db_dream.php");
	require_once("user.php");
	require_once("config_show.php");

	$time_range = $_POST['time_range'];
	$addr = $_POST['addr'];
	$is_claim = $_POST['is_claim'];
	$page_num = $_POST['page_num'];
	
	$sql = "";
	if($time_range != "不限") {
		if($time_range == "今日") {
			$sql = " dream.time='".date("Y-m-d",time())."' ";
		} else if($time_range == "一周内") {
			$sql = " dream.time > '".date("Y-m-d",strtotime("-1 week"))."' ";
		} else {
			$sql = " dream.time > '".date("Y-m-d",strtotime("-1 month"))."' ";
		}
	} 
	if($addr != "不限") {
		if($sql != "") {
			$sql = $sql."and dream.addr like '%".$addr."%' ";
		} else {
			$sql = $sql." dream.addr like '%".$addr."%' ";
		}
	}
	
	
	if($is_claim != "不限") {
		if($is_claim == "未认领") {
			if($sql != "") {
				$sql = $sql."and dream.state = 1 ";
			} else {
				$sql = $sql." dream.state = 1 ";
			}
		} else {
			if($sql != "") {
				$sql = $sql."and dream.state = 0 ";
			} else {
				$sql = $sql." dream.state = 0 ";
			}
		}
	}

	
	$d = new Dream();
	$user = new User();
	
	$count = 0;
	$begin = ($page_num - 1)*DEMAND_PAGE_NUM;
		
	if($sql != "") {
		$count = $d->select("select count(*) from dream where ".$sql);
		$count = $count[0]['count(*)'];
		$sql = "select * from dream where ".$sql."  order by id_dream desc limit ".$begin.",".DEMAND_PAGE_NUM;
	} else {
		$count = $d->select("select count(*) from dream ");
		$count = $count[0]['count(*)'];
		$sql = "select * from dream order by id_dream desc limit ".$begin.",".DEMAND_PAGE_NUM;
	}
	
	$data = $d->select($sql);

	foreach ($data as $item) {
		echo '
			<div id="teacher_intro">
				<div id="dream_intro_left"> ';
				$has_pic = $user->get_personal_info_from_id($item['user_id_user']);
				$has_pic = $has_pic[0];
				if($has_pic['has_pic'] == 0) {
					echo '<img src="images/favicon.gif" alt="img" id="teacher_favicon" class="favicon">'; 
				} else {
					echo '<img src="favicon_dir/'.$has_pic["name"].'.png" alt="img" id="teacher_favicon" class="favicon">';
				}
		echo '
				<div style="margin-top:10px">
				<p><span class="user_name"><b>'.$item['id_dream'].'</b>&nbsp</span> <span class="user_name"><b>'.$item['name'].'</b></span> 
						<span>&nbsp<b>'.$item['addr'].'</b></span>
					</p>
					<p>心愿:'.$item['description'].'</p>';
		echo '<p>心愿故事:'.$item['story'].'</p>';
		echo '<p>联系方式:'.$item['phone'].'</p>';
		echo '</div></div>';
		echo 
			'
				<div id="dream_intro_right" >
					<div>
						<span style="display:none">'.$item['id_dream'].'</span>';
						if($item['state'] == 1) {
							echo '<a  onclick="check_user_login2(this)"><div class="claim_dream_div">认领心愿</div></a>';
						} else {
							echo '<img src="images/renling.jpg" style="width: 100px;margin-top: 35px;margin-left: -50px;">';
							echo '<p style="margin-top: -50px;margin-left: 60px;">
							<span class="user_name"><b>'.$item['dream_helper_name'].'</b>&nbsp</span><b>'.$item['dream_helper_addr'].'</b></p>';
							echo '<p style="margin-left: 60px;">
								<span style='."'".'font-family: "微软雅黑" "黑体";font-size: 12px;font-style: italic;margin-left: 35px;.'."'".'>已认领该心愿</span></p>';	
						}
						
				echo '	</div>
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
	}
	$i = 1;
	if($page_num - 5 > 0) {
		$i = $page_num - 5;
	}
	for(;$i <= ($count - 1 + DEMAND_PAGE_NUM)/DEMAND_PAGE_NUM && $i < 10;$i++) {
		if($page_num == $i)
			echo '<button type="button" class="btn btn-default"  onclick="select_page(this)"  disabled="disabled"><b>'.$i.'</b></button>';
		else 
			echo '<button type="button" class="btn btn-default"  onclick="select_page(this)">'.$i.'</button>';
	}
	if( $count/DEMAND_PAGE_NUM > $page_num ) {
		echo '<button type="button" class="btn btn-default"  onclick="select_page(this)">下一页</button>';
	}
	echo'
			</div>
		</div>
		';
	
	exit;
?>