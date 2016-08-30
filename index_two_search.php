
<?php
	//require 'mysqltools.php';
	//$mysql=new Mysql();
?>
<head>
<link type="text/css" rel="stylesheet" href="css/index_two_search.css"/>
<script src='js/index_two_search.js'></script>
<style>

</style>
</head>
<body>






				        <!--        搜索区域        -->
						
						
						
						
						
		

	<div class='index_two_search'>
		<div class="index_two_search_d" name='gqgx'>
			按供求搜索：　 <a class='s_gqgx'>不限</a>　 <a class='s_gqgx'>出售</a> <a class='s_gqgx'>出租</a> <a class='s_gqgx'>求租</a> <a class='s_gqgx'>求购</a>
		</div>
		<div class='dis_play'>
		<div class="index_two_search_d ds" name='price'>
			按单价搜索：　 <a class='s_price'>不限</a>　 <a class='s_price'>1000元/平以下</a> <a class='s_price'>1000-2000元/平</a> <a class='s_price'>2000-3000元/平</a> <a class='s_price'>3000元/平以上</a>
		</div>
		<div class="index_two_search_d ds" name='priceall'>
			按总价搜索：　 <a class='s_priceall'>不限</a>　 <a class='s_priceall'>10万元以下</a> <a class='s_priceall'>10-20万元</a> <a class='s_priceall'>20-30万元</a> <a class='s_priceall'>30万元以上</a>
		</div>
		<div class="index_two_search_d ds" name='mj'>
			按面积搜索：　 <a class='s_mj'>不限</a>　 <a class='s_mj'>60平以下</a> <a class='s_mj'>60-80平</a> <a class='s_mj'>80-100平</a> <a class='s_mj'>100平以上</a>
		</div>

		<div class="index_two_search_d ds" name='hx'>
												<!--按户型搜索-左侧-->
			<div class="index_two_search_d_d1" name='hx'>按户型搜索：</div>
			
												<!--按户型搜索-右侧-->
			<div class="index_two_search_d_d2">
				<?php hx();?>
			</div>
			<div class="i_t_s_d_d_clear"></div>
		</div>
		
		<!--
		<div class="index_two_search_d ds" name='aname'>
												按小区搜索-左侧
			<div class="index_two_search_d_d1" name='aname'>按小区搜索：</div>
			
												按小区搜索-右侧
			<div class="index_two_search_d_d2">
				<?php aname(); ?>
			</div>
			<div class="i_t_s_d_d_clear"></div>
			
		</div>-->
		</div>
		
		
		
		
		
		
		
		
		
					<!--          以选条件区域          -->
					
					
					
					
					
					
		<div class="index_two_search_yxtj">
			<!--ajax异步加载index_two_search_yxtj.php页面-->
			<div class='yxtj_yxtj'>
			已选条件：
			<?php 
				if($_COOKIE['s_gqgx']!='不限' && $_COOKIE['s_gqgx']){
					echo "<span>".$_COOKIE['s_gqgx']."</span>　";
				}
				if($_COOKIE['s_price']!='不限' && $_COOKIE['s_price']){
					echo "<span>".$_COOKIE['s_price']."</span>　";
				}
				if($_COOKIE['s_priceall']!='不限' && $_COOKIE['s_priceall']){
					echo "<span>".$_COOKIE['s_priceall']."</span>　";
				}
				if($_COOKIE['s_mj']!='不限' && $_COOKIE['s_mj']){
					echo "<span>".$_COOKIE['s_mj']."</span>　";
				}
				if($_COOKIE['s_hx']!='不限' && $_COOKIE['s_hx']){
					echo "<span>".$_COOKIE['s_hx']."</span>　";
				}
				if($_COOKIE['s_aname']!='不限' && $_COOKIE['s_aname']){
					echo "<span>".$_COOKIE['s_aname']."</span>　";
				}
			?>
			</div>
		</div>
		


		
		
		
		
		
		
		
		
		
		
		
		
					
					
					
					
					
					<!--结果显示与广告总框架-->
			
		<div class="result-gg">		



						<!--结果显示区-->
			<div class="result-gg_result">
				
				<?php 
					require 'index_two_result.php';  
				?>
				
			</div>
			
			
			
			
			
			
			
			
					<!--广告区-->
			

			<div class="result-gg_gg">
				<div class='fgg gg_1'>
                    <img src="<?PHP ggzs('sy_1'); ?>" height=230 width=210 />
				</div>
				<div class='fgg gg_1'>
					<img src="<?PHP ggzs('sy_2'); ?>" height=230 width=210 />
				</div>
				<div class='fgg gg_1'>
					<img src="<?PHP ggzs('sy_3'); ?>" height=230 width=210 />
				</div>
				<div class='fgg gg_1'>
					<img src="<?PHP ggzs('sy_4'); ?>" height=230 width=210 />
				</div>
				<div class='fgg gg_1'>
					<img src="<?PHP ggzs('sy_6'); ?>" height=230 width=210 />
				</div>
				<div class='fgg gg_1'><br>
                    <img src="<?PHP ggzs('sy_5'); ?>" height=210 width=210 />
				</div>
			</div>
			<div class='result-gg_clear'></div>
		
		</div>
		
	</div>
	
		

