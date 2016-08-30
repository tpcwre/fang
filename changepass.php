<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<style>
	
	.changepass{
		width:280px;
		//height:200px;
		border:1px solid #a90;
		margin:100px auto;
	
	}
	.fhsy{						/*返回首页样式 */
		text-align:right;
		margin-right:20px;
	}
	.cp_title{
		color:red;
		text-align:center;
		font:normal bold 25px/36px normal;
	}
	.cp_but{
		text-align:center;
	}
	.cp_error{
		color:red;
		text-align:center;
	}
						/*验证错误的样式*/
	.red{
		color:red;
	}
	.changepass_error{
		text-align:center;
		list-style:none;
	}
</style>
<script src="js/jquery-1.11.1.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/jqueryui.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/changepass.js"></script>
<link type="text/css" rel="stylesheet" href="css/jqueryui.css"/>
<body>
	<div class="fhsy"><a href="index.php">返回首页</a></div>
	<form class='changepass' action="" method='post'>
		<p class='cp_title'>修改密码</p>
		<p>请输入新密码：<input type="password" name="pass" class="pass1"/></p>
		<p>再次输入密码：<input type="password" name="pass2" /></p>
		<p class='cp_but'><button >修改密码</button></p>
		<p class='changepass_error'></p>
	</form>

	
</body>