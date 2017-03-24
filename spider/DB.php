<?php
header("Content-type:text/html;charset=utf-8");

class DB
{	
	private $pdo;

	public function __construct()
	{
		$config = require_once'config.php';//保存管理员的数据库username 和 password
     	$this->pdo = new PDO($config['dsn'], $config['user'], $config['password']);
     	$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//设置驱动和异常处理的办法
	}
	 
	 public function save($info){
	 	var_dump($info);
	 	 try {

                $sql ="insert into student_info set student_id=:student_id,student_name=:student_name,
                				   student_sex=:student_sex,student_class=:student_class,student_major_id=:student_major_id,
                				   student_major_name=:student_major_name,student_college=:student_college,student_grade=:student_grade,
                				   student_status=:student_status";
                $res = $this->pdo->prepare($sql);
              	$res->bindParam(':student_id',$info['sid']);
              	$res->bindParam(':student_name',$info['sname']);
              	$res->bindParam(':student_sex',$info['sex']);
              	$res->bindParam(':student_class',$info['class']);
              	$res->bindParam(':student_major_id',$info['majorid']);
              	$res->bindParam(':student_major_name',$info['majorname']);
              	$res->bindParam(':student_college',$info['college']);
              	$res->bindParam(':student_grade',$info['grade']);
              	$res->bindParam(':student_status',$info['status']);

              	$res->execute();

              	//$pdo = null;
              	
            } catch (PDOException $e) {
            	//print_r($info);
            	echo $e->getMessage()."<br>";
               //echo "数据库出错";
        	}
	 }
}
?>