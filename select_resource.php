 <?php
	require_once("db_resource.php");
	require_once("user.php");
	require_once("config_show.php");

	$type = $_POST['type'];
	$file_type = $_POST['file_type'];
	$page_num = $_POST['page_num'];
	
	$sql = "";
	if($type != "不限") {
		$sql = $sql."type like '%".$type."%' ";
	} 
	if($file_type != "不限") {
		if($sql != "") {
			$sql = $sql."and file_type like '%".$file_type."%' ";
		} else {
			$sql = $sql."file_type like '%".$file_type."%' ";
		}
	}
	
	$d = new Resources();
	
	$count = 0;
	$begin = ($page_num - 1)*RESOURCE_PAGE_NUM;

			
	if($sql != "") {
		$count = $d->select("select count(*) from resource where ".$sql." and is_del = 0");
		$count = $count[0]['count(*)'];
		$sql = "select * from resource where ".$sql." and is_del = 0 order by id_resource desc limit ".$begin.",".RESOURCE_PAGE_NUM;
	} else {
		$count = $d->select("select count(*) from resource where is_del = 0  ");
		$count = $count[0]['count(*)'];
		$sql = "select * from resource where is_del = 0 order by id_resource desc limit ".$begin.",".RESOURCE_PAGE_NUM;
	}
	$data = $d->select($sql);
	
	
	foreach ($data as $item) {
		echo '
			<div id="teacher_intro" style="height:150px;">
				<div id="downlaod_intro_left" style="height:150px;">
			
				';
				
				echo '<img src="images/resource.png" alt="img" id="teacher_favicon" class="t_favicon" style="width:70px;height:100px;">'; 
				
		echo '
				<div style="margin-top:35px;">
				<p ><span class="user_name"><b>'.$item['name'].'</b></span> 
					</p>
					<p></p>
					<p></p>
					<p></p>
					<p>文件大小：'.round($item['size']/(1024.0), 1).'k</p>
					<p>上传时间：'.$item['time'].'&nbsp&nbsp&nbsp&nbsp</p>
					';
		echo 
			'
					
				</div>
				</div>
				<div id="Layer1" style="float:left;margin-top:25px; width:1px; background-color:rgb(199, 205, 209);height:100px;"></div>
					
				<div id="downlaod_intro_right" style="height:150px;">
					<div id="teacher_score" style="text-align:center;margin-top:35px;">
						<span style="display:none">'.$item['id_resource'].'</span>
						<span style="display:none">'.$item['user_id_user'].'</span>
						<span style="display:none">'.$item['name'].'</span>
						<p>已有'.$item['count'].'人下载</p>
					<!--	<li style="width:120px"><button type="button" class="btn btn-default" onclick="down(this)" style="font-family:'."'黑体'".';margin-top:-3px;">下载</button></li>
					-->
						
						<div class="detail" onclick="down(this)" style="margin-left:78px;">
							<p style="padding-right:0px;margin-left:5px;" >我要下载</p>
						</div>
					</div>
				</div>
				<hr style="border-bottom:1px solid rgb(199, 205, 209);"/>
			</div>
		';


	
	
		echo '
			
			
			
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
	for(;$i <= ($count - 1 + RESOURCE_PAGE_NUM)/RESOURCE_PAGE_NUM && $i < 10;$i++) {
		if($page_num == $i)
			echo '<button type="button" class="btn btn-default"  onclick="select_page(this)"  disabled="disabled"><b>'.$i.'</b></button>';
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
	
exit;
?>