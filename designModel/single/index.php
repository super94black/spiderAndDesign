<?php
//单例模式
class Man
{
	private static $instance;
	public function __construct(){
		echo "我被实例化了";
	}

	public static function getInstance(){
		if(self::$instance == null){
			self::$instance = new self();
		}
		return self::$instance;
	}
	//阻止用户复制对象实例
	private function __clone(){
		trigger_error("复制是不被允许的",E_USER_ERROR);
	}

	public function test(){
		echo "test";
	}

}

$test = Man::getInstance();
//$test = Man::getInstance();
$test->test();

?>