<?php
	$name=$_POST['adminname'];
	$pass=$_POST['adminpass'];
	if($name && $pass){
		require "../mysqltools.php";
		$mysql=new Mysql();
		$sql="select pass from admin where name='".$name."'";
		$arr=$mysql->dql($sql);
		if($arr){
			//echo 8;
			$sqls="select stat from admin where name='".$name."'";
			$arrs=$mysql->dql($sqls);
			if($arrs[0][0] >= 3){
				echo 6;
			}
				if($arr[0][0]==md5($pass)){
					$sqld="update admin set stat=0 where name='".$name."'";
					$res=$mysql->dml($sqld);
					if($res){
						echo 8;
					}
				}else{
					$jia=$arrs[0][0] + 1;
					$sqlj="update admin set stat= $jia where name='".$name."'";
					$resj=$mysql->dml($sqlj);
					if($resj){
						echo $jia;
					}
				}

		}else{
			echo 9;
		}
	}






?>