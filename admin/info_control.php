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
		border:1px solid #fcc;
	}
	.title{
		text-align:center;
		font:italic bold 50px/100px normal;
		color:red;
	}
	.info{								/*全部信息框架*/
	}
	.info_dy{							/*单元信息*/
		border-top:1px solid #fcc;
		font-size:13px;
		text-align:center;
	}
	.info_dy .left{						/*左侧字样样式*/
		padding-top:3px;
		padding-bottom:3px;
	}
	.info_dy .left span{				/*各信息头字体样式*/
		font:normal bold 16px normal;
		color:#a90;
	}	
	.info_dy .left div{
		margin-top:5px;
	}
	
	
	.left, .right{						/*左右共同样式*/
		height:100%;
		width:91%;
		float:left;
	}
	.right{
		width:8%;
		float:right;
		font:italic bold 20px/100px normal;
		text-align:center;
		
	}
	.clear{									/*清除浮动*/
		clear:both;
	}
	.delete{
		color:blue;
		cursor:pointer;
	}
	.back{
		color:blue;
		text-align:right;
		margin-right:10px;
		margin-top:5px;
	}
    
    .search_name_form{					/*按用户名搜索*/
        text-align:right;
        margin-right:10px;
    }
    
    .nouser{							/*无此用户名样式*/
        color:red;
        font:italic bold 35px/70px normal;
    }
</style>
<body>
	<div id="all">
		<div class='back'><a href='admin_c.php'>返回</a>　<a class='exit'>退出管理</a></div>
		<div class='title'>搜房网信息管理</div>		<!--标题-->
		<div class="info">								<!--信息显示-->
            <form class='search_name_form' action='info_control.php' method='get'>
                <input type="text" name="search_name" />
                <input type="submit" value='按用户名搜索'/>
            </form>
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
	error_reporting(0);
    if($_GET['search_name']){
    	$scnamesql="where uname='".$_GET['search_name']."'";
	}else{
		$scnamesql='';
	}
    
	require '../mysqltools.php';
	$mysql=new Mysql();
	if($_COOKIE['delid']){
			$sqldel="delete from fanginfo where id={$_COOKIE['delid']}";
			$res=$mysql->dml($sqldel);
	}
	$pnow = $_GET['pnow'];
	if(!$pnow){
		$pnow=1;
	}
	$pn=($pnow-1)*10;
    if($_GET['search_name']){
		$sql="select * from fanginfo $scnamesql order by time";
		$count=1;
    }else{
		$sql="select * from fanginfo order by time desc limit $pn,10";
        $sqlc="select count(*) from fanginfo";
		$arrc=$mysql->dql($sqlc);
		$count=$arrc[0][0];
    }
	$arr=$mysql->dql_assoc($sql);
	
	require 'fpage_g.php';
	if($arr){
		//fpage($count,'info_control.php');
		for($i=0;$i<count($arr);$i++){
			echo "<div class='info_dy'>";
				echo "<div class='left'>";
					echo "<div><span class='bt'>用户:</span>{$arr[$i]['uname']}　<span class='bt'>标题:</span>{$arr[$i]['title']}　<span class='bt'>时间:</span>{$arr[$i]['time']}　<span class='bt'>联系人:</span>{$arr[$i]['lxr']}　<span class='bt'>电话:</span>{$arr[$i]['phone']}</div>";
					
					echo "<div><span class='bt'>供求:</span>{$arr[$i]['gqgx']}　<span class='bt'>面积:</span>
					{$arr[$i]['mj']} {$arr[$i]['mjqg1']}- {$arr[$i]['mjqg2']}平米　<span class='bt'>价格:</span>{$arr[$i]['priceall']}万元　<span class='bt'>月租:</span>{$arr[$i]['priceyz']}　求购{$arr[$i]['priceqz1']} - {$arr[$i]['priceqz2']}元　<span class='bt'>户型:</span>{$arr[$i]['hx']}　<span class='bt'>楼层:</span>{$arr[$i]['lc']}</div>";
					
					echo "<div><span class='bt'>小区:</span>{$arr[$i]['aname']}　<span class='bt'>位置:</span>{$arr[$i]['position']}　<span class='bt'>简介:</span>{$arr[$i]['finfo']}</div>";
				echo "</div>";
				
				echo "<div class='right'>";
           		echo "<a class='delete' val={$arr[$i]['id']} pnow={$pnow}>删 除</a>";
				echo "</div>";
				echo "<div class='clear'></div>";
			echo "</div>";
		}
		fpage($count,'info_control.php');
    }else{
    	echo "<div class='info_dy'>";
       	echo " <div class='nouser'> 无此用户名!!!</div>";
		echo "</div>";
    }


}



?>












