<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<link type="text/css" rel='stylesheet' href="../css/jqueryui.css">
<script src='../js/jquery-1.11.1.js'></script>
<script src='../js/jqueryui.js'></script>
<script src='../js/jquery.validate.js'></script>
<script src='../js/jquery.form.js'></script>
<script src='../js/jquery.cookie.js'></script>
<script src='../js/admin_c.js'></script>
<style>
	#all{
		width:950px;
		//height:560px;
		border:1px solid #a90;
		margin:0 auto;
	}
	.title{
		text-align:center;
		font:italic bold 50px/100px normal;
		color:red;
	}
	.left, .right{
		border:1px solid #a90;
		width:49%;
		height:50px;
		float:left;
		text-align:center;
		font:normal bold 35px/50px normal;
	}
	.admin_gl{
		margin-top:100px;
	}
	.right{
		float:right;
	}
	.clear{
		clear:both;
	}
	.exit{
		text-align:center;
		color:blue;
		font-size:20px;
		margin:100px auto;
		cursor:pointer;
	}

</style>
<body>
	<div id="all">
		<div class='title'>搜房网后台管理</div>
		<div class="admin_gl">
			<div class="left"><a href='info_control.php'>信息管理</a></div>
			<div class="right"><a href='user_control.php'>用户管理</a></div>
			<div class='clear'></div>
		</div>
		<div class="admin_gl">
			<div class="left"><a href='ly_control.php'>留言管理</a></div>
			<div class="right"><a href='gg_control.php'>广告管理</a></div>
			<div class='clear'></div>
		</div>
		<div class='exit'>退出管理</div>
	</div>
</body>
