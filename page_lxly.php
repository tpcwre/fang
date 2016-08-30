<?php
	require 'mysqltools.php';
	$mysql = new Mysql();
	$lxly = $_POST['lxly'];
	
	if($lxly){
		$sql="insert into ly(content,time) values('".$lxly."',now())";
		$res=$mysql->dml($sql);
		if($res){
			echo 1;
		}else{
			echo 0;
		}
	}



?>


