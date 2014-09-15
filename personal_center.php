<?php
	require_once("check_user.php");
	check_user();
	require_once("header.php");
	do_header2("海角课堂", $_SESSION['valid_user']);
	
?>
        <script type="text/javascript">
			function edit() {
				$('#user_sex').removeAttr("readonly");
				$('#user_school').removeAttr("readonly");
				$('#user_addr').removeAttr("readonly");
				$('#user_job').removeAttr("readonly");
				$sex = $("#user_sex").attr("value");
				if($sex=="男"  || $sex=="male") {
					document.getElementById("user_sex").options[1].selected ="selected"
				} else if($sex=="女" || $sex=="female") {
					document.getElementById("user_sex").options[2].selected ="selected"
				} else {
					document.getElementById("user_sex").options[0].selected ="selected"
				}
				document.getElementById("sex_select").style.display = "block";
				document.getElementById("sex_show").style.display = "none";
			}
			
			function save() {
				$('#user_sex').attr("readonly",true);
				$('#user_school').attr("readonly",true);
				$('#user_addr').attr("readonly",true);
				$('#user_job').attr("readonly",true);
				
				$sex = $("#user_sex").attr("value");
				$school = $("#user_school").attr("value");
				$addr = $("#user_addr").attr("value");
				$job = $("#user_job").attr("value");
				document.getElementById("sex_select").style.display = "none";
				document.getElementById("sex_show").style.display = "block";
				document.getElementById("user_sex_show").value = $sex;
				if($sex == "男" || $sex == "male") {
					$sex = "male";
				} else if($sex == "女" || $sex == "female") {
					$sex = "female";
				} else {
					$sex = "buxian";
				}
				
				$.ajax({ 
					type: "POST", 
					url: "modify_person_info.php", 
					data: {  school: $school,
							job: $job,
							sex: $sex,
							addr: $addr
                   },
					success: function(result) { 
						alert(result);
					}
					
				}); 
			}
			
			function lesson_edit(my) {
				my.parentElement.parentElement.children[0].readOnly=false;
				my.parentElement.parentElement.children[1].readOnly=false;
				
				
			}
			
			function lesson_save(my) {
				my.parentElement.parentElement.children[0].readOnly=true;
				my.parentElement.parentElement.children[1].readOnly=true;
				
				
				
				$lesson_name = my.parentElement.parentElement.children[0].value;
				$lesson_grade = my.parentElement.parentElement.children[1].value;
				$lesson_id = my.parentElement.parentElement.children[2].innerHTML;
				
				$.ajax({ 
					type: "POST", 
					url: "modify_lesson.php", 
					data: {  lesson_id: $lesson_id,
							lesson_grade: $lesson_grade,
							lesson_name: $lesson_name
                   },
					success: function(result) { 
						alert(result);
					}
					
				}); 
			}
			
			function lesson_delete(my) {
				$lesson_id = my.parentElement.parentElement.children[2].innerHTML;
				
				$.ajax({ 
					type: "POST", 
					url: "delete_lesson.php", 
					data: {  lesson_id: $lesson_id
                   },
					success: function(result) { 
						$('#lesson_content_div')[0].innerHTML = result;
					}
					
				}); 
			}
			
			
			function modify_passwd() {
				$old_passwd = $("#old_passwd").attr("value");
				$new_passwd = $("#new_passwd").attr("value");
				$new_passwd_again = $("#new_passwd_again").attr("value");
				
				if($old_passwd === "") {
					$('#old_warning')[0].innerHTML = (" 密码不能为空");
					return;
				} 
				if($new_passwd === "") {
					$('#new_warning')[0].innerHTML = (" 密码不能为空");
					return;
				} 
				if($new_passwd_again === "") {
					$('#new_again_warning')[0].innerHTML = (" 密码不能为空");
					return;
				} 
				if($new_passwd != $new_passwd_again) {
					$('#new_again_warning')[0].innerHTML = (" 两次密码不一致 ");
					return;
				}
				
				
				
				$.ajax({ 
					type: "POST", 
					url: "modify_password.php", 
					data: {  old_passwd: $old_passwd,
							new_passwd: $new_passwd
                   },
					success: function(result) { 
						if(result == "原密码错误") {
							$('#old_warning')[0].innerHTML = result;
							return;
						}
						$('#close_passwd').click();
						alert(result);
					}
					
				}); 
			}
			
			function add_lesson() {
				$lesson_name = $("#lesson_name").attr("value");
				$lesson_grade = $("#lesson_grade").attr("value");
				
				if($lesson_name === "") {
					$('#lesson_name_warning')[0].innerHTML = (" 课程名不能为空");
					return;
				} 
				if($lesson_grade === "") {
					$('#lesson_grade_warning')[0].innerHTML = (" 课程年级不能为空");
					return;
				} 
				
				
				
				$.ajax({ 
					type: "POST", 
					url: "add_lesson.php", 
					data: {  lesson_name: $lesson_name,
							lesson_grade: $lesson_grade
                   },
					success: function(result) { 
						
						$('#close_add_lesson_modal').click();
						$('#lesson_content_div')[0].innerHTML = result;
					}
					
				}); 
			}
			
			function undisplay_underline() {
				arr = $("#list_title").children();
				for(var i = 0;i < arr.length;i++) {
					arr[i].children[1].style.display="none";
				}
			}
			
			function change_selected(my) {
				undisplay_underline();
				my.children[1].style.display = "block";
				if(my.children[0].innerHTML == "基本信息") {
					document.getElementById("message_div").style.display = "none";
					document.getElementById("personnal_info_div").style.display = "block";
					document.getElementById("lesson_div").style.display = "none";
				} else if(my.children[0].innerHTML == "留言版") {
					document.getElementById("message_div").style.display = "block";
					document.getElementById("personnal_info_div").style.display = "none";
					document.getElementById("lesson_div").style.display = "none";
				} else {
					document.getElementById("message_div").style.display = "none";
					document.getElementById("personnal_info_div").style.display = "none";
					document.getElementById("lesson_div").style.display = "block";
				}
			}
		</script>
			<div id="contents">
				<ul class="nav nav-tabs " role="tablist" id="list_title" style="margin-top:30px;border-bottom:0px;margin-bottom:0px;">
					<li style="width:150px;margin-left:50px;" onclick="change_selected(this)"><p>基本信息</p><div style="height:5px;background-color:rgb(75,92,102)"></div></li>
					<li style="width:150px;margin-left:10px;" onclick="change_selected(this)"><p>留言版</p><div style="display:none;height:5px;background-color:rgb(75,92,102)"></div></li>
				<?php
						require_once("user.php");
						$user = new User();
						$data = $user->get_personal_info($_SESSION['valid_user']);
						if($data[0]['type'] == 'teacher') {
							echo '	<li style="width:150px;margin-left:10px;" onclick="change_selected(this)"><p>课程列表</p><div style="display:none;height:5px;background-color:rgb(75,92,102)"></div></li>
									';
						}
