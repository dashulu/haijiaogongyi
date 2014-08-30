<?php
	require_once("user.php");
	require_once("db_resource.php");
	require_once("config.php");
	
	@session_start();
	if(!isset($_SESSION['valid_user'])) {
		echo "请先登入";
		exit;
	}

	if (($_FILES["file"]["size"] < 2048000)) { //1M
		if ($_FILES["file"]["error"] > 0) {
			echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
		} else {

			$name = iconv("UTF-8","gb2312", $_FILES["file"]["name"]);
			$user = new User();
			$id = $user->get_personal_info($_SESSION['valid_user']);
			$id = $id[0]['id_user'];
			$user->set_hasPic($id, 1);

			$type = explode(".", $name);
			$type = $type[1];
			$dir = FAVICON_DIR;
			$name = $dir."\\".$_SESSION['valid_user'];
//			move_uploaded_file($_FILES["file"]["tmp_name"], $name.".".$type);
			resizeimage($_FILES["file"]["tmp_name"], 120, 120, $name.".png");
			unlink($_FILES["file"]["tmp_name"]);
			header("Location: personal_center.php");
			
		}
	} else {
		echo iconv("UTF-8","gb2312", "文件过大，上传文件应小于200k");
	}
	
	function resizeimage($srcfile,$dstw, $dsth, $filename = "" ){ 

		$size=getimagesize($srcfile); 
		switch($size[2]){ 
			case 1: 
				$img=imagecreatefromgif($srcfile); 
				break; 
			case 2: 
				$img=imagecreatefromjpeg($srcfile); 
				break; 
			case 3: 
				$img=imagecreatefrompng($srcfile); 
				break; 
			default: 
				exit; 
		} 

		//源图片的宽度和高度 
$srcw=imagesx($img); 
$srch=imagesy($img); 


 
//echo "$dstw,$dsth,$srcw,$srch "; 
//新建一个真彩色图像 
$im=imagecreatetruecolor($dstw,$dsth); 
$black=imagecolorallocate($im,255,255,255); 
imagefilledrectangle($im,0,0,$dstw,$dsth,$black); 
imagecopyresized($im,$img,0,0,0,0,$dstw,$dsth,$srcw,$srch); 
		
/*		$im=imagecreatetruecolor($dstw,$dsth); 
		$black=imagecolorallocate($im,255,255,255); 
		imagefilledrectangle($im,0,0,$dstw,$dsth,$black); 
		imagecopyresized($im,$img,0,0,0,0,$dstw,$dsth,$srcw,$srch); 
	*/	// 以 JPEG 格式将图像输出到浏览器或文件 
		if( $filename ) { 
		//图片保存输出 
/*			echo $im;
			echo "<p>hello</p>";
			echo $filename;
*/			imagejpeg($im, $filename ); 
		}else { 
		//图片输出到浏览器 
			imagejpeg($im); 
		} 
		//释放图片 
		imagedestroy($im); 
		imagedestroy($img); 
	} 
?>