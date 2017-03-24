<?php
	//这个爬虫扒了2015级计算机04121501到17班的所有人的信息 
	//student_info.sql是对应的信息
	require_once("spider.php");
	header("Content-type:text/html;charset=utf-8");
	$url = "http://jwzx.cqupt.edu.cn/jwzxtmp/showBjStu.php?bj=";

	$spider = new Spider();
	
	for($i = 1; $i < 18; $i++){
	$ch= curl_init();
	$number = "4121500" + $i;
	$class =  "0".$number;
		
	
	curl_setopt($ch, CURLOPT_URL, $url.$class);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	
	$result = curl_exec($ch);
	//echo $result;
	
	curl_close($ch);
	
	$spider->fliter($result);
}

?>