</body>




<?php	



										//按户型搜索显示的函数 
function hx(){
	//引用页面在本页顶部
	$mysql=new Mysql();
	$sql="select hx from fanginfo order by id";
	$arr=$mysql->dql($sql);
	$a=array();
	for($i=0;$i<count($arr);$i++){
		$a[]=$arr[$i][0];
	}
	$b=array_unique($a);
	$count=count($b);
	echo "<span class='hxgd' name='hx'>";
	
	echo "<a class='s_hx'>不限</a>　  ";
	echo "<a class='s_hx'>1室1厅1厨1卫</a>　<a class='s_hx'>2室1厅1厨1卫</a>　<a class='s_hx'>3室1厅1厨1卫</a>　<a class='s_hx'>其它户型</a> ";
	
	echo "</span>";
	/*
	if($count<=3){
		echo "<a class='s_hx'>1室1厅1厨1卫</a>　<a class='s_hx'>2室1厅1厨1卫</a>　<a class='s_hx'>3室1厅1厨1卫</a> ";
	}else{
		echo "<a class='s_hx'>1室1厅1厨1卫</a>　<a class='s_hx'>2室1厅1厨1卫</a>　<a class='s_hx'>3室1厅1厨1卫</a>　";
		echo "<span class='hx_but_gd'>更多.....</span>";
	}
	
	echo "</span>";
	
	
	echo "<span class='hxsq' name='hx'>";
		foreach($b as $k=>$v){
			echo "<a class='s_hx'>$v</a>　";
		}
		echo "<span class='hx_but_sq'>收起</span>";
	echo "</span>";
	*/
}
	



										//按小区搜索显示的函数 
function aname(){
	//引用页面在本页顶部
	$mysql=new Mysql();
	$sql="select aname from fanginfo";
	$arr=$mysql->dql($sql);
	$a=array();
	for($i=0;$i<count($arr);$i++){
		$a[]=$arr[$i][0];
	}
	$b=array_unique($a);
	$bc=count($b);
	if($bc<10){
		
		echo "<a class='s_aname'>不限</a>　  ";
		foreach($b as $k=>$v){
			echo "<a class='s_aname'>$v</a>　";
		}
	}else{
		
		echo "<span class='s_aname_a'>";
		echo "<a class='s_aname'>不限</a>　  ";
		$fc=0;
		foreach($b as $k=>$v){
			$fc++;
			if($fc<10){
				echo "<a class='s_aname'>$v</a>　";
			}	
		}
		echo "<span class='aname_but_gd'>更多.....</span></span>";
		
		echo "<span class='s_aname_b'>";	
		foreach($b as $k=>$v){
			echo "<a class='s_aname'>$v</a>　";
		}
	
		echo "<span class='aname_but_sq'>收起.....</span></span>";
		

	}
	
}
	






function ggzs($sy){
	$mysql=new Mysql();
    $sql="select path from img where name='".$sy."'";
    $arr=$mysql->dql($sql);
    echo $arr[0][0];
}



?>




















