<?php
	error_reporting(0);
					//=====��½login��֤
	if($code=$_GET['code']){
		if($code==$_COOKIE['code']){
			echo "true";
		}else{
			echo "false";
		}
	}

					//=====ע��reg��֤
	if($rcode=$_GET['rcode']){
		if($rcode==$_COOKIE['code']){
			echo "true";
		}else{
			echo "false";
		}
	}

	
	
					//=====������֤
	if($lycode=$_GET['lycode']){
		if($lycode==$_COOKIE['code']){
			echo "true";
		}else{
			echo "false";
		}
	}
	
	
	
?>