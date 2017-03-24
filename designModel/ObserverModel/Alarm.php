<?php
//定义主题是闹钟通知 到时间会自动通知其他的人
require_once('Observe.php');
interface Alarm
{
	public function getObserve(Observe $observe);
	public function notify();
}
?>