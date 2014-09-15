<?php
	require_once("db_dream.php");
	require_once("db_dream_helper.php");
	require_once("config_show.php");
	require_once("user.php");

	
	@session_start();
	if(!isset($_SESSION['valid_user'])) {
		echo "false";
		exit;
	}
	
	$name = $_POST['name'];
	$addr = $_POST['addr'];
	$phone = $_POST['phone'];
	$dream_id = $_POST['dream_id'];
	
	
	$d = new Dream();
	$id = $d->add_dream_helper($name, $addr, $phone, $dream_id);


	$user = new User();
	$count = 0;
	$page_num = 1;
	$count = $d->select("select count(*) from dream");
	$count = $count[0]['count(*)'];
	$data = $d->select("select * from dream order by id_dream desc limit 0,".DEMAND_PAGE_NUM);
	
	foreach ($data as $item) {
		echo '
			<div id="teacher_intro">
				<div id="dream_intro_left"> ';
				$has_pic = $user->get_personal_info_from_id($item['user_id_user']);
				$has_pic = $has_pic[0];
				if($has_pic['has_pic'] == 0) {
					echo '<img src="images/favicon.gif" alt="img" id="teacher_favicon" class="t_favicon">'; 
				} else {
					echo '<img src="favicon_dir/'.$has_pic["name"].'.png" alt="img" id="teacher_favicon" class="t_favicon">';
				}
		echo '
				<div style="margin-top:35px">
				<p> <span class="user_name"><b>'.$item['name'].'</b></span> 
					</p>
					<p><span >心愿:</span>'.$item['description'].'</p>';
		echo '<p><span >心愿故事:</span>'.$item['story'].'</p>';
		echo '<p><span >所在地区:</span>'.$item['addr'].'</p>';
		echo '<p><span >联系方式:</span>'.$item['phone'].'</p>';
		echo '</div></div>';
		echo 
			'<div id="Layer1" style="float:left;margin-top:25px; width:1px; background-color:rgb(199, 205, 209);height:200px;"></div>
					
				<div id="dream_intro_right" >
					<div style="text-align:center;">
						<span style="display:none">'.$item['id_dream'].'</span>';
						if($item['state'] == 1) {
							echo '<div class="detail" onclick="check_user_login2(this)" style="margin-top:100px;margin-left:20%;">
									<p style="padding-right:0px;">认领心愿</p>
								</div>';
						} else {
							echo '<div style="margin-top:100px;margin-left:20%;text-align:left;">';
					
							echo '<p style="margin-left: -10px;">
							<span class="user_name"><b>'.$item['dream_helper_name'].'</b>&nbsp</span><b>'.$item['dream_helper_addr'].'</b></p>';
							echo '<p >
								<img src="images/renling.jpg" style="margin-left:-50;width: 30px;"></p>
								<div class="detail" style="margin-left:-10px;margin-top:-44px;text-align:center;font-size:15px;background-color:rgb(75,92,102);color:#fff;">已认领</span></div>';	
							echo '</div>';
						}
						
				echo '	</div>
				</div>
			</div>
		';
	}
	
	echo '
			<div id="page_select">
				<span  id="page_num" style="display:none">'.$page_num.'</span>
				<div class="btn-group">';
		
	if($page_num != 1) {
		echo '<button type="button" class="btn btn-default"  onclick="select_page(this)">上一页</button>';
	}
	$i = 1;
	if($page_num - 5 > 0) {
		$i = $page_num - 5;
	}
	for(;$i <= ($count - 1 + DEMAND_PAGE_NUM)/DEMAND_PAGE_NUM && $i < 10;$i++) {
		if($page_num == $i)
			echo '<button type="button" class="btn btn-default"  onclick="select_page(this)"><b>'.$i.'</b></button>';
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