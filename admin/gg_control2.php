<style>
    .all{
        color:red;
         font:normal bold 60px/350px normal;
         text-align:center;
    }
</style>
<body>
<div class='all'>
<?php
	$files=$_FILES;
	foreach($files as $k=>$v){
        if(empty($files[$k]['name'])){
         //   echo "文件不能为空！<a href='gg_control.php'>返回</a>";
            echo "<script>alert('文件不能为空！');history.go(-1);</script>";
        	exit();
        }
        if($files[$k]['type']!='image/jpeg' && $files[$k]['type']!='image/png' && $files[$k]['type']!='image/x-png' && $files[$k]['type']!='image/pjpeg' && $files[$k]['type']!='image/x-png' && $files[$k]['type']!='image/gif'){
           // echo $files[$k]['type'].'<br>';
        	//echo "文件类型不正确！<a href='gg_control.php'>返回</a>";
            echo "<script>alert('文件类型不正确！');history.go(-1);</script>";
            exit();
        }
        if($k=='xs_1_1'){			//--首页页面
        	$fpage='sy_1';
        }else if($k=='xs_1_2'){
        	$fpage='sy_2';
        }else if($k=='xs_1_3'){
        	$fpage='sy_3';
        }else if($k=='xs_1_4'){
        	$fpage='sy_4';
        }else if($k=='xs_1_5'){
        	$fpage='sy_5';
        }else if($k=='xs_1_6'){
        	$fpage='sy_6';
        }else if($k=='xs_2_1'){		//--用户设置页面广告
            $fpage='sz_1';			
        }else if($k=='xs_2_2'){
        	$fpage='sz_2';
        }else if($k=='xs_3_1'){		//--信息发布页面广告
            $fpage='fabu_1';		
        }else if($k=='xs_3_2'){
        	$fpage='fabu_2';
        }else if($k=='xs_4_1'){		//--详细信息页面广告
            $fpage='info_1';		
        }else if($k=='xs_4_2'){
        	$fpage='info_2';
        }else if($k=='xs_4_3'){
        	$fpage='info_3';
        }else if($k=='xs_5_1'){		//--首页长幅广告
            $fpage='header_1';		
        }else if($k=='xs_5_2'){
        	$fpage='header_2';
        }else if($k=='xs_5_3'){
        	$fpage='header_3';
        }
        updateimg($files[$k]['name'],$files[$k]['tmp_name'],$fpage);
        
	}


//updateimg($name,$tmpf,$fpage);
function updateimg($name,$tmpf,$fpage){
    
    $data1 = file_get_contents($tmpf);

    require "upYun.class.php";
    $u = new upYun('qianxing','tpcwre','xiaodong123'); 
    $filename = time();
    $ext = pathinfo($name,PATHINFO_EXTENSION);
    $path = '/fang/'.$filename.'.'.$ext;
    $st = $u->writeFile($path,$data1);
    if(!$st || $st["x-upyun-frames"]!=1){
        echo "<script>alert('上传失败！');history.go(-1);</script>";
    }
    $url ="http://qianxing.b0.upaiyun.com".$path;


	require "../mysqltools.php";
	$mysql=new Mysql();
	$sql="update img set path='".$url."' where name='".$fpage."'";
	$res=$mysql->dml($sql);
	if($res){
       // echo "图片更新成功！<a href='gg_control.php'>返回</a>";
        echo "<script>alert('图片更新成功！');history.go(-1);</script>";
    }else{
       // echo '图片更新失败！';
        echo "<script>alert('图片更新失败！');history.go(-1);</script>";
    }
    exit();
}




?>
</div>
<body>