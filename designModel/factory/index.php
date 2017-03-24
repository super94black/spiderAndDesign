<?php

	require_once('DataBaseFactory.php');
	require_once('Mysql.php');
	require_once('Oracle.php');
	$dbName = 'mysql';
	$db = DataBaseFactory::getConnection($dbName);
	$db->getDataBase();
?>