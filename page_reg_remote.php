<?php
	require 'mysqltools.php';
	$mysql=new mysql();
	
	$ruser=$_GET['ruser'];
	$sql="select id from user where name='".$ruser."'";
	$arr=$mysql->dql($sql);
	if($arr){
		echo 'false';
	}else{
		echo 'true';
	}
	


?>