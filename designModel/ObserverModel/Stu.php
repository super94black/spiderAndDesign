<?php
require_once('Observe.php');
class Stu implements Observe
{
	public function watch(){
		echo "学生收到了通知<br>";
	}
}
?>