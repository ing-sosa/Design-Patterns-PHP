<?php 
/* 
Sigleton Pattern 

One instance of class
values should remain intact

Database use
*/

class Database {
	private function __construct(){
		echo "Connection created";
		}
	private function __clone(){ }
	
	public static function Connect(){
		if (!isset(self::$connection)){
			self:$connection = new Database;
			}
		return self:$connection;
	}
}

$db1 = Database::Connect();
$db2 = Database::Connect();


?>