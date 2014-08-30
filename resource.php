 <?php
	require("header.php");
	do_header("海角课堂", "resource");
	
?>
    <link href="css/rating_simple.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="js/rating_simple.js"></script>
	<script language="javascript" src="js/selected_region.js"></script>		
	<script language="javascript">
		var demand_user_id = -1;
	
		function check_user_login() {
			if($("#login_username").length == 0) {
					alert("请先登入");
					
					return;
			}
			$("#update_file_modal").click();
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
			$type = $element[1].innerHTML;
			$file_type = $element[0].innerHTML;
			$page_num = $("#page_num")[0].innerHTML;
			
			$.ajax({ 
				type: "POST", 
				url: "select_resource.php", 
				data: {  type: $type,
						file_type: $file_type,
						page_num: $page_num
			   },
				success: function(result) { 
					$('#teacher_result_region').html(result); 
					$('#close_post_demand').click();
				}
				
			}); 
		}
		
	
		
		function down(my){	
			$file = my.parentElement.parentElement.children[2].children[0].innerHTML;
			$user_id = my.parentElement.parentElement.children[1].innerHTML;
			$resource_id = my.parentElement.parentElement.children[0].innerHTML;
			window.open("download.php?file="+$file+"&user_id="+$user_id+"&resource_id="+$resource_id);
	/*		$.ajax({ 
				type: "POST", 
				url: "download.php",//file="+$file+"&user_id="+$user_id+"&resource_id="+$resource_id, 
				async:false,
				success: function() { 
				//	$('#teacher_result_region').html(result); 
					window.open("download.php?file="+$file+"&user_id="+$user_id+"&resource_id="+$resource_id);
				}
				
			}); */
	}
	
		
	</script>


	

	<button class="btn btn-primary hide" data-toggle="modal" data-target="#file_modal" id="update_file_modal">
		上传文件
	</button>
	<div class="modal fade hide" id="file_modal"  role="dialog" >
		  <div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" id="close_update_file" ><span aria-hidden="true">&times;</span><span class="sr-only">关闭</span></button>
					<h4 class="modal-title" id="myModalLabel">上传文件</h4>
				</div>
	
				<div class="modal-body">
					<form action="upload_file.php" method="post" enctype="multipart/form-data" >
						<p><span>选择文件：</span><input  type="file" name="file" id="choose_file_button" /> </p>
						<p><span>文件类别：</span><select id="file_type" name="file_type">
								<option value="语文" selected="selected">语文</option>
								<option value="数学">数学</option>
								<option value="英语">英语</option>
								<option value="生物">生物</option>
								<option value="化学">化学</option>
								<option value="物理">物理</option>
								<option value="其他" >其他</option>
						</select>
						</p>
						<input class="btn" type="submit" name="submit" value="上传" id="update_file_button"/>
					</form>
				</div>
			</div>
		  </div>
		</div>
	
	<div id="contents">
		<div id="teacher_select_region" style="border:1px solid #ccc">
			<p><span>资源类别:</span><a>不限</a><a>语文</a><a>数学</a><a>英语</a><a>物理</a><a>化学</a><a>生物</a><a>其他</a></P>
			<p><span>文件类型:</span><a>不限</a><a>ppt</a><a>doc</a>
				<a>txt</a><a>pdf</a>
			</P>
		</div>
		
		<div id="sort_region" style="margin-top:10px;margin-bottom:0px;height:40px;">
		<!--	<button class="btn btn-primary ">
				下载最多
			</button>
			<button class="btn btn-primary " >
				时间排序
			</button>-->
			<button class="btn btn-primary" style="float:right;margin-bottom:0px;margin-right:40px;" onclick = "check_user_login()">
				我要上传
			</button>
			
		</div>
		
		<div>
			<ul class="nav nav-tabs " role="tablist" id="file_list_tile">
				<li style="width:320px;margin-left:40px;">文件名</li>
				<li style="width:60px;margin-left:10px;">大小</li>
				<li style="width:60px;margin-left:20px;">类别</li>
				<li style="width:80px;margin-left:-10px;">下载次数</li>
				<li style="width:80px;margin-left:30px;">上传日期</li>
			</ul>
			
		</div>
		
		<div id="teacher_result_region" style="border:1px solid #ccc;">
<?php
	require_once("user.php");
	require_once("db_resource.php");
	require_once("config_show.php");
	$d = new Resources();
	
	$count = 0;
	$page_num = 1;
	$count = $d->select("select count(*) from resource");
	$count = $count[0]['count(*)'];
	$data = $d->select("select * from resource order by id_resource desc limit 0,".RESOURCE_PAGE_NUM);
	
	
	
	foreach ($data as $item) {
		echo '
			
			<ul class="nav nav-tabs " style="margin-top:6px;margin-bottom:0px;height:30px;" role="tablist">
			<span style="display:none">'.$item['id_resource'].'</span>
			<span style="display:none">'.$item['user_id_user'].'</span>
			<li style="width:350px;margin-left:20px;"><span style="width:250px">'.$item['name'].'</span></li>
			<li style="width:80px"><span>'.round($item['size']/(1024.0), 1).'k</span></li>
			<li style="width:80px"><span>';
			if($item['file_type'] == "buxian")
				echo "不限";
			else 
				echo $item['file_type'];
			echo '</span></li>
			<li style="width:80px"><span>'.$item['count'].'</span></li>
			<li style="width:120px"><span>'.substr($item['time'], 0 , 10).'</span></li>
			<li style="width:120px"><button type="button" class="btn btn-default" onclick="down(this)" style="font-family:'."'黑体'".';margin-top:-3px;">下载</button></li>
			</ul>
			
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
	for(;$i <= ($count - 1 + RESOURCE_PAGE_NUM)/RESOURCE_PAGE_NUM && $i < 10;$i++) {
		if($page_num == $i)
			echo '<button type="button" class="btn btn-default"  onclick="select_page(this)" disabled="disabled"><b>'.$i.'</b></button>';
		else 
			echo '<button type="button" class="btn btn-default"  onclick="select_page(this)">'.$i.'</button>';
	}
	if( $count/RESOURCE_PAGE_NUM > $page_num ) {
		echo '<button type="button" class="btn btn-default"  onclick="select_page(this)">下一页</button>';
	}
	echo'
			</div>
		</div>
		';
	
	echo '</div>';
	
?>
		</div>
	</div>
<?php
	require("footer.php");
	do_footer();
?>