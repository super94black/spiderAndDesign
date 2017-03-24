<?php
//观察者实现类
require_once('Observe.php');
class Teacher implements Observe
{
	public function watch(){
		echo "老师收到了通知<br>";
	}
}
?>