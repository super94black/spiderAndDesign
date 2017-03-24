<?php
require_once('DataBase.php');
require_once('Mysql.php');
require_once('Oracle.php');
class DataBaseFactory
{
	public static function getConnection($connection){
		switch($connection){
			case 'mysql' :
				  return new MySQL();
				  break;
			case 'oracle' :
				  return new Oracle();
				  break;
			default : 
				  echo "你的数据库输入错误";
				  break;
		}
	}
}
?>