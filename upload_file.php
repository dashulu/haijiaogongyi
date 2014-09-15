<?php
	require_once("user.php");
	require_once("db_resource.php");
	require_once("config.php");
	
	@session_start();
	if(!isset($_SESSION['valid_user'])) {
		echo "请先登入";
		exit;
	}
	
	$file_type = $_POST['file_type'];// iconv("UTF-8","gb2312", $_POST['file_type']);


	if (($_FILES["file"]["size"] < 1048576 && $_FILES["file"]["size"] > 0)) { //1M
		if ($_FILES["file"]["error"] > 0) {
			echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
		} else {
			$name = iconv("UTF-8","gb2312", $_FILES["file"]["name"]);
			if (file_exists(UPLOAD_DIR."\\".$_SESSION['valid_user']."_haijiaoketang_".$name)) {
				echo $name. iconv("UTF-8","gb2312", "已存在，请重新命名文件 ");
			} else {
				$user = new User();
				$res = new Resources();
				$id = $user->get_personal_info($_SESSION['valid_user']);
				$id = $id[0]['id_user'];
				$type = explode(".", $name);
				$type = $type[1];
				$data = $res->insert_resource($_FILES["file"]["name"], $type, $file_type, $id, $_FILES["file"]["size"]);
				
				move_uploaded_file($_FILES["file"]["tmp_name"],
				UPLOAD_DIR."\\".$id."_haijiaoketang_".$name);
				header("Location: resource.php");
				exit;
			}
		}
	} else {
		echo iconv("UTF-8","gb2312", "文件过大，上传文件应小于1M");
	}
?>