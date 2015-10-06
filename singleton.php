<?php 
/* 
Sigleton Pattern 
*/
class Singleton
{
	private static $instance = null;
	private $contador;
	
	private function __construct(){
		echo __CLASS__." has been created.<br />";
		$this->contador = 0;
	}
	
	public static function getInstance()
	{
		if (self::$instance == null)
		{
			self::$instance = new Singleton();
		}
		return self::$instance;
	}
	
	// prevent construction and cloning because of Singleton Pattern
	public function __clone(){ 
		trigger_error("You cannot clone an instance of ". get_class($this) ." class.", E_USER_ERROR );
	}
	
	public function add(){
		return ++$this->contador;
	}
	
	public function sub(){
		return --$this->contador;
	}
	
}
### Testing Singleton

$obj1 = Singleton::getInstance();
echo "obj1 (add): ".$obj1->add(). "<br />";
echo "obj1 (add): ".$obj1->add(). "<br />";
echo "obj1 (add): ".$obj1->add(). "<br />";
$obj2 = Singleton::getInstance();
echo "obj2 (sub): ".$obj2->sub(). "<br />";
echo "obj2 (add): ".$obj2->add(). "<br />";
$obj3 = clone($obj1);
echo "obj3 (sub): ".$obj3->sub(). "<br />";
echo "obj3 (add): ".$obj3->add(). "<br />";


?>