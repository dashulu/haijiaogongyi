 <?php
	require_once('db.inc.php');

	class Dream extends DBSQL {
		private $sql_v = "23";
	
		public function __construct() {
			parent::__construct();
		}
		

		public function get_sql() {
			return $this->sql_v;
		}
	
		
		public function insert_dream($description, $name, $addr, $story, $phone, $id) {
			if(!$description || !$addr || !$name || !$story || !$phone || !$id) {
				return "";
			} else {
				$description = addslashes($description);
				$name = addslashes($name);
				$addr = addslashes($addr);
				$story = addslashes($story);
				$phone = addslashes($phone);
				$id = addslashes($id);
			}
			
			$sql = "insert into dream (description,name,addr, story, phone, time, user_id_user) values(
				'".$description."','".$name."','".$addr."','".$story."','".$phone."','".date("y-m-d",time())."',".$id.")";
			$this->sql_v = $sql;
			$this->insert($sql);
			$sql = "select * from dream order by id_dream desc";
			$data = $this->select($sql);
			return $data;
		}
		
		public function get_dream() {
			$sql = "select * from dream order by id_dream desc";
			$data = $this->select($sql);
			return $data;
		}
		
		public function add_dream_helper($name, $addr, $phone, $id) {
			$sql = "update dream set dream_helper_name='".$name."',state=0,dream_helper_addr='".
					$addr."',dream_helper_phone='".$phone."',dream_helper_time='".date("y-m-d", time())."' where id_dream=".$id;
			$this->update($sql);
			return true;
		}
		

		
		
	}
?>