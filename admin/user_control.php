<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<script src='../js/jquery-1.11.1.js'></script>
<script src='../js/jquery.validate.js'></script>
<script src='../js/jquery.form.js'></script>
<script src='../js/jquery.cookie.js'></script>
<script src='../js/user_control.js'></script>
<style>

	#all{
		width:950px;
		margin:0 auto;
		border:1px solid;
	}
	.title{
		text-align:center;
		font:italic bold 50px/100px normal;
		color:red;
		//border-bottom:1px solid;
	}
	.info{								/*全部信息框架*/
		
	}

	.back{				/*返回*/
		color:blue;
		text-align:right;
		margin-right:10px;
		margin-top:5px;
	}
	.info_dy{							/*单元信息*/
		border-top:1px solid;
		font-size:16px;
		text-align:center;
		padding-top:5px;
		padding-bottom:5px;
	}
	.info_dy span{
		font:normal bold 18px normal;
		color:red;
	}
	.user_del{					/*删除样式*/
		color:blue;
		cursor:pointer;
	}
	
</style>
<body>
	<div id="all">
		<div class='back'><a href='admin_c.php'>返回</a>　 <a class="exit">退出管理</a></div>
		<div class='title'>搜房网账号管理</div>		<!--标题-->
		<div class="info">								<!--信息显示-->
			<?php 
				if($_COOKIE['user']=='admin'){
					info(); 
				}
				
			?>
		</div>
	
	</div>
</body>

<?php
function info(){
	require '../mysqltools.php';
	$mysql=new Mysql();

	if($_COOKIE['user_del']){
		$sqldel="delete from user where id='".$_COOKIE['user_del']."'";
		$res=$mysql->dml($sqldel);
	}

	
	require 'fpage_g.php';
	
	$count=$mysql->count('user');
	
	$pnow=$_GET['pnow'];
	if(!$pnow){
		$pnow=1;
	}
	$pn=($pnow-1)*10;
	$sql="select * from user order by name limit $pn,10";
	$arr=$mysql->dql_assoc($sql);
	
	
	fpage($count,'user_control.php');
	if($arr){
		for($i=0;$i<count($arr);$i++){
			echo "<div class='info_dy'>";
				echo "<span class='s1'>用户名：</span>{$arr[$i]['name']}　<span class='s2'>密码：</span>{$arr[$i]['pass']}　<span class='s3'>　　　　　　　　　　<a class='user_del' val={$arr[$i]['id']} pnow={$pnow}>删除</a></span>";
			echo "</div>";
		}
	}


}



?>













