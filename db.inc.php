<?php
	require_once("config.php");
	class DBSQL {
		private $DB="";
		
		public function __construct() {			
			@ $this->DB = new mysqli(SERVER_NAME, DB_USER, DB_PASSWORD, DB_NAME);
			if(mysqli_connect_errno()) {
				$msg = "connect error";
				include(ERR_FILE);
				exit;
			}
			
		}
		
		public function insert_id() {
			return $this->DB->insert_id;
		}
		
		public function get() {
			return $this->msg;
		}
		
		public function select($sql="") {
			if(empty($sql)) return false;
			$result = $this->DB->query($sql);
	//		return array("hello");
			if($result == "")
				return array();
			$count = $result->num_rows;
			$data = array();
			
			for ($i = 0;$i < $count;$i++){
				$data[$i] = $result->fetch_assoc();
			}		
			$result->free();
			
			return $data;
		}
		
		public function insert($sql="") {
			if(empty($sql)) return false;
			
			$result = $this->DB->query($sql);
			return $result;
		}
		
		public function update($sql="") {
			if(empty($sql)) return false;
			
			$result = $this->DB->query($sql);
			return $result;
		}
		
		
	}
	
/*	$db = new DBSQL();

//	$resultf = $db->insert("insert into news (title, content) values('good', 'hello world')");
	
	
	$resultf = $db->insert("update news set title='monroe' where id_news=4");// values('good', 'hello world')");
	$resultf = $db->insert("delete from news  where title='good'");// values('good', 'hello world')");
	echo "<p>result:".$resultf."hehe</p>";

	echo "<p>successful</p>";
	
	$result = $db->select("select * from news");
	
	foreach($result as $key => $value) {
		echo "<p>".$key.":".$value['title'].":".$value['content']."</p>";
	}
*/		
?>