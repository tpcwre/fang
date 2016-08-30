<?php
	$pass=$_POST['pass'];
	$pass=md5($pass);
	require 'mysqltools.php';
	$mysql = new Mysql();
	$username=$_COOKIE['username'];

	$sql="update user set pass='".$pass."' where name='".$username."'";
	$res=$mysql->dml($sql);
	if($res){
		echo 1;
	}else{
		echo 0;
	}
	
	
	
?>

