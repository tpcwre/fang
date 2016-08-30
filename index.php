<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	require 'mysqltools.php';
?>
<head>
<meta http-equiv="content-type" content="text/html charset=utf-8" />
<meta name="description" content="房地产信息发布，查询"/>
<meta name="keywords" content="搜房网|柳河搜房网"/>	
<title>搜房网</title>
    
<script src='js/jquery-1.11.1.js'></script>
<script src='js/jqueryui.js'></script>
<script src='js/jquery.validate.js'></script>
<script src='js/jquery.form.js'></script>
<script src='js/jquery.cookie.js'></script>
<script src='js/index.js'></script>
<link type='text/css' rel="stylesheet" href='css/jqueryui.css'/>
<style>
	*{
		padding:0;
		margin:0;
		//border:1px solid;
	}
	body{
		width:950px;
		margin:0 auto;
	}
	.index_one{							/*第一横排区*/
		height:140px;
		//margin-top:5px;
	}
		.page_header{
			position:relative;
			top:-20px;
		}
	
	
	
	.index_two{							/*二横排区*/
		border:1px solid #a90;
		width:950px;
		//height:800px;
		margin-top:5px;
		margin-bottom:-12px;
	}
	.index_two_two_left{					/*二横区->左侧显示结果区*/
		//height:100px;
		width:700px;
		border-right:1px solid #a90;
		float:left;
	}
	.index_two_two_right{					/*二横区->左侧显示结果区*/
		//height:300px;
		width:245px;
		border:1px solid #a90;
		float:right;
	}
	.index_two_two_clear{
		clear:both;
	}
	
	.index_three{						/*三横排区*/
	
	}
	
												/*头部大幅广告*/
	.dfgg{
		border:1px solid #a90;
		width:950px;
        //height:200px;
		margin-top:5px;
	}
    .dfgg div{
        margin-top:5px;
    }

	
</style>
</head>
<body>
													<!--一横头部区-->
	<div class="index_one"><?php require "page_header.php"; ?></div>

	
	
												<!--头部大幅广告-->

	<div class="dfgg">
        <div><img src='<?php hggzs('header_3'); ?>' width=950 height=85 /></div>
        <div><img src='<?php hggzs('header_1'); ?>' width=950 height=85 /></div>
        <div><img src='<?php hggzs('header_2'); ?>' width=950 height=85 /></div>
	</div>
    
    
    

	<div class="index_two">	
		<div class="index_two_one">					<!--二横_搜索区-->
			<?php require 'index_two_search.php'; ?>	
		</div>

	</div>
    
    
    
													<!--三横底部区域-->
	<div class="index_three"><?php require "page_bottom.php"; ?></div>
</body>


<?php

function hggzs($sy){
	$mysql= new Mysql();
	$sql="select path from img where name='".$sy."'";
	$arr=$mysql->dql($sql);
	echo $arr[0][0];
}

?>




