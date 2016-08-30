<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
require 'mysqltools.php';
?>

<head>

<script src='js/jquery-1.11.1.js'></script>
<script src='js/jqueryui.js'></script>
<script src='js/jquery.validate.js'></script>
<script src='js/jquery.form.js'></script>
<script src='js/jquery.cookie.js'></script>
<script src="js/fabu.js"></script>
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
	.fabu_one{							/*第一横排区*/
		height:140px;
		margin-top:5px;
	}
		.page_header{
			position:relative;
			top:-20px;
		}
	
	
	
	.fabu_two{							/*第二横排区*/
		border:1px solid #a90;
		margin-top:5px;
		padding:0;
		width:950px;
	}
		.fabu_two_left{					/*二横左区-发布信息*/
			float:left;
			width:700px;
			border-right:1px solid #a90;
		}
	
		.fabu_form p{					/*设置表单总体文字缩进*/
			text-indent:130px;
			margin-top:10px;
		}
		.fabu_form_1{
			font:italic bold 30px normal;
		}
		.fabu_form_2 input{
			width:300px;
		}
		.fabu_form_title{
			width:300px;
		}
		.fabu_form_s1{						/*设置数字型文本域长度*/
			width:50px;
		}
		.fabu_form_jj1{						/*简介位置*/
			position:relative;
			top:-107px;
		}
		
		.fabu_sub{
			width:100px;
			height:35px;
			font:normal bold 20px normal;
			margin-bottom:20px;
		}
		
		.error_red{
			color:red;
		}
		
		
		.fabu_two_right{				/*二横右区-广告*/
			float:right;
			width:240px;
			height:500px;
			//border-left:1px solid #a90;
		}
		.fabu_two_clear{
			clear:both;
		}
		
		
		.result-gg_gg .fgg{
			height:236px;
			width:210px;
			border:1px solid #a90;
			margin:5px auto;
			padding:5px;
			padding-bottom:2px;
			background:#eff;
		}
		.result-gg_gg .fgg p{
			margin-top:2px;
			text-align:center;
			font:normal normal 12px/15px normal;
		}
		
		
		
	.fabu_three{							/*第三横排区*/
	

	}
		.page_bottom{						/*设置引用底部页面的位置*/
			position:relative;
			top:-12px;
		}
</style>
</head>
<body>
	<div class="fabu_one"><?php require "fabu_one.php"; ?></div>


	<div class="fabu_two">	
		<div class="fabu_two_left">								<!--二横左区，发布信息-->
			<form class='fabu_form'>
				<p class="fabu_form_1">基本信息：</p>
				<p>供求关系：
					<label class='gqgx_cs'><input type="radio" name="gqgx" value='出售' />出售　</label>
					<label class='gqgx_cz'><input type="radio" name="gqgx" value='出租' />出租　</label>
					<label class='gqgx_qg'><input type="radio" name="gqgx" value='求购' />求购　</label>
					<label class='gqgx_qz'><input type="radio" name="gqgx" value='求租' />求租</label>
				</p>
				<p class='f_title'>标　题：<input type="text" name="title" class='fabu_form_title'/></p>
				<p>户　型：<input type="text" name="hx1" class="fabu_form_s1"/>室
					<input type="text" name="hx2" class="fabu_form_s1"/>厅
					<input type="text" name="hx3" class="fabu_form_s1"/>厨
					<input type="text" name="hx4" class="fabu_form_s1"/>卫
				</p>
				<p class='f_mj'>面　积：<input type="text" name="mj" class='fabu_form_s1'/>㎡</p>
											<!--求购面积1，2-->
				<p class='f_mjqg'>面　积：<input type="text" name="mjqg1" class='fabu_form_s1'/>-<input type="text" name="mjqg2" class='fabu_form_s1'/>㎡</p>
				
													<!--出售总价-->
				<p class='f_priceall'>价　格：<input type="text" name="priceall" class='fabu_form_s1'/>万元</p>
													<!--出租-月租-->
				<p class='f_priceyz'>月　租：<input type="text" name="priceyz" class='fabu_form_s1'/>元</p>
													<!--求租-元-->
				<p class='f_priceqz'>月　租：<input type="text" name="priceqz1" class='fabu_form_s1'/>-<input type="text" name="priceqz2" class='fabu_form_s1'/>元</p>
													<!--求租，求购价格-万元-->
				<p class='f_priceqg'>价　格：<input type="text" name="priceqg1" class='fabu_form_s1'/>-<input type="text" name="priceqg2" class='fabu_form_s1'/>万元</p>
				<p class="f_lc">楼　层：<input type="text" name="lc1" class='fabu_form_s1'/>层，共
							<input type='text' name='lc2' class='fabu_form_s1'/>层
				</p>
				<p class="f_position">位　置：<input type="text" name="position"/></p>
				<p class="f_aname">小　区：<input type="text" name="aname"/></p>
				<p>电　话：<input type="text" name="phone"/></p>
				<p>联系人：<input type="text" name="lxr"/></p>
				<p><span  class='fabu_form_jj1'>简　介：</span><textarea rows=8 cols=40 style="resize:none" name='finfo'></textarea></p>
				<p class="fabu_error"></p>
				<p><input type='submit' class='fabu_sub' value='提交'/></p>
			</form>
		</div>
		<div class="fabu_two_right">
			<div class="result-gg_gg">
				<div class='fgg gg_1'>
                    <img src="<?PHP ggzs('fabu_1'); ?>" height=230 width=210 />
				</div>
				<div class='fgg gg_1'>
                    <img src="<?PHP ggzs('fabu_2'); ?>" height=230 width=210 />
				</div>
			</div>
		</div>
		<div class="fabu_two_clear"></div>   <!--清除横二浮动-->
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


