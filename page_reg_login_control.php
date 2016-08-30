<?php

	//var_dump($_POST);exit;
	
	error_reporting(0);
	require "mysqltools.php";
	$mysql=new Mysql();
														//=====用户登陆验证控制
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$pass=md5($pass);
	if($user && $pass){
		$sql="select pass from user where name='".$user."'";
		$arr=$mysql->dql_assoc($sql);
		if($arr){
			if($pass==$arr[0]['pass']){
				echo 1;
			}else{
				echo 0;
			}
		}else{
			echo 0;
		}
	}
	
		
		
		
		
															//=====用户注册
	$ruser=$_POST['ruser'];
	$rpass=$_POST['rpass'];
	$rpass = md5($rpass);
	//echo $rpass;
	if($ruser && $rpass){
 		$sql="insert into user values(null,'{$ruser}','{$rpass}','','')";
		$res=$mysql->dml($sql);
		if($res){
			echo $ruser;
		}else{
			echo 0;
		}
	}
	
	
	

?>







