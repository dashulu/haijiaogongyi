<?php
//$filedir = "upload";
function showDir( $filedir ) {
//打开目录
$dir = @ dir($filedir);
//列出目录中的文件
while (($file = $dir->read())!==false)
//while(($file = readdir($dir)) !== false)
  {
     if(is_dir($filedir."/".$file) AND ($file!=".") AND ($file!="..")) {
	     echo "dirname: ".$file."<br />";
	       //showDir($filedir."/".$file);
	  } else {
          echo "filename: " .$filedir."/".$file . "<br />";
      }
 }
$dir->close();

}
showDir(".");
?> 