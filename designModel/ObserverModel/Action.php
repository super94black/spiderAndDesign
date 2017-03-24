<?php
//闹钟的实现类
require_once('Observe.php');
require_once('Alarm.php');
class Action implements Alarm
{
	public $observe = array();
	public function getObserve(Observe $observe){
		$this->observe[] = $observe;

	}

	public function notify(){
		foreach ($this->observe as $observes) {
			 $observes->watch();
		}
		echo "所有人都收到了通知<br>";
	}
}
?>