


<?php
	$name=$_POST['username'];
	$safe=$_POST['safe'];
	$safe=md5($safe);

	require "mysqltools.php";
	$mysql=new Mysql();
	$sql="select * from user where name='".$name."'";
	$arr=$mysql->dql_assoc($sql);
	if($arr){
		if($arr[0]['safe']==$safe){
			echo 1;
		}else{
			echo 0;
		}
	}
?>