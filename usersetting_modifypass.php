<?php
	require 'mysqltools.php';
	$user=$_COOKIE['user'];
	$tuser=trim($user);
	$ypass=$_POST['ypass'];
	$newpass=$_POST['newpass'];
	$newpass=md5($newpass);
	$ypass=md5($ypass);
	$mysql=new Mysql();
	$sql="select pass from user where name='".$tuser."'";
	$arr=$mysql->dql_assoc($sql);
	$sqlpass=$arr[0]['pass'];
	if($ypass==$sqlpass){
		if($ypass==$newpass){
			echo 2;
		}else{
			$sql="update user set pass='".$newpass."' where name='".$tuser."'";
			$res=$mysql->dml($sql);
			if($res){
				echo 1;
			}
		}
	}else{
		echo 0;
	}
		
	
	
	
?>





