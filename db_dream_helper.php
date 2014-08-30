  <?php
	require_once('db.inc.php');

	class Dream_helper extends DBSQL {
		private $sql_v = "23";
	
		public function __construct() {
			parent::__construct();
		}
		

		public function get_sql() {
			return $this->sql_v;
		}
	
		
		public function insert_dream_helper($name, $addr, $phone) {
			if(!$addr || !$name || !$phone) {
				return "";
			} else {
				$name = addslashes($name);
				$addr = addslashes($addr);
				$phone = addslashes($phone);
			}
			
			$sql = "insert into dream_helper (name,addr, phone, time) values(
				'".$name."','".$addr."','".$phone."','".date("y-m-d",time())."')";
			$this->sql_v = $sql;
			$this->insert($sql);
			$id = $this->insert_id();
			return $id;
		}
		
		public function get_dream_helper() {
			$sql = "select * from dream_helper order by id_dream_helper desc";
			$data = $this->select($sql);
			return $data;
		}
	}
?>