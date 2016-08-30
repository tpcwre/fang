<?php
	require 'mysqltools.php';
	$m=new Mysql();
	$sql="select path from img where id=1";
	$arr=$m->dql($sql);
	echo $arr[0][0];
?>

<body>
	<form action='' method='post' enctype='multipart/form-data'>
		<input type='file' name='photo' style='cursor:pointer;'/>
		<input type="submit" value="提交" name='import' style='cursor:pointer;'/>
	</form>
    
     <img src='<?php echo $arr[0][0]; ?>' />
</body>

<?php

	$hcname=$_FILES['photo']['tmp_name']; //缓存名
	echo $hcname.'<br>';
	$wjname=$_FILES['photo']['name'];
	echo $wjname.'<br>';
	
	$s2 = new SaeStorage();  
	$img_data = file_get_contents($hcname);//获取本地上传的图片数据
	//echo $img_data;
	$s2->write('imgstorage',$wjname,$img_data);//将public修改为自己的storage 名称 
	$url= $s2->getUrl('imgstorage',$wjname);//将public修改为自己的storage 名称echo "文件名：".$name."
	echo $url."<br>";


	$sql="insert into img(name,path) values('img1','".$url."')";
	$res=$m->dml($sql);
	if($res){
		echo '文件添加成功';
    }else{
    	echo '文件添加失败';
    }
	

	


/*
	$si=new SaeStorage();		//实例 sae storage 对象
		//img_gg：指定上传的文件夹
		//$wjname：上传后的文件名
		//$hcname：缓存文件名
	$url = $si->upload('img_gg',$wjname,$hcname);
	echo $url;
	
*/
	
	
	
?>
