<?php
	require_once('db.inc.php');

	class Message extends DBSQL {
		private $sql_v = "23";
	
		public function __construct() {
			parent::__construct();
		}
		

		public function get_sql() {
			return $this->sql_v;
		}
	
		
		public function insert_message($content, $user_id_from, $user_id_to) {
			if(!$content || !$user_id_from || !$user_id_to) {
				return "";
			} else {
				$content = addslashes($content);
				$user_id_from = addslashes($user_id_from);
				$user_id_to = addslashes($user_id_to);
			}
			
			$sql = "insert into message (content,user_id_from,user_id_to, time) values('".$content."',
				".$user_id_from.",".$user_id_to.",'".date("y-m-d h:i:s",time())."')";
			$this->sql_v = $sql;
			$this->insert($sql);
			return true;
		}
		
		public function get_message($id) {
			$sql = "select * from message where user_id_from = ".$id." or user_id_to = ".$id." order by id_message desc";
			$data = $this->select($sql);
			return $data;
		}
	}
?>