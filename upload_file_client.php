<html>
<head>
<script language="javascript">
	function download(){	
		$.ajax({ 
			type: "POST", 
			url: "download.php", 
			data: {  file: "1_haijiaoketang_修改意见.docx"
		   },
			success: function(result) { 
			//	$('#teacher_result_region').html(result); 
				alert("success");
			}
			
		}); 
	}
</script>
</head>
<body>


<form action="upload_file.php" method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file" /> 
<br />
<input type="submit" name="submit" value="Submit" />
</form>
<a onclick="download()">download</a>
</body>
</html>