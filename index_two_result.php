
<!--
<script src='js/jquery-1.11.1.js'></script>
<script src='js/jquery.cookie.js'></script>-->
<script src='js/index_tow_result.js'></script>
<style>
	.index_two_result{					/*页面总框架*/
		//height:300px;
		//border:1px solid;
		position:relative;
		top:-20px;
		margin-bottom:-20px;
	}
	.index_two_result_fram{				/*信息总框架*/
		height:120px;
		border-bottom:1px solid #eee;
		padding:5px;
		margin-top:5px;
	//	background:#efffff;
	}
	.index_two_result_fram_left{		/*信息显示左区*/
		height:120px;
		width:130px;
		//border:1px solid;
		float:left;
		padding-left:20px;
	}
	.index_two_result_fram_center{				/*信息显示中区*/
		height:120px;
		width:370px;
		//border:1px solid;
		float:left;
	}
	.index_two_result_fram_center .d{			/*信息显示中区_内容样式*/
		height:39px;
		//border-bottom:1px solid;
		line-height:39px;
		text-align:center;
	}
	.index_two_result_fram_center .d1{
		color:#a90;
		font:italic bold 20px/59px normal;
	}
	.index_two_result_fram_center .d2{
		color:#89a;
		font:normal normal 15px/43px normal;
	}
	.index_two_result_fram_center .d3{
		color:#666;
		font:normal normal 13px/29px normal;
	}
	

	
	.index_two_result_fram_right{			/*信息显示右区_价格样式*/
		height:120px;
		width:160px;
		//border:1px solid;
		float:left;
	}
	.index_two_result_fram_right .d{
		height:60px;
		text-align:center;
		text-vlign:bottom;
		
	}
	.index_two_result_fram_right .d1{
		font:normal bold 15px/80px normal;
		color:blue;
		//border:1px solid;
	}
	.index_two_result_fram_right .d2{
		font:italic normal 13px/40px normal;
		color:#888;
	}

	
	.index_two_result_fpage{				/*分页*/
		font:normal bold 15px/50px normal;
		//border:1px solid;
		text-align:center;
		color:red;
	}
	.index_two_result_fpage a{
		text-decoration:none;
	}
	
	
	.index_two_result .gqgx_dh .clear{		/*清除浮动*/
		clear:left;
	}
</style>

<div>				
	<?php 
		
		for_tab();

	?>
</div>

