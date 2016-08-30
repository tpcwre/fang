<?php
	error_reporting(0);
					//=====登陆login验证
	if($code=$_GET['code']){
		if($code==$_COOKIE['code']){
			echo "true";
		}else{
			echo "false";
		}
	}

					//=====注册reg验证
	if($rcode=$_GET['rcode']){
		if($rcode==$_COOKIE['code']){
			echo "true";
		}else{
			echo "false";
		}
	}

	
	
					//=====留言验证
	if($lycode=$_GET['lycode']){
		if($lycode==$_COOKIE['code']){
			echo "true";
		}else{
			echo "false";
		}
	}
	
	
	
?>