?>
				</ul>
				<hr style="margin-top:0px;border-top: 2px solid rgb(241,242,242);"/>

				<div style="background-color:rgb(241, 242, 242);min-height:500px;">
					
					
					<div class="modal fade hide" id="modify_passwd_modal"  role="dialog" >
						  <div class="modal-dialog">
							<div class="modal-content">
							  <div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" id="close_passwd" ><span aria-hidden="true">&times;</span><span class="sr-only">关闭</span></button>
								<h4 class="modal-title" id="myModalLabel">修改密码</h4>
							  </div>
						
								  <div class="modal-body">
									<form action="post_demand.php" method="post">
										<table>
											<tr>
												<td>旧密码</td>
												<td><input type="password" id="old_passwd" /><span id="old_warning"></span></td>
											</tr>
											<tr>
												<td>新密码</td>
												<td><input type="password" id="new_passwd" /><span id="new_warning"></span></td>
											</tr>
											<tr>
												<td>确认密码</td>
												<td><input type="password" id="new_passwd_again" /><span id="new_again_warning"></span></td>
											</tr>
										</table>
									</form>
								  </div>
								  <div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
									<button type="button" class="btn btn-primary" onclick="modify_passwd()">修改</button>
								  </div>
							  
							</div>
						  </div>
						</div>


					<div class="modal fade hide" id="add_lesson_modal"  role="dialog" >
						  <div class="modal-dialog">
							<div class="modal-content">
							  <div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" id="close_add_lesson_modal" ><span aria-hidden="true">&times;</span><span class="sr-only">关闭</span></button>
								<h4 class="modal-title" id="myModalLabel">添加课程</h4>
							  </div>
						
								  <div class="modal-body">
									<form action="post_demand.php" method="post">
										<table>
											<tr>
												<td>课程名</td>
												<td><input type="text" id="lesson_name" /><span id="lesson_name_warning"></span></td>
											</tr>
											<tr>
												<td>年级</td>
												<td><input type="text" id="lesson_grade" /><span id="lesson_grade_warning"></span></td>
											</tr>
										</table>
									</form>
								  </div>
								  <div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
									<button type="button" class="btn btn-primary" onclick="add_lesson()">添加</button>
								  </div>
							  
							</div>
						  </div>
						</div>
						
					
					<div class="modal fade hide" id="changePic"  role="dialog" >
					  <div class="modal-dialog">
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" id="close_post_message" ><span aria-hidden="true">&times;</span><span class="sr-only">关闭</span></button>
							<h4 class="modal-title" id="myModalLabel">上传头像</h4>
						  </div>
						  <div class="modal-body">
							 <form action="upload_favicon.php" method="post" enctype="multipart/form-data" >
								<input  type="file" name="file" id="choose_file_button" />
								<input class="btn" type="submit" name="submit" value="上传" id="update_file_button"/>
							 </form>
						  </div>
						  
						</div>
					  </div>
					</div>

									

					
					<div class="main_center" id="personnal_info_div">
						
						<?php
							
							require_once("user.php");
							$user = new User();
							$data = $user->get_personal_info($_SESSION['valid_user']);
							echo '<div style="float:left;width:180px;">';
							if($data[0]["has_pic"] == 0)
								echo '	<img src="images/favicon.gif" class="favicon" alt="Img" style="float:left;margin-left:10px;margin-top:10px;margin-right:10px" >';
							else 
								echo '	<img src="favicon_dir/'.$_SESSION['valid_user'].'.png" class="favicon" alt="Img" style="float:left;margin-left:10px;margin-top:10px;margin-right:10px" >';
							echo '	
									<button class="btn" data-toggle="modal" data-target="#changePic" style="margin-top:10px;margin-left:30px;">更改头像</button>
									</div>
									<div style="float:left;" id="person_info">';
							
							echo '<p><span class="personal_item"> 用户:</span><input type="text" id="user_name" value="'.$data[0]["name"].'" readonly="true"/></p>';
							echo '<p id="sex_select" style="display:none;"><span class="personal_item"> 性别:</span><select id="user_sex">
								<option value="保密" selected="selected">保密</option>
								<option value="男">男</option>
								<option value="女">女</option></select></p>';
							echo '<p id="sex_show"><span class="personal_item"> 性别:</span><input type="text" id="user_sex_show" value="';
							if( $data[0]["sex"] == "male" || $data[0]["sex"] == "男") {
								echo "男";
							} else if( $data[0]["sex"] == "female" || $data[0]["sex"] == "女") {
								echo "女";
							} else {
								echo "保密";
							}
							echo '" readonly="true"/></p>';
							echo '<p><span class="personal_item"> 学校:</span><input type="text" id="user_school" value="'.$data[0]["school"].'" readonly="true"/></p>';
							echo '<p><span class="personal_item"> 地址:</span><input type="text" id="user_addr" value="'.$data[0]["addr"].'" readonly="true"/></p>';
							echo '<p><span class="personal_item"> 工作:</span><input type="text" id="user_job" value="'.$data[0]["job"].'" readonly="true"/></p>';
							echo '<p><span class="personal_item"> 评价:</span> <img src="images/star.jpg" width="15px" height="15px">';
							for($i=0;$i < 5;$i++) {
								if($data[0]['score'] - $i >= 1) {
									echo '<img src="images/star.jpg" width="15px" height="15px">';
								} else if($$data[0]['score'] - $i > 0) {
									echo '<img src="images/half_star.png" width="15px" height="15px">';
								} else {
									echo '<img src="images/nst.png" width="15px" height="15px">';
								}
							}
							echo '<span>&nbsp&nbsp'.round($data[0]['score'], 1).'/'.$data[0]['score_count'].'</span>';
							echo '</p>';
							echo '		
								<div >
									<button class="btn btn-primary" style="margin-bottom:10px;margin-left:40px;" onclick = "edit()">
										编辑
									</button>
									<button class="btn btn-primary" style="margin-bottom:10px;margin-left:40px;" onclick = "save()">
										保存
									</button>
									<button class="btn btn-primary" style="margin-bottom:10px;margin-left:40px;" data-toggle="modal" data-target="#modify_passwd_modal">
										修改密码
									</button>
									
								</div>
							';
						?>
						</div>
				
					</div>

					<div class="main_center" style="display:none;" id="lesson_div">
						
						
							<div>
							
							<?php
								require_once("user.php");
								require_once("db_lesson.php");
								$user = new User();
								$id = $user->get_personal_info($_SESSION['valid_user']);
								$id = $id[0]['id_user'];
								$m = new Lesson();
								$data = $m->get_lesson($id);
								echo '<span style="margin-left:100px;">课程名</span><span style="margin-left:150px;">年级</span>';
								echo '<div id="lesson_content_div">';
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
								echo '</div>';
								
								echo '<button class="btn btn-primary" style="margin-bottom:10px;margin-left:280px;margin-right:auto;" data-toggle="modal" data-target="#add_lesson_modal">
									添加
								</button>';
								
							?>
							</div>
					</div>
					<div class="main_center" style="display:none;" id="message_div">
						
						<div id="section">
							
							<div style="font-family:'黑体';margin-left:10px;">
							<?php
								require_once("user.php");
								require_once("db_message.php");
								$user = new User();
								$id = $user->get_personal_info($_SESSION['valid_user']);
								$id = $id[0]['id_user'];
								$m = new Message();
								$data = $m->get_message($id);
								foreach($data as $item) {
									
									if($id == $item['user_id_from']) {
										$name = $user->get_personal_info_from_id($item['user_id_to']);
										$name = $name[0]['name'];
										echo '<p> To '.$name.' ( '.$item['time'].' ):</p><p>    '.$item['content'].'</p>';
									} else {
										$name = $user->get_personal_info_from_id($item['user_id_from']);
										$name = $name[0]['name'];
										echo '<p> From '.$name.' ( '.$item['time'].' ):</p><p>    '.$item['content'].'</p>';
									}
								}
								
							?>
							</div>
						</div>
					</div>
				</div>
				
			</div>
<?php
	require("footer.php");
	do_footer();
?>