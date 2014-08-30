<?php
	require_once('db.inc.php');

	class User extends DBSQL {
		private $sql_v = "23";
	
		public function __construct() {
			parent::__construct();
		}
		

		public function get_sql() {
			return $this->sql_v;
		}
	
		public function verify_user($name, $password) {
			if(!$name || !$password) {
				return "";
			} else {
				$name = addslashes($name);
				$password = sha1($password);
			}
			$sql = "select type from user where name='".$name."' and passwd='".$password."'";
			$this->sql_v = $sql;
			$data = $this->select($sql);
			if(count($data)== 0) {
				return "";
			} else {
				return $data[0]['type'];
			}
		}
		
		public function insert_user($name, $password, $type, $sex, $school) {
			if(!$name || !$password || !$type) {
				return false;
			} else {
				$name = addslashes($name);
				$password = sha1($password);
				$type = addslashes($type);
			}
			
			$sql = "select count(*) from user where name='".$name."'";
			$data = $this->select($sql);
			if($data[0]['count(*)'] > 0)
				return false;
			$sql = "insert into user (name,passwd,type,register_time, sex, school) values('".$name."',
				'".$password."','".$type."','".date("y-m-d",time())."','".$sex."','".$school."')";
			$this->sql_v = $sql;
			return $this->insert($sql);	
		//	return true;
		}
		
		public function set_hasPIC($id, $value) {
			$sql = "update user set has_pic=".$value." where id_user=".$id;
			$this->update($sql);
		}
		
		public function get_teacher() {
		}
		
		public function get_personal_info($name) {
			if(!$name) {
				return "";
			} else {
				$name = addslashes($name);
			}
			$sql = "select * from user where name='".$name."'";
			$this->sql_v = $sql;
			$data = $this->select($sql);
			return $data;
		}
		
		public function get_personal_info_from_id($id) {
			if(!$id) {
				return "";
			} else {
				$id = addslashes($id);
			}
			$sql = "select * from user where id_user=".$id."";
			$this->sql_v = $sql;
			$data = $this->select($sql);
			return $data;
		}
		
		
		
		
	}
	
/*	$user = new User();
	
//	$result = $user->insert_user("dasdddhu", "123", "teacher");
//	if($result)
//		echo "<p>result:".$result."</p>";
	$result = $user->select("select * from user");
	
	foreach($result as $key => $value) {
		echo "<p>".$key.":".$value['name'].":".$value['passwd'].$value['register_time'].$value['type']."</p>";
	}
*/	
	
?>