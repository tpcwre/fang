<?php
	$safe = $_POST['safe'];
	$safe=md5($safe);
	$name=$_COOKIE['user'];
	$name=trim($name);
	require 'mysqltools.php';
	$mysql = new Mysql();
	$sql="select * from user where name='".$name."'";
	$arr=$mysql->dql_assoc($sql);
	if($arr[0]['safe']){
		echo 0;
	}else{
		$sql2="update user set safe='".$safe."' where name='".$name."'";
		$res=$mysql->dml($sql2);
		if($res){
			echo 1;
		}else{
			echo 2;
		}
	}
	
	
	
?>