

<?php

	//$arr=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21);
	//$count=count($arr);
	//$page='index.php';
	
	//fpage($count,$page);
function fpage($count,$page){
	
	echo "<script src='jquery-1.11.1.js'></script>";
	echo "<script src='jquery.cookie.js'></script>";
	echo "<script src='b.js'></script>";
	echo "<style>";
		echo ".b{";
			echo "text-align:center;";
			echo "font:normal bold 17px/100px normal;";
		echo "}";
		echo ".b a{";
			echo "text-decoration:none;";
		echo "}";
	echo "</style>";
	echo "<div class='b'>";
	//$count=count($arr);			//总条数	需传值 
	
	$pnum=ceil($count/10);			//总页数
	
	$pnow=$_GET['pnow'];			//当前页	
	if(!$pnow){
		$pnow=1;
	}
	//echo $pnow."当前页<br>";
	if($pnow<0){
		$pnow=1;
	}else if($pnow==1){	
		$pt=$pnow;
	}else if($pnow==2){	
		$pt=$pnow-1;
	}else if($pnow==3){	
		$pt=$pnow-2;
	}else if($pnow==4){	
		$pt=$pnow-3;
	}else if($pnow==5){	
		$pt=$pnow-4;
	}else if($pnow==5){	
		$pt=$pnow-5;
	}else if($pnow>$pnum-9){
		$pt=$pnum-9;
	}else{
		$pt=$pnow-5;
	}
	$index=$pt+10;
	
	
	echo " <a href=".$page."?pnow=1>首页</a> ";
	if($pnow>1){
		$ppre=$pnow-1;
		echo " <a href=".$page."?pnow=$ppre>上一页</a> ";
	}
	if($pnow>10){
		$ppre10=$pnow-10;
		echo " <a href=".$page."?pnow=$ppre10> << </a> ";
	}
	for($i=$pt;$i<$index;$i++){
		if($i<=$pnum){
			if($i==$pnow){
				echo " <a href=".$page."?pnow=$i style='font-size:20px;color:red' >".$i."</a> ";
			}else{
				echo " <a href=".$page."?pnow=$i>".$i."</a> ";
			}
		}
	}
	if($pnow<$pnum-9){
		$pnext10=$pnow+10;
		echo " <a href=".$page."?pnow=$pnext10> >> </a> ";
	}
	if($pnow<$pnum){
		$pnext=$pnow+1;
		echo " <a href=".$page."?pnow=$pnext>下一页</a> ";
	}
	echo " <a href=".$page."?pnow=$pnum>尾页</a> ";
	echo "　　共".$pnum."页";
	echo "</div>";
}
?>

