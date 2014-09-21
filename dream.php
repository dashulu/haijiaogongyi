 <?php
	require("header.php");
	do_header("海角课堂", "dream");
	
?>
    <link href="css/rating_simple.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="js/rating_simple.js"></script>
	<script language="javascript" src="js/selected_region.js"></script>		
	<script language="javascript">
		var demand_user_id = -1;
	
		function check_user_login() {
			if($("#login_username").length == 0) {
					alert("请先登入");
					$('#close_post_demand').click();
					return;
			}
			$("#post_dream_modal").click();
		}
		
		function check_user_login2(my) {
			if($("#login_username").length == 0) {
					alert("请先登入");
					$('#close_post_demand').click();
					return;
			}
			demand_user_id = my.parentElement.children[0].innerHTML;
			$("#claim_dream_modal").click();
		}
		
		function post_message_check(my) {
			if($("#login_username").length == 0) {
					alert("请先登入");
					
					return;
			}
		
			demand_user_id = my.parentElement.children[1].innerHTML;
			$("#post_message_modal").click();
		} 
		
		function post_score_check(my) {
			if($("#login_username").length == 0) {
					alert("请先登入");
					
					return;
			}
		
			demand_user_id = my.parentElement.children[1].innerHTML;
			$("#post_score_modal").click();
		}
		
		function select_page(my) {
			$page = my.innerHTML;
			if($page == "上一页") {
				$page = $("#page_num")[0].innerHTML - 1;
				$("#page_num")[0].innerHTML = $page
			} else if($page == "下一页") {
				$page = parseInt($("#page_num")[0].innerHTML) + 1;
				$("#page_num")[0].innerHTML = $page
			} else {
				$("#page_num")[0].innerHTML = $page
			}
			update_content();
		}
	
		function update_content() {
			$element = $(".item_selected");
			$time_range = $element[0].innerHTML;
			$addr = $element[1].innerHTML;
			$is_claim = $element[2].innerHTML;
			$page_num = $("#page_num")[0].innerHTML;
			
			$.ajax({ 
				type: "POST", 
				url: "select_dream.php", 
				data: {  time_range: $time_range,
						is_claim: $is_claim,
						addr: $addr,
						page_num: $page_num
			   },
				success: function(result) { 
					$('#teacher_result_region').html(result); 
					$('#close_post_demand').click();
				}
				
			}); 
		}
		
	
		function post_score(){	
			if($("#login_username").length == 0) {
				alert("请先登入");
				$('#close_post_score').click();
				return;
			}
			
			$score = $("#rating_simple").attr("value");

			if(demand_user_id === -1) {
				alert("该信息非法，无法发表留言");
				return;
			}
			$user_id = demand_user_id;
			demand_user_id = -1;
	

			$.ajax({ 
				type: "POST", 
				url: "post_score.php", 
				data: {  score: $score,
						user_id: $user_id
			   },
				success: function(result) { 
				//	$('#teacher_result_region').html(result); 
					alert(result);
					$('#close_post_score').click();
				}
				
			}); 
		}
	
		
	</script>
	<script language="javascript">
			$(function() {
			$("#rating_simple").webwidget_rating_simple({
				rating_star_length: '5',
				rating_initial_value: '1',
				rating_function_name: 'post_score',
				directory: 'images/'
			});
		});
	</script>


	
	
	<button class="btn btn-primary hide" data-toggle="modal" data-target="#score_modal" id="post_score_modal">
		发布评论
	</button>
	<div class="modal fade hide" id="score_modal"  role="dialog" >
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" id="close_post_score" ><span aria-hidden="true">&times;</span><span class="sr-only">关闭</span></button>
				<h4 class="modal-title" id="myModalLabel">我要评分</h4>
			  </div>
				
				  <div class="modal-body">
						评分：<input name="my_input" value="3" id="rating_simple" type="text" style="display:none">
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
					<button type="button" class="btn btn-primary" onclick="post_message()">发布评分</button>
				  </div>
			  
			</div>
		  </div>
		</div>
	
	
	<button class="btn btn-primary hide" data-toggle="modal" data-target="#c_dream_modal" id="claim_dream_modal">
		认领心愿
	</button>
	<div class="modal fade hide" id="c_dream_modal"  role="dialog" >
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" id="close_claim_dream" ><span aria-hidden="true">&times;</span><span class="sr-only">关闭</span></button>
				<h4 class="modal-title" id="myModalLabel">认领心愿</h4>
			  </div>
				<script type="text/javascript">
					function claim_dream(){	
						if($("#login_username").length == 0) {
							alert("请先登入");
							$('#close_claim_dream').click();
							return;
						}
						
						$name = $("#name_content1").val();
						$addr = $("#addr_content1").val();
						$phone = $("#phone_content1").val();
						$dream_id = demand_user_id;
						demand_user_id = -1;
						if($dream_id == -1) {
							alert("梦想出现未知错误，请重试");
							$('#close_claim_dream').click();
							return;
						}
						
						if($name == "") {
							$('#name_warning1')[0].innerHTML = (" 名字不能为空");
							return;
						}
						
						if($addr == "") {
							$('#addr_warning1')[0].innerHTML = (" 地址不能为空");
							return;
						}
						if($phone == "") {
							$('#phone_warning1')[0].innerHTML = (" 联系方式不能为空");
							return;
						}
						
						$.ajax({ 
							type: "POST", 
							url: "claim_dream.php", 
							data: {  name: $name,
									addr: $addr,
									phone: $phone,
									dream_id: $dream_id
						   },
							success: function(result) { 
								$('#teacher_result_region').html(result); 
								$('#close_claim_dream').click();
							}
							
						}); 
					}
				</script>
				  <div class="modal-body">
						<p><span style="font-family:'黑体'">姓名：</span><textarea name="name_content1" clos="100" rows="1" style="width:80%;"id="name_content1"></textarea>
						<span id="name_warning1"></span></p>
						<p><span style="font-family:'黑体'">地址：</span><textarea name="addr_content1" clos="100" rows="1" style="width:80%;;"id="addr_content1"></textarea>
						<span id="addr_warning1"></span></p>
						<p><span style="font-family:'黑体'">电话：</span><textarea name="phone_content1" clos="100" rows="1" style="width:80%;;"id="phone_content1"></textarea>
						<span id="phone_warning1"></span></p>
						
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
					<button type="button" class="btn btn-primary" onclick="claim_dream()">认领心愿</button>
				  </div>
			  
			</div>
		  </div>
		</div>
	
	
				  

	<button class="btn btn-primary hide" data-toggle="modal" data-target="#dream_modal" id="post_dream_modal">
		发布心愿
	</button>
	<div class="modal fade hide" id="dream_modal"  role="dialog" >
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" id="close_post_dream" ><span aria-hidden="true">&times;</span><span class="sr-only">关闭</span></button>
				<h4 class="modal-title" id="myModalLabel">发布心愿</h4>
			  </div>
				<script type="text/javascript">
					function post_dream(){	
						if($("#login_username").length == 0) {
							alert("请先登入");
							$('#close_post_dream').click();
							return;
						}
						
						$name = $("#name_content").val();
						$description = $("#description_content").val();
						$story = $("#story_content").val();
						$addr = $("#addr_content").val();
						$phone = $("#phone_content").val();
						
						if($name == "") {
							$('#name_warning')[0].innerHTML = (" 名字不能为空");
							return;
						}
						if($description == "") {
							$('#description_warning')[0].innerHTML = (" 心愿不能为空");
							return;
						}
						if($story == "") {
							$('#story_warning')[0].innerHTML = (" 故事不能为空");
							return;
						}
						if($addr == "") {
							$('#addr_warning')[0].innerHTML = (" 地址不能为空");
							return;
						}
						if($phone == "") {
							$('#phone_warning')[0].innerHTML = (" 联系方式不能为空");
							return;
						}
						
						$.ajax({ 
							type: "POST", 
							url: "post_dream.php", 
							data: {  name: $name,
									description: $description,
									story: $story,
									addr: $addr,
									phone: $phone
						   },
							success: function(result) { 
								$('#teacher_result_region').html(result); 
								$('#close_post_dream').click();
							}
							
						}); 
					}
				</script>
				  <div class="modal-body">
						<p><span class="dream_title">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp姓名：</span><textarea name="name_content" clos="100" rows="1" style="width:80%;"id="name_content"></textarea>
						<span id="name_warning"></span></p>
						<p><span class="dream_title"> 心愿描述：</span><textarea name="description_content" clos="100" rows="5" style="width:80%;;"id="description_content"></textarea>
						<span id="description_warning"></span></p>
						<p><span class="dream_title">心愿故事：</span><textarea name="story_content" clos="100" rows="5" style="width:80%;;"id="story_content"></textarea>
						<span id="story_warning"></span></p>
						<p><span class="dream_title">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp地址：</span><textarea name="addr_content" clos="100" rows="1" style="width:80%;"id="addr_content"></textarea>
						<span id="addr_warning"></span></p>
						<p><span class="dream_title">联系方式：</span><textarea name="phone_content" clos="100" rows="1" style="width:80%;"id="phone_content"></textarea>
						<span id="phone_warning"></span></p>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
					<button type="button" class="btn btn-primary" onclick="post_dream()">发布心愿</button>
				  </div>
			  
			</div>
		  </div>
		</div>
	
		<div id="contents">
			<div id="teacher_select_region">
				<p><span>时间分类:</span><a>不限</a><a>今日</a><a>一周内</a><a>一月内</a></P>
				<div><p style="padding-right:110px;"><span class="category">地区分类:</span><a>不限</a><a>北京</a><a>上海</a><a>天津</a><a>重庆</a><a>香港</a><a>澳门</a><a>台湾</a>
					<a>河北</a><a>山西</a><a>辽宁</a><a>吉林</a><a>黑龙江</a><a>江苏</a><a>浙江</a><a>安徽</a><a>福建</a>
					<a>江西</a><a>河南</a><a>陕西</a><a>海南</a>
				
					<a>四川</a><a>贵州</a>
					</p>
					<p style="margin-left:90px;"><a style="margin-left:7px;	margin-right:0px;font-weight:normal;font-size:13px;">广东</a><a>广西</a><a>山东</a><a>内蒙古</a><a>宁夏</a><a>新疆</a>
						<a>湖南</a><a>湖北</a><a>甘肃</a><a>西藏</a>
					</p>
				</div>
				<p><span>认领与否:</span><a>不限</a><a>未认领</a><a>已认领</a></P>
			</div>
			
			<div id="sort_region" >
				<div  style="border:solid 1px rgb(72,92,102);cursor:hand;height:25px;width:100px;font-size:15px;font-family:微软雅黑;margin-top:-60px;float:right;margin-bottom:0px;margin-right:200px;" onclick = "check_user_login()">
					<p style="margin-top:2px;text-align:center">发布心愿</p>
				</div>
				<button class="btn btn-primary hide" data-toggle="modal" data-target="#myModal" id="post_demand_modal">
					发布心愿
				</button>
				<button class="btn btn-primary hide" data-toggle="modal" data-target="#message_modal" id="post_message_modal">
					发布心愿
				</button>
			</div>
			
			<div id="teacher_result_region" >
	<?php
		require_once("user.php");
		require_once("db_dream.php");
		require_once("config_show.php");
		$d = new Dream();
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
					<div class="btn-group"  style="margin-bottom:5px;">';
			
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
	?>
			</div>
		</div>
	
	
<?php
	require("footer.php");
	do_footer();
?>