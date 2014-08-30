<?php
	require_once('db.inc.php');

	class Demand extends DBSQL {
		private $sql_v = "23";
	
		public function __construct() {
			parent::__construct();
		}
		

		public function get_sql() {
			return $this->sql_v;
		}
	
		
		public function insert_demand($desc, $sex, $addr, $name, $subject, $phone, $grade, $user_id) {
			if(!$name || !$desc || !$phone || !$subject || !$user_id) {
				return "";
			} else {
				$name = addslashes($name);
				$desc = addslashes($desc);
				$subject = addslashes($subject);
				$phone = addslashes($phone);
				if($sex) {
					$sex = addslashes($sex);
				} else {
					$sex = "不限";
				}
				if($addr) {
					$addr = addslashes($addr);
				} else {
					$addr = "不限";
				}
				if($grade) {
					$grade = addslashes($grade);
				} else {
					$grade = "不限";
				}
			}
			
			$sql = "insert into demand (description,sex,addr,name, subject, phone, grade, time, user_id_user) values('".$desc."',
				'".$sex."','".$addr."','".$name."','".$subject."','".$phone."','".$grade."','".date("y-m-d",time())."',".$user_id.")";
			$this->sql_v = $sql;
			$this->insert($sql);
			$sql = "select * from demand order by id_demand desc";
			$data = $this->select($sql);
			return $data;
		}
		
	}
?>