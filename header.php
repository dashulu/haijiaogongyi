<?php 
		function do_header($title, $page) {
		
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
					
				
				
					function check(){	
						 document.getElementById("loginform").style.top="65px";
						 document.getElementById("loginform").style.right="240px";
						 document.getElementById("loginform").style.display="block";
						//设置弹出框距离顶部和左部的距离，也可以固定为 xxx px，并让它显示出来


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
									<a href="index.php"><img src="images/logo.png" alt="LOGO" height="50px" width="110px" ></a>
								</div>
								<div id="navigation">
									
									<ul>
										<li ';
			if($page == "index")
				echo 'class="selected"';
			echo '	>
											<a href="index.php">网站首页</a>
										</li>
										<li ';
			if($page == "activity")
				echo 'class="selected"';
			echo '>
											<a href="activity.php">公益活动</a>
										</li>
										<li ';
			if($page == "demand")
				echo 'class="selected"';
			echo '>
											<a href="demand.php">需求大厅</a>
										</li>
										<li ';
			if($page == "teacher")
				echo 'class="selected"';
			echo '>
											<a href="teacher.php">海角教师</a>
										</li>
										<li ';
			if($page == "resource")
				echo 'class="selected"';
			echo '>
											<a href="resource.php">资源文库</a>
										</li>
										<li ';
			if($page == "dream")
				echo 'class="selected"';
			echo '>
											<a href="dream.php">筑梦圆梦</a>
										</li>
										<li>
											<a href="http://202.120.1.47/">视频房间</a>
										</li>
										<li>
										</li>
										<li ';
			if($page == "contact")
				echo 'class="selected"';
			echo '>
											<a href="contact.php">联系海角</a>
										</li>
									</ul>
								</div>
								<div id="welcome">
									<div style="float:left;margin-top:8px;margin-right:8px;">
										<span style="margin-top: 2px;font-family: '."'黑体'".';font-size: 15;">
											登入|注册
										</span>
									</div>';
									@session_start();
									if(isset($_SESSION['valid_user'])) {
										/*echo '<a href="personal_center.php" id="login_username" 
											style="margin-top: 2px;font-family: '."'黑体'".';font-size: 15;">'.$_SESSION['valid_user'].'</a>';*/
										echo 
											'<div class="dropdown" style="float:left;">
											  <button id="login_username"  class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">'.
												$_SESSION['valid_user']
												.'<span class="caret"></span>
											  </button>
											  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
												<li role="presentation"><a role="menuitem" tabindex="-1" href="personal_center.php" >个人中心</a></li>
												<li role="presentation"><a role="menuitem" tabindex="-1" href="http://202.120.1.47/">视频房间</a></li>
												<li role="presentation"><a role="menuitem" tabindex="-1" href="logout.php">登出</a></li>
												
											  </ul>
											</div>';
									} else {
										echo '<div onclick="check()" style="float:left;cursor:hand;margin-top:-4px;"><img style="height:38px;"  src="images/user_login.png" /></div>';
									}
									
				echo '				
									</div>
							
								</div>
							
						</div>
						';
		echo '<div id="page">';
	}
	


	function do_header_old($title, $page) {
		
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
					
				
				
					function check(){	
						 document.getElementById("loginform").style.top="65px";
						 document.getElementById("loginform").style.right="240px";
						 document.getElementById("loginform").style.display="block";
						//设置弹出框距离顶部和左部的距离，也可以固定为 xxx px，并让它显示出来


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
					<div id="page">
						<div id="header">
							<div id="logo">
								<a href="index.php"><img src="images/logo.png" alt="LOGO" height="73" width="158"></a>
							</div>
							<div id="welcome">
								<div style="float:left;margin-top:8px;margin-right:8px;">
									<span style="margin-top: 2px;font-family: '."'黑体'".';font-size: 15;">
										您好！欢迎加入海角公益
									</span>
								</div>';
							@session_start();
							if(isset($_SESSION['valid_user'])) {
								/*echo '<a href="personal_center.php" id="login_username" 
									style="margin-top: 2px;font-family: '."'黑体'".';font-size: 15;">'.$_SESSION['valid_user'].'</a>';*/
								echo 
									'<div class="dropdown" style="float:left;">
									  <button id="login_username"  class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">'.
										$_SESSION['valid_user']
										.'<span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
										<li role="presentation"><a role="menuitem" tabindex="-1" href="personal_center.php" >个人中心</a></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" href="http://202.120.1.47/">视频房间</a></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" href="logout.php">登出</a></li>
										
									  </ul>
									</div>';
							} else {
								echo '<div onclick="check()" style="float:left;cursor:hand;margin-top:-4px;"><img style="height:38px;"  src="images/user_login.png" /></div>';
							}
							
		echo '				
							</div>
							<div id="navigation">
								<ul>
									<li ';
		if($page == "index")
			echo 'class="selected"';
		echo '	>
										<a href="index.php">网站首页</a>
									</li>
									<li ';
		if($page == "activity")
			echo 'class="selected"';
		echo '>
										<a href="activity.php">公益活动</a>
									</li>
									<li ';
		if($page == "demand")
			echo 'class="selected"';
		echo '>
										<a href="demand.php">需求大厅</a>
									</li>
									<li ';
		if($page == "teacher")
			echo 'class="selected"';
		echo '>
										<a href="teacher.php">海角教师</a>
									</li>
									<li ';
		if($page == "resource")
			echo 'class="selected"';
		echo '>
										<a href="resource.php">资源文库</a>
									</li>
									<li ';
		if($page == "dream")
			echo 'class="selected"';
		echo '>
										<a href="dream.php">筑梦圆梦</a>
									</li>
									<li>
										<a href="http://202.120.1.47/">视频房间</a>
									</li>
									<li>
									</li>
									<li ';
		if($page == "contact")
			echo 'class="selected"';
		echo '>
										<a href="contact.php">联系海角</a>
									</li>
								</ul>
							</div>
						</div>
						';
	}
	

	function do_header2($title, $name) {
		
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
					function check(){	
						 document.getElementById("loginform").style.top="65px";
						 document.getElementById("loginform").style.right="240px";
						 document.getElementById("loginform").style.display="block";
						//设置弹出框距离顶部和左部的距离，也可以固定为 xxx px，并让它显示出来


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
									<span class="loginform_name_style">邀请码</span>
								</div>
								<div class="loginform_input_item">
									<input id="verify_code2" value="345678" style="display:none;border-radius: 50px; -moz-border-radius: 50px; -webkit-border-radius: 50px;" type="text" name="verify_code" />
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
					<div id="page">
						<div id="header">
							<div id="logo">
								<a href="index.php"><img src="images/logo.png" alt="LOGO" height="73" width="158"></a>
							</div>
							<div id="welcome">
								<div style="float:left;margin-top:8px;margin-right:8px;">
									<span style="margin-top: 2px;font-family: '."'黑体'".';font-size: 15;">
										您好！欢迎加入海角公益
									</span>
								</div>';
							if($name != "") {
								/*echo '<a href="personal_center.php" id="login_username" 
									style="margin-top: 2px;font-family: '."'黑体'".';font-size: 15;">'.$_SESSION['valid_user'].'</a>';*/
								echo 
									'<div class="dropdown" style="float:left;">
									  <button id="login_username"  class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">'.
										$_SESSION['valid_user']
										.'<span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
										<li role="presentation"><a role="menuitem" tabindex="-1" href="personal_center.php" >个人中心</a></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" href="http://202.120.1.47/">视频房间</a></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" href="logout.php">登出</a></li>
										
									  </ul>
									</div>';
							} else {
								echo '<div onclick="check()" style="float:left;cursor:hand;margin-top:-4px;"><img style="height:38px;"  src="images/user_login.png" /></div>';
							}
							
		echo '				
							</div>
							<div id="navigation">
								<ul>
									<li class="selected" >
										<a href="index.php">网站首页</a>
									</li>
									<li >
										<a href="activity.php">公益活动</a>
									</li>
									<li >
										<a href="demand.php">需求大厅</a>
									</li>
									<li >
										<a href="teacher.php">海角教师</a>
									</li>
									<li >
										<a href="resource.php">资源文库</a>
									</li>
									<li >
										<a href="dream.php">筑梦圆梦</a>
									</li>
									<li>
										<a href="http://202.120.1.47/">视频房间</a>
									</li>
									
									<li>
									</li>
									<li >
										<a href="contact.php">联系海角</a>
									</li>
								</ul>
							</div>
						</div>
						';
	}

?>