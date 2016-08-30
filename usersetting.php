<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
	require 'mysqltools.php';
?>
<head>

<script src='js/jquery-1.11.1.js'></script>
<script src="/js/jqueryui.js"></script>
<script src='js/jqueryui.js'></script>
<script src='js/jquery.validate.js'></script>
<script src='js/jquery.form.js'></script>
<script src='js/jquery.cookie.js'></script>
<script src="js/usersetting.js"></script>
<link type="text/css" rel="stylesheet" href="css/usersetting.css"/>
<style>
    .user_result_safe_but{
        width:100px;
        height:25px;
        text-indent:12px;
        font-size:12px;
    }
</style>
</head>
<body>




			<!--头部区-->
			
			
			
	<div class="fabu_one"><?php require "fabu_one.php"; ?></div> 

			
			
			
			
			
			
			
			
			
			
			
			<!--内容区-->
			
			
			
			
	<div class="fabu_two">	
		<div class="user_info">
			<div>
				<div class="u_f uf_info" ufval='user_result_info'>
					我发布的信息
				</div>
				<div class='u_f uf_pass' ufval='user_result_pass'>
					修改密码
				</div>
				<div class='u_f uf_safe' ufval='user_result_safe'>
					密保设置
				</div>
				<div class='uf_kong'>
					
				</div>
				<div class='user_clear'></div>
			</div>
			<div class='user_result_info ups'>
				<?php user_result_info(); ?>
			</div>
			<div class='user_result_pass ups'>
				<?php //modifypass(); ?>
				<form id="modifypass_form" action='usersetting_modifypass.php'>
					<div  id='modifypass'>
					<p class='error_red'></p>
					<p>原密码：<input type="password" name="ypass"/></p>
					<p>新密码：<input type="password" name="newpass" id="newpass"/></p>
					<p>新密码：<input type="password" name="newpass2"/></p>
					<p class='form_sub'><button>修改密码</button>
					</div>
				</form>
			</div>
			<div class='user_result_safe ups'>
					<form id='safe_form'>
					<p>请设置一个密保安全码，以便找回密码时使用!!!</p>
					<p>
						安全码：<input type="password" name='safe'/>
						<button class='user_result_safe_but'>提交</button>
					</p>
					<p class='error_safe' style="font-size:25px"></p>
					</form>
			</div>
		
		</div>
		
		
		<div class="user_gg">
			<div class="result-gg_gg">
				<div class='fgg gg_1'>
                    <img src="<?PHP ggzs('sz_1'); ?>" height=230 width=210 />
				</div>
				<div class='fgg gg_1'>
                    <img src="<?PHP ggzs('sz_2'); ?>" height=230 width=210 />
				</div>
			</div>
		</div>
		<div class="user_clear">
	</div>
	
	
	
	
	
	
	
	
	
	
	
				<!--底部区-->
	
	
	
			
	<div class="fabu_three"><?php require "page_bottom.php"; ?></div>
</body>





<?php

function user_result_info(){
	$mysql=new Mysql();
	$delid = $_COOKIE['delid'];		//要接收删除的ID
	if($delid){
		$sqldel="delete from fanginfo where id=$delid";
		$res = $mysql->dml($sqldel);
	}

	$uname=$_COOKIE['user'];
	$uname=trim($uname);
	
	$pnow=$_GET['pnow'];
	if(!$pnow){
		$pnow=1;
	}
	$pn = ($pnow-1)*10;
	$sql="select * from fanginfo where uname='{$uname}' order by time desc limit $pn,10";
	$sqlcount="select count(*) from fanginfo where uname='{$uname}'";
	$arr=$mysql->dql_assoc($sql);
	//$mysql->close();
	$count=$mysql->count2($sqlcount);
	//echo $count;
	if($arr){
		for($i=0;$i<count($arr);$i++){
			echo "<a href='index_fanginfo.php?infoid={$arr[$i]['id']}'>";

			echo "<div class='u_r_i'>";
			if($arr[$i]['gqgx']=='出售'){
				echo "<div class='d d1'> {$arr[$i]['gqgx']} {$arr[$i]['aname']} {$arr[$i]['mj']}平米 价格{$arr[$i]['priceall']}万元</div>";
			}else if($arr[$i]['gqgx']=='出租'){
				echo "<div class='d d1'> {$arr[$i]['gqgx']} {$arr[$i]['aname']}  {$arr[$i]['mj']}平米 月租{$arr[$i]['price']}元</div>";
			}else if($arr[$i]['gqgx']=='求租'){
				echo "<div class='d d1'> {$arr[$i]['gqgx']} {$arr[$i]['aname']}  {$arr[$i]['mjqg1']}-{$arr[$i]['mjqg2']}平米 月租{$arr[$i]['priceqz1']}-{$arr[$i]['priceqz2']}元</div>";
			}else if($arr[$i]['gqgx']=='求购'){
				echo "<div class='d d1'> {$arr[$i]['gqgx']} {$arr[$i]['aname']}  {$arr[$i]['mjqg1']}-{$arr[$i]['mjqg2']}平米 价格{$arr[$i]['priceqg1']}-{$arr[$i]['priceqg2']}万元</div>";
			}
			echo "<div class='d d2'><a class='delid' delid={$arr[$i]['id']}>删除</a></div>"; 
			echo "<div class='user_clear'></div>";
			echo "</div>";
			echo "</a>";
		}
		echo "<div class='u_fpage'>";
				require 'fpage_g.php';
				fpage($count,'usersetting.php');
		echo "</div>";
	}else{
		echo "<div class='u_no_arr'>您还没有发布任何信息！！！</div>";
	}
}




function ggzs($sy){
	$mysql=new Mysql();
    $sql="select path from img where name='".$sy."'";
    $arr=$mysql->dql($sql);
    echo $arr[0][0];
}


?>