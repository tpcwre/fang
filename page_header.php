<head>
<!--
<script src='js/jquery-1.11.1.js'></script>
<script src="js/jqueryui.js"></script>
-->
<script src="js/time.js"></script>
<script src='js/page_header.js'></script>
<link type="text/css" rel='stylesheet' href='css/jqueryui.css'/>
<style>
	.page_header{						/*头部总体样式*/
		width:950px;
		height:140px;
		border:1px solid #a90;
		background:url(img/big1.gif);
	}
	.page_header_d1{							/*左侧时间区域*/
		width:300px;
		height:18px;
		float:left;
		text-align:center;
		font:italic bold 13px norml;
		color:#a90;
		padding-top:115px;
		
	}
	.page_header_d2{					/*右侧布局*/
		width:645px;
		height:140px;
		float:left;
	}

	.page_header_d2_1{									/*登陆注册样式*/
		text-align:right;
		padding-right:10px;
		height:25px;
	}
	.page_header_d2_1 a{								/*去除登陆下划线*/
		text-decoration:none;
	}
		.page_login{									/*设置引用登陆的位置*/
			position:relative;
			top:-15px;
		}
	.page_header_d2_2{									/*宣传文字样式*/
		font:italic normal 18px/20px normal;
		color:#aae;
		text-indent:20px;
	}
	.page_header_d2_3{
		font:italic normal 18px/20px normal;
		color:#aae;
		margin-top:20px;
		text-indent:60px;
	}
	.page_header_d2_4{							/*免费发布按钮位置设置*/
		text-align:right;
		padding-top:5px;
		padding-right:10px;
	}
    
</style>
</head>
<body>
	<div class='page_header'>
		<div class="page_header_d1">					<!--时间-->
			<?php require "page_time.php" ?>
		</div>
		<div class="page_header_d2">					<!--右侧布局-->
			<div class='page_header_d2_1'>					<!--登陆注册-->
				<?php require 'page_reg_login.php'; ?>
			</div>
			<div class='page_header_d2_2'>					<!--宣传文字-->
				致力提供本地服务!免费发布查询房产信息！
			</div>
			<div class='page_header_d2_3'>
				房子买的快!卖的快!海量房产信息查询就上柳河搜房网！
			</div>	
			<div class='page_header_d2_4'>					<!--发布按钮-->
				<button class='page_header_but'>免费发布信息</button>
			</div>
		</div>
	</div>
 
</body>



