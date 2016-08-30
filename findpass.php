<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<meta http-equiv="content-type" content="text/html;	charset=utf8" />
<style>
	.findpass{
		width:230px;
		height:300px;
		//border:1px solid #a90;
		margin:100px auto;
	}
	.findpass_title{
		color:#a90;
		font:normal bold 25px/50px normal;
		text-align:center;
	}
	#findpass_form p{
		//text-indent:80px;
	}
	.findpass_form_but{
		padding-left:80px;
	}
	.findpass_error{
		text-align:center;
		color:red;
		font-size:20px;
	}
	.error_red:{
		color:red;
	}
	.fhsy{						/*返回首页样式 */
		text-align:right;
		margin-right:20px;
	}
	
	

</style>
<script src="js/jquery-1.11.1.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/jqueryui.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/findpass.js"></script>
<link type="text/css" rel="stylesheet" href="css/jqueryui.css"/>
<body>
	<div class="fhsy"><a href="index.php">返回首页</a></div>
	<div class="findpass">
		<div class='findpass_title'>找回密码</div>
		
			<form id="findpass_form" action="findpass_control.php" method="post">
				<p>账　号：<input type="text" name="username"/></p>
				<p>安全码：<input type="password" name='safe'/></p>
				<p class="findpass_form_but"><button>提交</button></p>
			</form>			
			<p class="findpass_error"></p>
	</div>

</body>
