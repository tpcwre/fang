<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>

<script src='js/jquery-1.11.1.js'></script>
<script src='js/jqueryui.js'></script>
<script src='js/jquery.validate.js'></script>
<script src='js/jquery.form.js'></script>
<script src='js/jquery.cookie.js'></script>
<link type='text/forms' rel="stylesheet" href='forms/jqueryui.forms'/>
<style>
	*{
		padding:0;
		margin:0;
	}
	body{
		width:950px;
		margin:0 auto;
	}
	.fang_one{							/*第一横排区*/
		height:140px;
		margin-top:5px;
	}
		.page_header{
			position:relative;
			top:-20px;
		}
	
	
	
	.fang_two{							/*第二横排区*/
		border:1px solid #a90;
		margin-top:5px;
		padding:0;
		width:950px;
	}
		.fang_two_left{					/*二横左区-发布信息*/
			float:left;
			width:700px;
			//border-right:1px solid #a90;
		}
		.fang_two_left .d1{							/*标题样式*/
			text-align:center;
			//border:1px solid;
			font:normal bold 39px/70px normal;
		}
		.fang_two_left .time{						/*发布时间样式*/
			text-align:center;
			font-size:13px;
			padding-bottom:10px;
		}
		.fang_two_left .d2{
			//border:1px solid;
		}
				.fang_two_left .d2 .d2_1{			/*标题图片位置*/
					color:red;
					float:left;
					//border:1px solid;
					width:300px;
					height:300px;
					margin-left:50px;
				}
						.fang_two_left .d2 .d2_1 .d2_1_1{	/*图片内框*/
							border:1px solid;
							width:280px;
							height:280px;
							margin:10px 10px;
						}
				.fang_two_left .d2 .d2_2{			/*短介绍*/
					float:right;
					//border:1px solid;
					width:350px;
					height:290px;
				//	padding-top:10px;
					font:normal bold 20px/32px normal;
					text-indent:40px;
				}
				.fang_two_left .d2 .d2_2 div{
					//border:1px solid;
				}
				.fang_two_left .d2 .clear{
					clear:both;
				}
		.fang_two_left .d3{					/*简介*/
			//border:1px solid;
			word-wrap:break-word;
		}
			.fang_two_left .d3 div{
				width:500px;
				margin:10px auto;
				margin-bottom:20px;
			}
			
			
		.fang_two_left .d4{					/*图片区*/
			//border:1px solid;
		}
			.fang_two_left .d4 .img{ 	
				border:1px solid;
				width:300px;
				height:300px;
				margin:10px auto;
			}
	
		
		.fang_two_right{				/*二横右区-广告*/
			float:right;
			width:240px;
			height:760px;
			border-left:1px solid #a90;
		}
		.fang_two_clear{
			clear:both;
		}
		.fgg{
			height:236px;
			width:210px;
			border:1px solid #a90;
			margin:5px auto;
			padding:5px;
			padding-bottom:2px;
			background:#eff;
		}
		
		
	.fabu_three{							/*第三横排区*/
	

	}
		.page_bottom{						/*设置引用底部页面的位置*/
			position:relative;
			top:-12px;
		}
</style>
</head>
<?php
	require 'mysqltools.php';
	$mysql = new Mysql();
	$id=$_GET['infoid'];
	$sql="select * from fanginfo where id=$id";
	$arr=$mysql->dql_assoc($sql);
	
	function dinfo($arr){
		if($arr[0]['gqgx']=='出售'){
			echo "<div style='text-indent:100px'>出售</div>";
			echo "<div>价　格：<span>".$arr[0]['priceall']."万元</span></div>";
			echo "<div>面　积：<span>".$arr[0]['mj']."平米</span></div>";
		}else if($arr[0]['gqgx']=='出租'){
			echo "<div style='text-indent:100px'>出租</div>";
			echo "<div>月　租：<span>".$arr[0]['priceyz']."元</span></div>";
			echo "<div>面　积：<span>".$arr[0]['mj']."平米</span></div>";
		}else if($arr[0]['gqgx']=='求租'){
			echo "<div style='text-indent:100px'>求租</div>";
			echo "<div>月　租：<span>".$arr[0]['priceqz1']."-".$arr[0]['priceqz2']."元</span></div>";
			echo "<div>面　积：<span>".$arr[0]['mjqg1']."-".$arr[0]['mjqg2']."平米</span></div>";
		}else if($arr[0]['gqgx']=='求购'){
			echo "<div style='text-indent:100px'>求购</div>";
			echo "<div>价　格：<span>".$arr[0]['priceqg1']."-".$arr[0]['priceqg2']."万元</span></div>";
			echo "<div>面　积：<span>".$arr[0]['mjqg1']."-".$arr[0]['mjqg2']."平米</span></div>";
		}
		
	}
?>
<body>
	<div class="fabu_one"><?php require "fabu_one.php"; ?></div>


	<div class="fang_two">	
		<div class="fang_two_left">				<!--二横左区，显示具体信息-->
			<div class='d1'>							<!--标题-->
				<?php echo $arr[0]['title']; ?>
			</div>
			<div class='time'>发布时间　<?php echo $arr[0]['time'] ?></div>
			<div class='d2'>							<!--图片与短信息-->
				<div class='d2_1'>							<!--图片与短信息-->
					<div class="d2_1_1">
						<img src="img/6a.png" width=280 height=280 />
					</div>
				</div>
				<div class='d2_2'>							<!--图片与短信息-->
					<?php dinfo($arr); ?>
					<div>户　型：<span><?php echo $arr[0]['hx']; ?></span></div>
					<div>楼　层：<span><?php echo $arr[0]['lc']; ?></span></div>
					<div>小　区：<span><?php echo $arr[0]['aname']; ?></span></div>
					<div>位　置：<span><?php echo $arr[0]['position']; ?></span></div>
					<div>电　话：<span><?php echo $arr[0]['phone']; ?></span></div>
					<div>联系人：<span><?php echo $arr[0]['lxr']; ?></span></div>
				</div>
				<div class='clear'></div>
			</div>
			<div class='d3'>							<!--介绍-->
				<div style='font-size:20px;'><center>房屋简介：</center></div>
				<div>	
					<?php echo $arr[0]['finfo'] ?>
				</div>
			</div>	
														<!--图片展示			
			<div class='d4'>							
				<div class='img'>
					<img src='img/6a.png' width=300 height=300> 
				</div>

			</div>
														-->
		</div>
		<div class="fang_two_right">						<!--广告区-->
			<div class='fgg gg_1'>
                    <img src="<?PHP ggzs('info_1'); ?>" height=230 width=210 />
				</div>
				<div class='fgg gg_1'>
                    <img src="<?PHP ggzs('info_2'); ?>" height=230 width=210 />
				</div>
				<div class='fgg gg_1'>
                    <img src="<?PHP ggzs('info_3'); ?>" height=230 width=210 />
				</div>
		</div>
		<div class="fang_two_clear"></div>   <!--清除横二浮动-->
	</div>
	
	<div class="fabu_three"><?php require "page_bottom.php"; ?></div>
</body>






<?php
function ggzs($sy){
	$mysql=new Mysql();
    $sql="select path from img where name='".$sy."'";
    $arr=$mysql->dql($sql);
    echo $arr[0][0];
}
?>





