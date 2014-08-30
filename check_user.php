<?php
	function check_user() {
		@session_start();
		if(isset($_SESSION['valid_user'])) {
			return true;
		} else {
			header("Location: index.php");
			exit;
		}
	}
?>