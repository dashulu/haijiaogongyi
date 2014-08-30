<?php
	require("header.php");
	do_header("海角课堂", "demand");
	
?>
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
					$('#close_post_demand').click();
					return;
			}
		
			demand_user_id = my.parentNode.childNodes[0].innerHTML;
			$("#post_message_modal").click();
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
			$grade = $element[0].innerHTML;
			$subject = $element[1].innerHTML;
			$addr = $element[2].innerHTML;
			$sex = $element[3].innerHTML;
			$page_num = $("#page_num")[0].innerHTML;
			
			$.ajax({ 
				type: "POST", 
				url: "select_demand.php", 
				data: {  sex: $sex,
						subject: $subject,
						grade: $grade,
						addr: $addr,
						page_num: $page_num
			   },
				success: function(result) { 
					$('#teacher_result_region').html(result); 
				}
				
			}); 
		}
	</script>
	
	<script language="javascript" src="js/selected_region.js"></script>
    <div id="contents">
		<div id="teacher_select_region" style="border:1px solid #ccc">
			<p><span class="category">年级分类:</span><a class="item_selected">不限</a><a>一年级</a><a>二年级</a><a>三年级</a><a>四年级</a><a>五年级</a><a>六年级</a></P>
			<hr>
			<p><span class="category">家教科目:</span><a>不限</a><a>语文</a><a>数学</a><a>英语</a><a>物理</a><a>化学</a><a>生物</a></P>
			<hr>
			<p><span class="category">地区分类:</span><a>不限</a><a>北京</a><a>上海</a><a>天津</a><a>重庆</a><a>香港</a><a>澳门</a><a>台湾</a>
				<a>河北</a><a>山西</a><a>辽宁</a><a>吉林</a><a>黑龙江</a><a>江苏</a><a>浙江</a><a>安徽</a><a>福建</a>
				<a>江西</a><a>河南</a><a>陕西</a><a>海南</a>
				<?php
					for($i = 0;$i < 30;$i++) {
						echo '&nbsp';
					}
				?>
				<a>四川</a><a>贵州</a>
				<a>广东</a><a>广西</a><a>山东</a><a>内蒙古</a><a>宁夏</a><a>新疆</a>
				<a>湖南</a><a>湖北</a><a>甘肃</a><a>西藏</a>
				</P>
			<hr>
			<p><span class="category">学生性别:</span><a>不限</a><a>男</a><a>女</a></P>
		</div>
		<div id="sort_region" style="margin-top:10px;margin-bottom:0px;height:40px;">
			<button class="btn btn-primary" style="float:right;margin-bottom:0px;margin-right:40px;" onclick = "check_user_login()">
				发布需求
			</button>
			<button class="btn btn-primary hide" data-toggle="modal" data-target="#myModal" id="post_demand_modal">
				发布需求
			</button>
			<button class="btn btn-primary hide" data-toggle="modal" data-target="#message_modal" id="post_message_modal">
				发布需求
			</button>
		</div>
		
		
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
						<textarea name="message_content" clos="100" rows="5" style="width:80%;font-family:'黑体';"id="message_content"></textarea>
						<span id="message_warning"></span>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
					<button type="button" class="btn btn-primary" onclick="post_message()">发布留言</button>
				  </div>
			  
			</div>
		  </div>
		</div>

		
		
		<div class="modal fade hide" id="myModal"  role="dialog" >
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" id="close_post_demand" ><span aria-hidden="true">&times;</span><span class="sr-only">关闭</span></button>
				<h4 class="modal-title" id="myModalLabel">发布需求</h4>
			  </div>
				<script type="text/javascript">
			function post_demand(){	
				if($("#login_username").length == 0) {
					alert("请先登入");
					$('#close_post_demand').click();
					return;
				}
				
				$name = $("#name").attr("value");
				$desc = $("#desc").val();
				$sex = $("#sex").attr("value");
				$subject = $("#subject").attr("value");
				$grade = $("#grade").attr("value");
				$phone = $("#phone").attr("value");
				$addr = $("#addr").attr("value");
				if($name === "") {
					$('#name_warning')[0].innerHTML = (" 名字不能为空");
					return;
				}
				if($desc === "") {
					$('#desc_warning')[0].innerHTML = (" 需求描述不能为空");
					return;
				}
				if($subject === "") {
					$('#subject_warning')[0].innerHTML = (" 科目不能为空");
					return;
				}
				if($phone === "") {
					$('#phone_warning')[0].innerHTML = (" 联系方式不能为空");
					return;
				}
				
				$.ajax({ 
					type: "POST", 
					url: "post_demand.php", 
					data: {  name: $name,
							desc: $desc,
							sex: $sex,
							subject: $subject,
							grade: $grade,
							phone: $phone,
							addr: $addr
                   },
					success: function(result) { 
						$('#teacher_result_region').html(result); 
						$('#close_post_demand').click();
					}
					
				}); 
			}
		</script>
				  <div class="modal-body">
					<form action="post_demand.php" method="post">
						<table id="demand_table">
							<tr>
								<td>姓名</td>
								<td><input type="text" id="name" /><span id="name_warning"></span></td>
							</tr>
							<tr>
								<td>需求描述</td>
								<td><textarea  clos="100" rows="5" style="width:300px;font-family:'黑体'"id="desc"></textarea>
									<span id="desc_warning"></span></td>
							</tr>
							<tr>
								<td>科目</td>
								<td><input type="text" id="subject" /><span id="subject_warning"></span></td>
							</tr>
							<tr>
								<td>联系方式</td>
								<td><input type="text" id="phone" /><span id="phone_warning"></span></td>
							</tr>
							<tr>
								<td>地区</td>
								<td><input type="text" id="addr" /></td>
							</tr>
							<tr>
								<td>性别</td>
								<td><select id="sex">
									<option value="buxian" selected="selected">不限</option>
									<option value="男">男</option>
									<option value="女">女</option>
								</select></td>
							</tr>
							<tr>
								<td>年级</td>
								<td><select id="grade">
									<option value="buxian" selected="selected">不限</option>
									<option value="一年级">一年级</option>
									<option value="二年级">二年级</option>
									<option value="三年级">三年级</option>
									<option value="四年级">四年级</option>
									<option value="五年级">五年级</option>
									<option value="六年级">六年级</option>
								</select></td>
							</tr>
							<tr>
								<td><input type="submit" value="发布需求" class="hide" id="post_demand_button"/></td>
							</tr>
						</table>
					</form>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
					<button type="button" class="btn btn-primary" onclick="post_demand()">发布需求</button>
				  </div>
			  
			</div>
		  </div>
		</div>
<?php
		require_once("db_demands.php");
		require_once("user.php");
		require_once("config_show.php");
		echo '<div id="teacher_result_region">';
		$d = new Demand();
		$user = new User();
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
		} else {
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
		
?>
	</div>
<?php
	require("footer.php");
	do_footer();
?>