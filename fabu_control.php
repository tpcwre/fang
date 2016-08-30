<?php
	error_reporting(0);
	//=====注-本页面需要使用UTF-8无BOM编码。不然会出错。
								//用户名
	$uname=$_COOKIE['user'];	//echo $uname.'=uname \ ';
	$uname=trim($uname);
	if(!$uname){
		$uname='--';
	}
				
								//状态
	$stats=0;					//echo $stats.'=stats \ ';

								//供求
	$gqgx = $_POST['gqgx'];		//echo $gqgx.'=gqgx \ ';	
	if(!$gqgx){
		$gqgx='--';
	}
								//标题
	$title = $_POST['title'];		//echo $title."=title \ "; 
	if(!$title){
		$title='--';
	}
	
	
								//联系电话
	$phone=$_POST['phone'];		//echo $phone."=phone \ ";
	if(!$phone){
		$phone='--';
	}
								//联系人
	$lxr=$_POST['lxr'];			//echo $lxr."=lxr  \ ";
	if(!$lxr){
		$lxr='--';
	}
								//户型
	$hx1=$_POST['hx1'];		//echo $hx1."  \ ";
	if(!$hx1){
		$hx1='--';
	}
	$hx2=$_POST['hx2'];		//echo $hx2."<br>";
	if(!$hx2){
		$hx2='--';
	}
	$hx3=$_POST['hx3'];		//echo $hx3."<br>";
	if(!$hx3){
		$hx3='--';
	}
	$hx4=$_POST['hx4'];		//echo $hx4."<br>";
	if(!$hx4){
		$hx4='--';
	}
	$hx=$hx1."室".$hx2."厅".$hx3."厨".$hx4."卫";	//echo $hx."=hx  \ ";  

	
		//=====面积=====
								//出售面积
	$mj=$_POST['mj'];		//echo $mj."<br>";
	if(!$mj){
		$mj=0;
	}

								//求购，求租面积1，2
	$mjqg1 = $_POST['mjqg1'];		//echo $mjqg1."=mjqg1  \ ";
	if(!$mjqg1){
		$mjqg1=0;
	}
	$mjqg2 = $_POST['mjqg2'];		//echo $mjqg2."=mjqg2  \ ";
	if(!$mjqg2){
		$mjqg2=0;
	}

	
	
				
		//=====价格======
								//出租月租
	$priceyz = $_POST['priceyz'];		//echo $priceyz."=priceyz  \ ";	
	if(!$priceyz){
		$priceyz='--';
	}

								//求租月租1，2 元
	$priceqz1 = $_POST['priceqz1'];		//echo $priceqz1."=priceqz1  \ ";
	if(!$priceqz1){
		$priceqz1='--';
	}
	$priceqz2 = $_POST['priceqz2'];		//echo $priceqz2."=priceqz2  \ ";
	if(!$priceqz2){
		$priceqz2='--';
	}

								//求购价格1，2 万元
	$priceqg1 = $_POST['priceqg1'];		//echo $priceqg1."=priceqg1  \ ";
	if(!$priceqg1){
		$priceqg1='--';
	}
	$priceqg2 = $_POST['priceqg2'];		//echo $priceqg2."=priceqg2 \ ";
	if(!$priceqg2){
		$priceqg2='--';
	}

								//出售总价
	$priceall=$_POST['priceall'];			
	if(!$priceall){
		$priceall='面议';
	}


								//出售单价
	if($priceall==0 || $mj==0){
		$price=0;	
	}else{
		$price=ceil($priceall*10000/$mj);
	}
//	echo $price.'==price';
											//echo $price."=price  \ ";
	
								//楼层 
	$lc1=$_POST['lc1'];		//echo $lc1."<br>";
	if(!$lc1){
		$lc1='--';
	}
	$lc2=$_POST['lc2'];		//echo $lc2."<br>";
	if(!$lc2){
		$lc2='--';
	}
	if(!$lc1 || !$lc2){
		$lc='其它楼层';
	}else{
		$lc=$lc1."\/".$lc2;					
	}
											//echo $lc."=lc  \ ";
								//位置
	$position=$_POST['position'];		//
	if(!$position){
		$position='其它位置';
	}	
											//echo $position."=position  \ ";

								//小区名
	$aname=$_POST['aname'];		//
	if(!$aname){
		$aname='其它小区';
	}
											//echo $aname."=aname  \ ";
								//简介
	$finfo=$_POST['finfo'];		//
	if(!$finfo){
		//$finfo='--';
	}
											//echo $finfo."=finfo  \ ";
								//图片
	$img=$_POST['img'];
	if(!$img){
		$img='--';
	}
			
								//时间
	//$time=now();					
	

	
	require 'mysqltools.php';
	$mysql=new Mysql();
	//$sql="insert into fanginfo(uname,stats,gqgx,title,phone,lxr,hx,mj,mjqg1,mjqg2,priceyz,priceqz1,priceqz2,priceqg1,priceqg2,priceall,price,lc,position,aname,finfo,img,time) values('".$uname."','".$stats."','".$gqgx."','".$title."','".$phone."','".$lxr."','".$hx."','".$mj."','".$mjqg1."','".$mjqg2."','".$priceyz."','".$priceqz1."','".$priceqz2."','".$priceqg1."','".$priceqg2."','".$priceall."','".$price."','".$lc."','".$position."','".$aname."','".$finfo."','".$img."',now())";
	$sql="insert into fanginfo(uname,stats,gqgx,title,phone,lxr,hx,mj,mjqg1,mjqg2,priceyz,priceqz1,priceqz2,priceqg1,priceqg2,priceall,price,lc,position,aname,finfo,img,time) values('".$uname."',$stats,'".$gqgx."','".$title."','".$phone."','".$lxr."','".$hx."','".$mj."','".$mjqg1."','".$mjqg2."','".$priceyz."','".$priceqz1."','".$priceqz2."','".$priceqg1."','".$priceqg2."','".$priceall."',$price,'".$lc."','".$position."','".$aname."','".$finfo."','".$img."',now())";

	$res=$mysql->dml($sql);
//	echo 'res--'.$res;
	if($res){
		echo 1;
	}else{
		echo 0;
	}
	
	
	
	
	
	

?>
