<?php
	$str="";				
	for($i=0;$i<4;$i++){
		$str.=dechex(rand(1,15));	
	}
	setCookie('code',$str,time()+3600);
	
	$im=imagecreatetruecolor(50,20);		
	$red=imagecolorallocate($im,255,255,255);	

	for($i=1;$i<10;$i++){
		imageline($im,rand(0,50),rand(0,30),rand(0,50),rand(0,30),imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255)));			
	}

	imagestring($im,5,6,2,$str,$red);		
	header('content-type: image/png');		
	imagepng($im);					
	
	
?>