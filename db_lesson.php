<?php
	require_once('db.inc.php');

	class Lesson extends DBSQL {
		private $sql_v = "23";
	
		public function __construct() {
			parent::__construct();
		}
		

		public function get_sql() {
			return $this->sql_v;
		}
	
		
		public function insert_lesson($user_id, $name, $grade) {
			if(!$user_id || !$grade || !$name) {
				return "";
			} else {
				$user_id = addslashes($user_id);
				$name = addslashes($name);
				$grade = addslashes($grade);
			}
			
			$sql = "insert into lesson (user_id_user,name,grade) values(".$user_id.",
				'".$name."','".$grade."')";
			$this->sql_v = $sql;
			$this->insert($sql);
			$sql = "select * from lesson where user_id_user = ".$user_id." and is_del = 0 order by id_lesson desc";
			$data = $this->select($sql);
			return $data;
		
		}
		
		public function get_lesson($id) {
			$sql = "select * from lesson where is_del = 0 and user_id_user = ".$id;
			$data = $this->select($sql);
			$this->sql_v = $sql;
			return $data;
		}
	}
?>