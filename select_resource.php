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