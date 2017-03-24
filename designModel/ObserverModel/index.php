<?php
	require_once('Teacher.php');
	require_once('Stu.php');
	require_once('Action.php');
	$action = new Action();
	
	$action->getObserve(new Teacher());
	$action->getObserve(new Stu());
	$action->notify();
?>