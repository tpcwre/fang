<head>
<script src='js/jquery-1.11.1.js'></script>
<script src='js/jqueryui.js'></script>
<script src='js/jquery.validate.js'></script>
<script src='js/jquery.form.js'></script>
<script src='js/jquery.cookie.js'></script>
<script src='js/page_reg_login.js'></script>
<link type="text/css" rel='stylesheet' href='css/jqueryui.css'/>
<style>
	body{

	}
	#user_a, #exit_a, #login, #reg, .login_loading{			/*隐藏用户和退出*/
		display:none;
	}
	.login_code{				/*验证码图片位置*/
		padding-left:75px;
	}
	.reg_code{
		padding-left:93px;
	}
	.error_red{					/*验证错误提示颜色*/
		color:red;
	}
	#login p{
		margin-top:20px;
	}
	#reg p{
		margin-top:20px;
	}
</style>
</head>
<body>																				<!--用户登陆注册退出连接-->

<div class='page_login'>
	<a href="index.php">首页</a>　
	<a href="#" id='login_a'>登陆</a><a href="usersetting.php" id='user_a'>用户</a> | 
	<a href="#" id='reg_a'>注册</a><a href="#" id='exit_a'>退出</a>
	<?php 
		error_reporting(0);
		$admin = $_COOKIE['user'];
		$admin=trim($admin);
		if($admin=='administrator'){
			echo "<a href='admincontrol.php'>站点管理</a>";
		}
	?>
</div>




															<!--用户登陆对话框-->
<form id='login'>
<p>用户名：<input type='text' name='user' class='login_user'/></p>
<p>密　码；<input type='password' name='pass'/></p>
<p>验证码：<input type='text' name='code'/></p>
<p class='login_code'><img src='page_code.php' onclick="this.src='page_code.php?r='+Math.random(1,10000)"/></p>
　　　　<a href="findpass.php">密码忘记了.....</a>
</form>





													<!--用户注册对话框-->
<form id='reg'>
<p>用户名　：<input type='text' name='ruser'/></p>
<p>密　码　；<input type='password' name='rpass' id="page_login_rpass"/></p>
<p>确认密码；<input type='password' name='rpass2'/></p>
<p>验证码　：<input type='text' name='rcode'/></p>
<p class='reg_code'><img src='page_code.php' onclick="this.src='page_code.php?r='+Math.random(1,10000)"/></p>
</form>






												<!--LOADING数据交互-->
<div class="login_loading">
	数据正在提交中......
</div>
</body>
