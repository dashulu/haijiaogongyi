<?php
	require_once('db.inc.php');

	class Resources extends DBSQL {
		private $sql_v = "23";
	
		public function __construct() {
			parent::__construct();
		}
		

		public function get_sql() {
			return $this->sql_v;
		}
	
		
		public function insert_resource($name, $type, $file_type, $user_id_user, $file_size) {
			if(!$name || !$type || !$file_type || !$user_id_user) {
				return "";
			} else {
				$name = addslashes($name);
				$file_type = addslashes($file_type);
				$user_id_user = addslashes($user_id_user);
				$type = addslashes($type);
			}
			
			$sql = "insert into resource (name,type, file_type, user_id_user, time, size) values(
				'".$name."','".$type."','".$file_type."',".$user_id_user.",'".date("y-m-d h:i:s",time())."', ".$file_size.")";
			$this->sql_v = $sql;
			$this->insert($sql);
			$sql = "select * from resource where is_del = 0 order by id_resource desc";
			$data = $this->select($sql);
			return $data;
		}
		
		public function get_resources() {
			$sql = "select * from resource where is_del = 0 order by id_resource desc";
			$data = $this->select($sql);
			return $data;
		}
		
		public function add_download_count($id) {
			$sql = "update resource set count=count+1 where id_resource=".$id;
			$data = $this->update($sql);
			return $data;
		}
		
	}
?>