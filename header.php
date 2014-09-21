<?php 
		function do_header($title, $page) {
		
		echo '				
			<html>
			<head>
				
				<meta charset="UTF-8">
				<title>海角课堂</title>
				<link rel="shortcut icon" href="images/favicon.ico">
				<link rel="stylesheet" href="css/style.css" type="text/css">
				<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
				<link rel="stylesheet" href="css/bootstrap-responsive.css" type="text/css">
				<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
				<script type="text/javascript" src="js/jquery.blockUI.js"></script>
				<script language="javascript" src="js/jquery.gylib.unpack.v1.2.js"></script>
				<script language="javascript" src="js/bootstrap.js"></script>
				<script type="text/javascript">
					
				
				
					function check(my){	
						 document.getElementById("loginform").style.top="65px";
						 document.getElementById("loginform").style.right="240px";
						 document.getElementById("loginform").style.display="block";
						//设置弹出框距离顶部和左部的距离，也可以固定为 xxx px，并让它显示出来
						if(my.innerHTML.indexOf( "登入") >= 0) {
							show_login();
						} else {
							show_register();
						}

					}

					function close1(){
						 document.getElementById("loginform").style.display="none";
					}
					
					function show_login() {
						document.getElementById("login_div").style.display="block";
						document.getElementById("register_div").style.display="none";
					}
					function show_register() {
						document.getElementById("login_div").style.display="none";
						document.getElementById("register_div").style.display="block";
					}
					
					function show_verify_code() {
						document.getElementById("verify_code1").style.display="block";
						document.getElementById("verify_code2").style.display="block";
					}
					function hide_verify_code() {
						document.getElementById("verify_code1").style.display="none";
						document.getElementById("verify_code2").style.display="none";
					}
					
					
				</script>
			</head>
			<body>
				<div id="loginform" style="display:none;top=50px;left=60px;" >
					<div id="login_div">	
						<div style="height:35px;">
							<div style="width:143px;float:left;text-align: center;background-color:#ccc;height: inherit;">
								<span class="loginform_item">登录</span>
							</div>
							
							<div onclick="show_register()" style="cursor:hand;width: 142px;float: right;text-align: center;background-color: #3DA5E6;height: inherit;">
								<span class="loginform_item">注册</span>
							</div>
							
						</div>
						<form action="verify_user.php" method="post">
							<div style="margin-top:10px;margin-left:30px;margin-right:30px;">
								<div class="loginform_input_item">
									<span class="loginform_name_style">用户名</span>
								</div>
								<div class="loginform_input_item">
									<input style="border-radius: 50px; -moz-border-radius: 50px; -webkit-border-radius: 50px;" type="text" name="name" />
								</div>
								<div class="loginform_input_item">
									<span  class="loginform_name_style">密码</span>
								</div>
								<div class="loginform_input_item">
									<input style="border-radius: 50px; -moz-border-radius: 50px; -webkit-border-radius: 50px;   " type="password" name="password" />
								</div>
								<div class="loginform_input_item">
									<input type="submit" style="margin-left:50px;width:90px;" class="btn" value="登录" />
									<a style="cursor:hand;margin-left:10px;margin-top:3px;" onclick="show_register()">注册</a>
									<a style="cursor:hand;margin-left:10px;margin-top:3px;" onclick="close1()">取消</a>
								</div>
							</div>
						</form>
					</div>
					<div id="register_div" style="display:none;">
						<div style="height:35px">
							<div onclick="show_login()" style="cursor:hand;width:143px;float:left;text-align: center;background-color:#3DA5E6;height: inherit;">
								<span class="loginform_item">登录</span>
							</div>
					
							<div style="width: 142px;float: right;text-align: center;background-color: #ccc;height: inherit;">
								<span class="loginform_item">注册</span>
							</div>
							
						</div>
						<form action="register.php" method="post" onsubmit="document.charset=\'utf-8\'">
							<div style="margin-top:10px;margin-left:30px;margin-right:30px;">
								<div class="loginform_input_item">
									<span class="loginform_name_style">用户名</span>
								</div>
								<div class="loginform_input_item">
									<input style="border-radius: 50px; -moz-border-radius: 50px; -webkit-border-radius: 50px;" type="text" name="name" />
								</div>
								<div class="loginform_input_item">
									<span  class="loginform_name_style">密码</span>
								</div>
								<div class="loginform_input_item">
									<input style="border-radius: 50px; -moz-border-radius: 50px; -webkit-border-radius: 50px;   " type="password" name="password" />
								</div>
								<div class="loginform_input_item">
									<span  class="loginform_name_style">确认密码</span>
								</div>
								<div class="loginform_input_item">
									<input style="border-radius: 50px; -moz-border-radius: 50px; -webkit-border-radius: 50px;   " type="password" name="password2" />
								</div>
								<div class="loginform_input_item">
									<span class="loginform_name_style">身份选择</span>
								</div>
								<div class="loginform_input_item">
									<label style="float: left;width: 90px;font-family: "黑体";font-size: 15px;">
									<input type="radio" style="margin-bottom:6px" name="job" value="student"  checked="checked"/>学生</label>
									<label style="float: left;width: 90px;font-family: "黑体";font-size: 15px;">
									<input type="radio" style="margin-bottom:6px" name="job" value="teacher"  />老师</label>
								</div>
								<div class="loginform_input_item">
									<span class="loginform_name_style">性别</span>
								</div>
								<div class="loginform_input_item">
									<label style="float: left;width: 90px;font-family: "黑体";font-size: 15px;">
									<input type="radio"  style="margin-bottom:6px" name="sex" value="male" checked="checked"/>男</label>
									<label style="float: left;width: 90px;font-family: "黑体";font-size: 15px;">
									<input type="radio"  style="margin-bottom:6px" name="sex" value="female" />女</label>
								</div>
								<div class="loginform_input_item">
									<span class="loginform_name_style">学校</span>
								</div>
								<div class="loginform_input_item">
									<input style="border-radius: 50px; -moz-border-radius: 50px; -webkit-border-radius: 50px;" type="text" name="school" />
								</div>
								<div class="loginform_input_item" id="verify_code1" style="display:none">
									<span class="loginform_name_style"  style="display:none;" >邀请码</span>
								</div>
								<div class="loginform_input_item" style="display:none;">
									<input value="345678" id="verify_code2" style="display:none;border-radius: 50px; -moz-border-radius: 50px; -webkit-border-radius: 50px;" type="text" name="verify_code" />
								</div>
								
								
								<div class="loginform_input_item">
									<input type="submit" style="margin-left:50px;width:90px;" class="btn" value="注册" />
									<a style="cursor:hand;margin-left:10px;margin-top:3px;" onclick="show_login()">登录</a>
									<a style="cursor:hand;margin-left:10px;margin-top:3px;" onclick="close1()">取消</a>
								</div>
							</div>

						</form>
					</div>
				</div>	
				<div id="background">
						<div id="header" style="width:100%;margin-top:0px;">
							<div id="top-bar" style="background:rgb(72,92,102);height:5px;margin-bottom:0px;"></div>
							<div id="header-bar">
								<div id="logo">
									<a href="index.php"><img src="images/logo.png" style="float:left;height:55px;" alt="LOGO" ></a>
								<!--	<div style="float:left;height:50px;font-family:微软雅黑;margin-left:40px;font-size:17px;"><p style="margin-bottom:0px;margin-top:5px;">满载求知渴望</p><p style="margin-top:0px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp梦想动力起航</p></div>
								-->
								</div>
								
									<div id="welcome">
									';
									@session_start();
									if(isset($_SESSION['valid_user'])) {
										/*echo '<a href="personal_center.php" id="login_username" 
											style="margin-top: 2px;font-family: '."'黑体'".';font-size: 15;">'.$_SESSION['valid_user'].'</a>';*/
										echo 
											'<div class="dropdown" style="float:left;">
											  <div id="login_username"  class="dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" style="cursor:hand;font-size:17px;margin-top:15px;font-family:微软雅黑">'.
												$_SESSION['valid_user']
												.'<span class="caret"></span>
											  </div>
											  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
												<li role="presentation"><a role="menuitem" tabindex="-1" href="personal_center.php" >个人中心</a></li>
												<li role="presentation"><a role="menuitem" tabindex="-1" href="http://202.120.1.47/">视频房间</a></li>
												<li role="presentation"><a role="menuitem" tabindex="-1" href="logout.php">登出</a></li>
												
											  </ul>
											</div>';
									} else {
										echo '
											<div style="float:right;margin-top:20px;margin-right:0%;">
												<img src="images/login_head.png" style="margin-top:-2px;"/>
												<span onclick="check(this)" style="cursor:hand;margin-top: 2px;font-family: '."'黑体'".';font-size: 15;">
													登入
												</span>
												<span style="margin-top: 2px;font-family: '."'黑体'".';font-size: 15;">
													|
												</span>
												<span onclick="check(this)" style="cursor:hand;margin-top: 2px;font-family: '."'黑体'".';font-size: 15;">
													注册
												</span>
											</div>
										';
									}
									
				echo '				
								</div>
								
								<div id="navigation">
									
									<ul>
										<li ';
			if($page == "index")
				echo 'class="selected"';
			echo '	 >
											<a href="index.php"><p>网站首页</p><p style="font-size:1px;margin-top:3px;">HOME</p></a>
										</li>
										<li ';
			if($page == "activity")
				echo 'class="selected"';
			echo '>
											<a href="activity.php"><p>公益活动</p><p style="font-size:1px;margin-top:3px;">ACTIVITY</p></a>
										</li>
										<li ';
			if($page == "demand")
				echo 'class="selected"';
			echo '>
											<a href="demand.php"><p>需求大厅</p><p style="font-size:1px;margin-top:3px;">DEMAND</p></a>
										</li>
										<li ';
			if($page == "teacher")
				echo 'class="selected"';
			echo '>
											<a href="teacher.php"><p>海角教师</p><p style="font-size:1px;margin-top:3px;">TEACHER</p></a>
										</li>
										<li ';
			if($page == "resource")
				echo 'class="selected"';
			echo '>
											<a href="resource.php"><p>资源文库</p><p style="font-size:1px;margin-top:3px;">RESOURCE</p></a>
										</li>
										<li ';
			if($page == "dream")
				echo 'class="selected"';
			echo '>
											<a href="dream.php"><p>筑梦圆梦</p><p style="font-size:1px;margin-top:3px;">DREAM</p></a>
										</li>
										<li>
											<a href="http://202.120.1.47/"><p>视频房间</p><p  style="font-size:1px;margin-top:3px;">ROOM</p></a>
										</li>
										
									</ul>
								</div>
							
							
							</div>
							
						</div>
						';
		echo '<div id="page">';
	}
	
	function do_header2($title, $name, $page="") {
		
		echo '				
			<html>
			<head>
				
				<meta charset="UTF-8">
				<title>海角课堂</title>
				<link rel="stylesheet" href="css/style.css" type="text/css">
				<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
				<link rel="stylesheet" href="css/bootstrap-responsive.css" type="text/css">
				<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
				<script type="text/javascript" src="js/jquery.blockUI.js"></script>
				<script language="javascript" src="js/jquery.gylib.unpack.v1.2.js"></script>
				<script language="javascript" src="js/bootstrap.js"></script>
				<script type="text/javascript">
					
				
				
					function check(my){	
						 document.getElementById("loginform").style.top="65px";
						 document.getElementById("loginform").style.right="240px";
						 document.getElementById("loginform").style.display="block";
						//设置弹出框距离顶部和左部的距离，也可以固定为 xxx px，并让它显示出来
						if(my.innerHTML.indexOf( "登入") >= 0) {
							show_login();
						} else {
							show_register();
						}

					}

					function close1(){
						 document.getElementById("loginform").style.display="none";
					}
					
					function show_login() {
						document.getElementById("login_div").style.display="block";
						document.getElementById("register_div").style.display="none";
					}
					function show_register() {
						document.getElementById("login_div").style.display="none";
						document.getElementById("register_div").style.display="block";
					}
					
					function show_verify_code() {
						document.getElementById("verify_code1").style.display="block";
						document.getElementById("verify_code2").style.display="block";
					}
					function hide_verify_code() {
						document.getElementById("verify_code1").style.display="none";
						document.getElementById("verify_code2").style.display="none";
					}
					
					
				</script>
			</head>
			<body>
				<div id="loginform" style="display:none;top=50px;left=60px;" >
					<div id="login_div">	
						<div style="height:35px;">
							<div style="width:143px;float:left;text-align: center;background-color:#ccc;height: inherit;">
								<span class="loginform_item">登录</span>
							</div>
							
							<div onclick="show_register()" style="cursor:hand;width: 142px;float: right;text-align: center;background-color: #3DA5E6;height: inherit;">
								<span class="loginform_item">注册</span>
							</div>
							
						</div>
						<form action="verify_user.php" method="post">
							<div style="margin-top:10px;margin-left:30px;margin-right:30px;">
								<div class="loginform_input_item">
									<span class="loginform_name_style">用户名</span>
								</div>
								<div class="loginform_input_item">
									<input style="border-radius: 50px; -moz-border-radius: 50px; -webkit-border-radius: 50px;" type="text" name="name" />
								</div>
								<div class="loginform_input_item">
									<span  class="loginform_name_style">密码</span>
								</div>
								<div class="loginform_input_item">
									<input style="border-radius: 50px; -moz-border-radius: 50px; -webkit-border-radius: 50px;   " type="password" name="password" />
								</div>
								<div class="loginform_input_item">
									<input type="submit" style="margin-left:50px;width:90px;" class="btn" value="登录" />
									<a style="cursor:hand;margin-left:10px;margin-top:3px;" onclick="show_register()">注册</a>
									<a style="cursor:hand;margin-left:10px;margin-top:3px;" onclick="close1()">取消</a>
								</div>
							</div>
						</form>
					</div>
					<div id="register_div" style="display:none;">
						<div style="height:35px">
							<div onclick="show_login()" style="cursor:hand;width:143px;float:left;text-align: center;background-color:#3DA5E6;height: inherit;">
								<span class="loginform_item">登录</span>
							</div>
					
							<div style="width: 142px;float: right;text-align: center;background-color: #ccc;height: inherit;">
								<span class="loginform_item">注册</span>
							</div>
							
						</div>
						<form action="register.php" method="post" onsubmit="document.charset=\'utf-8\'">
							<div style="margin-top:10px;margin-left:30px;margin-right:30px;">
								<div class="loginform_input_item">
									<span class="loginform_name_style">用户名</span>
								</div>
								<div class="loginform_input_item">
									<input style="border-radius: 50px; -moz-border-radius: 50px; -webkit-border-radius: 50px;" type="text" name="name" />
								</div>
								<div class="loginform_input_item">
									<span  class="loginform_name_style">密码</span>
								</div>
								<div class="loginform_input_item">
									<input style="border-radius: 50px; -moz-border-radius: 50px; -webkit-border-radius: 50px;   " type="password" name="password" />
								</div>
								<div class="loginform_input_item">
									<span  class="loginform_name_style">确认密码</span>
								</div>
								<div class="loginform_input_item">
									<input style="border-radius: 50px; -moz-border-radius: 50px; -webkit-border-radius: 50px;   " type="password" name="password2" />
								</div>
								<div class="loginform_input_item">
									<span class="loginform_name_style">身份选择</span>
								</div>
								<div class="loginform_input_item">
									<label style="float: left;width: 90px;font-family: "黑体";font-size: 15px;">
									<input type="radio" style="margin-bottom:6px" name="job" value="student"  checked="checked"/>学生</label>
									<label style="float: left;width: 90px;font-family: "黑体";font-size: 15px;">
									<input type="radio" style="margin-bottom:6px" name="job" value="teacher"  />老师</label>
								</div>
								<div class="loginform_input_item">
									<span class="loginform_name_style">性别</span>
								</div>
								<div class="loginform_input_item">
									<label style="float: left;width: 90px;font-family: "黑体";font-size: 15px;">
									<input type="radio"  style="margin-bottom:6px" name="sex" value="male" checked="checked"/>男</label>
									<label style="float: left;width: 90px;font-family: "黑体";font-size: 15px;">
									<input type="radio"  style="margin-bottom:6px" name="sex" value="female" />女</label>
								</div>
								<div class="loginform_input_item">
									<span class="loginform_name_style">学校</span>
								</div>
								<div class="loginform_input_item">
									<input style="border-radius: 50px; -moz-border-radius: 50px; -webkit-border-radius: 50px;" type="text" name="school" />
								</div>
								<div class="loginform_input_item" id="verify_code1" style="display:none">
									<span class="loginform_name_style"  style="display:none;" >邀请码</span>
								</div>
								<div class="loginform_input_item" style="display:none;">
									<input value="345678" id="verify_code2" style="display:none;border-radius: 50px; -moz-border-radius: 50px; -webkit-border-radius: 50px;" type="text" name="verify_code" />
								</div>
								
								
								<div class="loginform_input_item">
									<input type="submit" style="margin-left:50px;width:90px;" class="btn" value="注册" />
									<a style="cursor:hand;margin-left:10px;margin-top:3px;" onclick="show_login()">登录</a>
									<a style="cursor:hand;margin-left:10px;margin-top:3px;" onclick="close1()">取消</a>
								</div>
							</div>

						</form>
					</div>
				</div>	
				<div id="background">
						<div id="header" style="width:100%;margin-top:0px;">
							<div id="top-bar" style="background:#bbb;height:5px;margin-bottom:0px;"></div>
							<div id="header-bar">
								<div id="logo">
									<a href="index.php"><img src="images/logo.png" style="float:left;height:55px;" alt="LOGO" ></a>
								<!--	<div style="float:left;height:50px;font-family:微软雅黑;margin-left:40px;font-size:17px;"><p style="margin-bottom:0px;margin-top:5px;">满载求知渴望</p><p style="margin-top:0px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp梦想动力起航</p></div>
								-->
								</div>
								
									<div id="welcome">
									';
									
								
									if($name != "") {
										/*echo '<a href="personal_center.php" id="login_username" 
											style="margin-top: 2px;font-family: '."'黑体'".';font-size: 15;">'.$_SESSION['valid_user'].'</a>';*/
										echo 
											'<div class="dropdown" style="float:left;">
											  <div id="login_username"  class="dropdown-toggle"  id="dropdownMenu1" data-toggle="dropdown" style="cursor:hand;font-size:17px;margin-top:15px;font-family:微软雅黑">'.
												$_SESSION['valid_user']
												.'<span class="caret"></span>
											  </div>
											  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
												<li role="presentation"><a role="menuitem" tabindex="-1" href="personal_center.php" >个人中心</a></li>
												<li role="presentation"><a role="menuitem" tabindex="-1" href="http://202.120.1.47/">视频房间</a></li>
												<li role="presentation"><a role="menuitem" tabindex="-1" href="logout.php">登出</a></li>
												
											  </ul>
											</div>';
									} else {
										echo '
											<div style="float:right;margin-top:20px;margin-right:0%;">
												<img src="images/login_head.png" style="margin-top:-2px;"/>
												<span onclick="check(this)" style="cursor:hand;margin-top: 2px;font-family: '."'黑体'".';font-size: 15;">
													登入
												</span>
												<span style="margin-top: 2px;font-family: '."'黑体'".';font-size: 15;">
													|
												</span>
												<span onclick="check(this)" style="cursor:hand;margin-top: 2px;font-family: '."'黑体'".';font-size: 15;">
													注册
												</span>
											</div>
										';
									}
									
				echo '				
								</div>
								
								<div id="navigation">
									
									<ul>
										<li ';
			if($page == "index")
				echo 'class="selected"';
			echo '	>
											<a href="index.php"><p>网站首页</p><p style="font-size:1px;margin-top:3px;">HOME</p></a>
										</li>
										<li ';
			if($page == "activity")
				echo 'class="selected"';
			echo '>
											<a href="activity.php"><p>公益活动</p><p  style="font-size:1px;margin-top:3px;">ACTIVITY</p></a>
										</li>
										<li ';
			if($page == "demand")
				echo 'class="selected"';
			echo '>
											<a href="demand.php"><p>需求大厅</p><p style="font-size:1px;margin-top:3px;">DEMAND</p></a>
										</li>
										<li ';
			if($page == "teacher")
				echo 'class="selected"';
			echo '>
											<a href="teacher.php"><p>海角教师</p><p style="font-size:1px;margin-top:3px;">TEACHER</p></a>
										</li>
										<li ';
			if($page == "resource")
				echo 'class="selected"';
			echo '>
											<a href="resource.php"><p>资源文库</p><p style="font-size:1px;margin-top:3px;">RESOURCE</p></a>
										</li>
										<li ';
			if($page == "dream")
				echo 'class="selected"';
			echo '>
											<a href="dream.php"><p>筑梦圆梦</p><p style="font-size:1px;margin-top:3px;">DREAM</p></a>
										</li>
										<li>
											<a href="http://202.120.1.47/"><p>视频房间</p><p style="font-size:1px;margin-top:3px;">ROOM</p></a>
										</li>
										
									</ul>
								</div>
							
							
							</div>
							
						</div>
						';
		echo '<div id="page">';
	}
	



?>