<?php
	function for_tab(){
		$_COOKIE['s_price']."<br>";
		
		if(!$_COOKIE['s_price'] || $_COOKIE['s_price']=='不限'){
			$sqlprice="";
		}else if($_COOKIE['s_price']=='1000元/平以下'){
			$sqlprice="and(price < 1000)";
		}else if($_COOKIE['s_price']=='1000-2000元/平'){
			$sqlprice="and(price between 1000 and 2000)";
		}else if($_COOKIE['s_price']=='2000-3000元/平'){
			$sqlprice="and(price between 2000 and 3000)";
		}else if($_COOKIE['s_price']=='3000元/平以上'){
			$sqlprice="and(price > 3000)";
		}
		//echo $sqlprice.'<br>';
		
		$_COOKIE['s_priceall']."<br>";
		if(!$_COOKIE['s_priceall'] || $_COOKIE['s_priceall']=='不限'){
			$sqlpriceall="";
		}else if($_COOKIE['s_priceall']=='10万元以下'){
			$sqlpriceall="and(priceall < 10)";
		}else if($_COOKIE['s_priceall']=='10-20万元'){
			$sqlpriceall="and(priceall between 10 and 20)";
		}else if($_COOKIE['s_priceall']=='20-30万元'){
			$sqlpriceall="and(priceall between 20 and 30)";
		}else if($_COOKIE['s_priceall']=='30万元以上'){
			$sqlpriceall="and(priceall > 30)";
		}
		//echo $sqlpriceall.'<br>';
		
		$_COOKIE['s_mj']."<br>";
		if(!$_COOKIE['s_mj'] || $_COOKIE['s_mj']=='不限'){
			$sqlmj="";
		}else if($_COOKIE['s_mj']=='60平以下'){
			$sqlmj="and(mj < 60)";
		}else if($_COOKIE['s_mj']=='60-80平'){
			$sqlmj="and(mj between 60 and 80)";
		}else if($_COOKIE['s_mj']=='80-100平'){
			$sqlmj="and(mj between 80 and 100)";
		}else if($_COOKIE['s_mj']=='100平以上'){
			$sqlmj="and(mj > 100)";
		}
		//echo $sqlmj.'<br>';
		
		$_COOKIE['s_hx']."<br>";
		if(!$_COOKIE['s_hx'] || $_COOKIE['s_hx']=='不限'){
			$sqlhx="";
		}elseif($_COOKIE['s_hx']=='其它户型'){
			$sqlhx="and(hx!='1室1厅1厨1卫')and(hx!='2室1厅1厨1卫')and(hx!='3室1厅1厨1卫')";
		}else{
			$sqlhx="and(hx='".$_COOKIE['s_hx']."')";
		}
		//echo $sqlhx.'<br>';
		
		$_COOKIE['s_aname']."<br>";
		if(!$_COOKIE['s_aname'] || $_COOKIE['s_aname']=='不限'){
			$sqlaname="";
		}else{
			$sqlaname="and(aname='".$_COOKIE['s_aname']."')";
		}
		//echo $sqlaname.'<br>';
		
		$mysql = new Mysql();
		$pnow=$_COOKIE['pnow'];
		if(!$pnow){
			$pnow=1;
		}
		$pn=($pnow-1)*10;
		
		
		$_COOKIE['s_gqgx']."<br>";
		if(!$_COOKIE['s_gqgx'] || $_COOKIE['s_gqgx']=='不限'){
			$sqlgqgx="";
			
		}else{
			$sqlgqgx="and(gqgx='".$_COOKIE['s_gqgx']."')";	
		}
		//echo $sqlgqgx;
		
	
		
		
		$sql="select * from fanginfo where (lc) $sqlprice $sqlpriceall $sqlmj $sqlhx $sqlaname $sqlgqgx order by time desc limit $pn,10";		//查询数据
		//$sql="select * from fanginfo order by time desc limit $pn,10";		//查询数据
		$arr=$mysql->dql_assoc($sql);
		$countsql="select count(*) from fanginfo where (lc) $sqlprice $sqlpriceall $sqlmj $sqlhx $sqlaname $sqlgqgx";					//查询总条数
		
		
		$count=$mysql->count2($countsql);
		//setCookie('pcount',$count);
		$pnum=ceil($count/10);
		//setCookie('pnum',$pnum);
		
		
		for($i=0;$i<count($arr);$i++){
			tab($arr[$i]['title'],$arr[$i]['gqgx'],$arr[$i]['hx'],$arr[$i]['mj'],$arr[$i]['aname'],$arr[$i]['time'],$arr[$i]['priceall'],$arr[$i]['price'],$arr[$i]['gqgx'],$arr[$i]['priceqg1'],$arr[$i]['priceqg2'],$arr[$i]['mjqg1'],$arr[$i]['mjqg2'],$arr[$i]['priceyz'],$arr[$i]['priceqz1'],$arr[$i]['priceqz2'],$arr[$i]['id']);
		}
		require 'fpage.php';
		fpage($count,$pnum);
		
	
		
	}
	
	
	function tab($title,$gqgx,$hx,$mj,$aname,$time,$priceall,$price,$gqgx,$priceqg1,$priceqg2,$mjqg1,$mjqg2,$priceyz,$priceqz1,$priceqz2,$id){
	
		
		echo "<a href='index_fanginfo.php?infoid=".$id."'>";
			echo "<div class='index_two_result_fram'>";
				echo "<div class='index_two_result_fram_left'>";
					echo "<img src='img/6a.png' width=120 height=120/>";
				echo "</div>";
				echo "<div class='index_two_result_fram_center'>";
					echo "<div class='d d1'>";
						echo '['.$gqgx.']--'.$title;
					echo "</div>";
					echo "<div class='d d2'>";
						if($gqgx=='出售' || $gqgx=='出租'){
							echo $aname." ".$hx.' '.$mj.'平米';		//户型，面积
						}else{
							echo $mjqg1.'-'.$mjqg2.'平米';		//户型，面积
						}
				
					echo "</div>";
					echo "<div class='d d3'>";
						echo "发布时间".$time;			//时间
					echo "</div>";
				echo "</div>";
				echo "<div class='index_two_result_fram_right'>";
					if($gqgx=='出售'){
						echo "<div class='d d1'>";
                        if($priceall=="面议"){
                            echo "售价：".$priceall;	
                        }else{
							echo "售价：".$priceall.'万元';		//总价
                        }
						echo "</div>";
						echo "<div class='d d2'>";
							echo "单价：".$price."元/平";
						echo "</div>";
					}else if($gqgx=='出租'){
						echo "<div class='d d1'>";
							echo "月租：".$priceyz.'元';		//总价
						echo "</div>";
					}else if($gqgx=='求租'){
						echo "<div class='d d1'>";
							echo "月租：".$priceqz1.'-'.$priceqz2.'元';		//总价
						echo "</div>";
					}else if($gqgx=='求购'){
						echo "<div class='d d1'>";
							echo "价格：".$priceqg1.'-'.$priceqg2.'万元';		//总价
						echo "</div>";
					}
				echo "</div>";
			echo "</div>";
		echo "</a>";
	}
	

?>

	
		









