<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<script src='../js/jquery-1.11.1.js'></script>
<script src='../js/jquery.validate.js'></script>
<script src='../js/jquery.form.js'></script>
<script src='../js/jquery.cookie.js'></script>
<script src='../js/info_control.js'></script>
<style>

	#all{
		width:950px;
		margin:0 auto;
		border:1px solid #a90;
	}
	.title{
		text-align:center;
		font:italic bold 50px/100px normal;
		color:red;
		//border-bottom:1px solid #a90;
	}


	.back{								/*返回与退出管理*/
		color:blue;
		text-align:right;
		margin-right:10px;
		margin-top:5px;
	}
	
	.info{								/*全部信息框架*/
	//	height:300px;
		//border-top:1px solid #a90;
		//margin-top:5px;
	}
	
	.info_dy{							/*信息单元框架*/
		border-top:1px solid #a90;
		//height:100px;
	}
	.info_dy .left{						/*信息内容*/
		word-wrap:break-word;
		color:red;
		width:775px;
		//border:1px solid #a90;
		float:left;
		padding:5px 10px;
	}
	.info_dy .right{					/*删除*/
		//border:1px solid;
		float:right;
		height:35px;
		width:142px;
		font:italic bold 20px/35px normal;
		text-align:center;
	}
	.info_dy .clear{
		clear:both;
	}

	.b{
		border-top:1px solid #a90;
	}
</style>
<body>
	<div id="all">
		<div class='back'><a href='admin_c.php'>返回</a>　<a class='exit'>退出管理</a></div>
		<div class='title'>搜房网留言管理</div>		<!--标题-->
		<div class="info">								<!--信息显示-->
			<?php info(); ?>
		</div>
	
	</div>
</body>

<?php
function info(){						//<!--信息单元-->
	require '../mysqltools.php';
	$mysql=new Mysql();
	if($_GET['delid']){
		$sqldel="delete from ly where id={$_GET['delid']}";
		$res=$mysql->dml($sqldel);
	}
	
	$count=$mysql->count('ly');
	$pnow=$_GET['pnow'];
	if(!$pnow){
		$pnow=1;
	}
	$pn=($pnow-1)*10;
	$sql="select * from ly order by time desc limit $pn,10";
	$arr=$mysql->dql_assoc($sql);

	if(!$arr){
		//exit();
	}
	require "fpage_g.php";
	for($i=0;$i<count($arr);$i++){
		echo "<div class='info_dy'>";						
			echo "<div class='left'>";
				echo $arr[$i]['content']."<br>".$arr[$i]['time'];
			echo "</div>";
			echo "<div class='right'>";
				echo "<a href='ly_control.php?delid={$arr[$i]['id']}&pnow={$pnow}'>删　除</a>";
			echo "</div>";
			echo "<div class='clear'></div>";
		echo "</div>";
	}
	
	fpage($count,'ly_control.php');
	
}

?>

