<?php
	require_once("db_resource.php");
	require_once("config.php");
	@session_start();
	if(!isset($_SESSION['valid_user'])) {
		echo "login in first";
		exit;
	}
	
	$file = UPLOAD_DIR."\\".$_GET["user_id"]."_haijiaoketang_".$_GET["file"];
	$file = iconv("UTF-8","gb2312", $file);
	if(is_file($file)) {
		header("Content-Type: application/force-download");
		header("Content-Disposition: attachment; filename=".basename($file));
		readfile($file);
		$d = new Resources();
		$d->add_download_count($_GET['resource_id']);
		exit;
	}else{
		echo "file not exist".$file;
		exit;
	}
?>
