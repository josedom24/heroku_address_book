<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="ba040fa259992b";$this->pass="d8041206";$this->host="us-cdbr-iron-east-03.cleardb.net";$this->ddbb="heroku_ac8099df1484455";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
