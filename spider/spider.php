<?php
require_once("DB.php");
header("Content-type:text/html;charset=utf-8");
class Spider
{
	
	public $info = array();
	public $length = 0;
	public $db;
	public function __construct(){
		$this->db = new DB();
	}
	public function fliter($result){
		$pattern = "/<td[^>]*>([^<>]*)<\/td>/";
		preg_match_all($pattern,$result,$matches_result);
		$this->length = count($matches_result[1]);
		$number = ($this->length / 10) -1;//学生数量
		echo $number;
		//print_r($matches_result);
		//var_dump($matches_result);
		for($i = 1; $i <= $number; $i++){
			$m = $i * 10;
			//$info['number'][$i] = $matches_result[1][$m];
			$info['sid'] = $matches_result[1][$m + 1];
			$info['sname'] = $matches_result[1][$m + 2];
			$info['sex'] = $matches_result[1][$m + 3];
			$info['class'] = $matches_result[1][$m + 4];
			$info['majorid'] = $matches_result[1][$m + 5];
			$info['majorname'] = $matches_result[1][$m + 6];
			$info['college'] = $matches_result[1][$m + 7];
			$info['grade'] = $matches_result[1][$m + 8];
			$info['status'] = $matches_result[1][$m + 9];
			
			$this->db->save($info);
			//var_dump($info);
		}
		
	}
}	
?>