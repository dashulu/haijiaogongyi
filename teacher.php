<?php
	require("header.php");
	do_header("海角课堂", "teacher");
	
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
			$("#post_demand_modal").click();
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
			$subject = $element[0].innerHTML;
			$addr = $element[1].innerHTML;
			$sex = $element[2].innerHTML;
			$job = $element[3].innerHTML;
			$page_num = $("#page_num")[0].innerHTML;
			
			$.ajax({ 
				type: "POST", 
				url: "select_teacher.php", 
				data: {  sex: $sex,
						subject: $subject,
						addr: $addr,
						job: $job,
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
						<h2 style="float:left;margin-bottom:20px;">评分:</h2><input name="my_input" value="3" id="rating_simple" type="text" style="display:none">
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
					<button type="button" class="btn btn-primary" onclick="post_message()">发布评分</button>
				  </div>
			  
			</div>
		  </div>
		</div>
	
	
				  

	<button class="btn btn-primary hide" data-toggle="modal" data-target="#message_modal" id="post_message_modal">
		发布需求
	</button>
	<div class="modal fade hide" id="message_modal"  role="dialog" >
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" id="close_post_message" ><span aria-hidden="true">&times;</span><span class="sr-only">关闭</span></button>
				<h4 class="modal-title" id="myModalLabel">留言</h4>
			  </div>
				<script type="text/javascript">
					function post_message(){	
						if($("#login_username").length == 0) {
							alert("请先登入");
							$('#close_post_message').click();
							return;
						}
						
						$message = $("#message_content").val();
						
						if($message == "") {
							$('#message_warning')[0].innerHTML = (" 留言不能为空");
							return;
						}
						if(demand_user_id === -1) {
							alert("该信息非法，无法发表留言");
							return;
						}
						$demand_id = demand_user_id;
						demand_user_id = -1;


						$.ajax({ 
							type: "POST", 
							url: "post_message.php", 
							data: {  message: $message,
									message_to: $demand_id
						   },
							success: function(result) { 
							//	$('#teacher_result_region').html(result); 
								alert(result);
								$('#close_post_message').click();
							}
							
						}); 
					}
				</script>
				  <div class="modal-body">
						<textarea name="message_content" clos="100" rows="5" style="width:80%;;"id="message_content"></textarea>
						<span id="message_warning"></span>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
					<button type="button" class="btn btn-primary" onclick="post_message()">发布留言</button>
				  </div>
			  
			</div>
		  </div>
		</div>
	
	<div id="contents">
		<div id="teacher_select_region" >
			<p><span>家教科目:</span><a>不限</a><a>语文</a><a>数学</a><a>英语</a><a>物理</a><a>化学</a><a>生物</a></P>
			<div><p style="padding-right:110px;"><span class="category">地区分类:</span><a>不限</a><a>北京</a><a>上海</a><a>天津</a><a>重庆</a><a>香港</a><a>澳门</a><a>台湾</a>
				<a>河北</a><a>山西</a><a>辽宁</a><a>吉林</a><a>黑龙江</a><a>江苏</a><a>浙江</a><a>安徽</a><a>福建</a>
				<a>江西</a><a>河南</a><a>陕西</a><a>海南</a>
			
				<a>四川</a><a>贵州</a>
				</p>
				<p style="margin-left:90px;"><a style="margin-left:7px;	margin-right:0px;font-weight:normal;font-size:13px;">广东</a><a>广西</a><a>山东</a><a>内蒙古</a><a>宁夏</a><a>新疆</a>
					<a>湖南</a><a>湖北</a><a>甘肃</a><a>西藏</a>
				</p>
			</div>
			<p><span>教师性别:</span><a>不限</a><a>男</a><a>女</a></P>
			<p><span>教师分类:</span><a>不限</a><a>本科生</a><a>研究生</a><a>在职教师</a><a>其他</a></P>
		</div>
		<div id="teacher_result_region" >
<?php
	require_once("user.php");
	require_once("db_lesson.php");
	require_once("config_show.php");
	
	$user = new User();
	$sql = "select * from user where type='teacher'  limit 0,".DEMAND_PAGE_NUM;
	$count = 0;
	$page_num = 1;
	$count = $user->select("select count(*) from user where type='teacher'" );
	$count = $count[0]['count(*)'];
	
	$data = $user->select($sql);
	$lesson = new Lesson();
	
	
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
?>
		</div>
	</div>
<?php
	require("footer.php");
	do_footer();
?>