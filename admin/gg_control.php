<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<script src='../js/jquery-1.11.1.js'></script>
<script src='../js/jqueryui.js'></script>
<script src='../js/jquery.validate.js'></script>
<script src='../js/jquery.form.js'></script>
<script src='../js/jquery.cookie.js'></script>
<script src='gg_control.js'></script>
<style>
	.all{
		width:900px;
		height:550px;
		border:1px solid #a90;
		margin:0 auto;
	}
	
	.title{			/*广告管理*/
		font:normal bold 50px/100px normal;
		color:red;
		text-align:center;
	}
	.gg{
        width:638px;
		font:normal bold 15px/30px normal;
        margin:0 auto;
		
	}
	.gg div{
		float:left;
		border:1px solid;
		margin-top:20px;
		padding:0px 5px;
		background:#ccc;
        cursor:pointer;
	}

	.clear{
		clear:both;
	}
	
	.xs{
		border:1px solid #a90;
		width:800px;
		height:310px;
		margin:30px auto;
		display:none;
		text-indent:200px;
		padding-top:20px;
	}

	.xs_1{
		display:block;
	}
    .back{
        text-align:right;
        margin-top:5px;
        margin-right:10px;
    }
</style>
<body>
	<div class="all">
        <div class='back'><a href='admin_c.php'>返回</a></div>
		<div class='title'>广告管理</div>
		
		<div class='gg'>			<!--首页广告-->
			<div class='gg_1 ggg' name='xs_1' id='g1'>首页页面广告</div>
			<div class='gg_2 ggg' name='xs_2' id='g2'>用户设置页面广告</div>
			<div class='gg_3 ggg' name='xs_3' id='g3'>信息发布页面广告</div>
			<div class='gg_4 ggg' name='xs_4' id='g4'>详细信息页面广告</div>
			<div class='gg_5 ggg' name='xs_5' id='g5'>首页长幅广告</div>
		</div>
		
		<div class='clear'></div>
											<!--首页广告-->
		<div class='xs_1 xs'>
			<form action='gg_control2.php' method='post' enctype='multipart/form-data'/>
				<p>首页广告位置一：<input type='file' name='xs_1_1' />
                    <input type='submit' value='提交'/></p>
			</form>
        	<form action='gg_control2.php' method='post' enctype='multipart/form-data' />
				<p>首页广告位置二：<input type='file' name='xs_1_2' />
                    <input type='submit' value='提交' /></p>
			</form>
    		<form action='gg_control2.php' method='post' enctype='multipart/form-data' />
				<p>首页广告位置三：<input type='file' name='xs_1_3' />
                    <input type='submit' value='提交'/></p>
			</form>
			<form action='gg_control2.php' method='post' enctype='multipart/form-data' />
				<p>首页广告位置四：<input type='file' name='xs_1_4' />
                    <input type='submit' value='提交'/></p>
			</form>
			<form action='gg_control2.php' method='post' enctype='multipart/form-data' />
				<p>首页广告位置五：<input type='file' name='xs_1_5' />
                    <input type='submit' value='提交'/></p>
			</form>
			<form action='gg_control2.php' method='post' enctype='multipart/form-data' />
				<p>首页广告位置六：<input type='file' name='xs_1_6' />
                    <input type='submit' value='提交'/></p>
			</form>
		</div>							<!--用户设置页面广告-->
		<div class='xs_2 xs'>
			<form action='gg_control2.php' method='post' enctype='multipart/form-data' />
				<p>用户设置页面广告位置一：<input type='file' name='xs_2_1' />
                    <input type='submit' value='提交'/></p>
			</form>
			<form action='gg_control2.php' method='post' enctype='multipart/form-data' />
				<p>用户设置页面广告位置二：<input type='file' name='xs_2_2' />
                    <input type='submit' value='提交'/></p>
			</form>
		</div>							<!--发布页面广告-->
		<div class='xs_3 xs'>
			<form action='gg_control2.php' method='post' enctype='multipart/form-data' />
				<p>发布页面广告位置一：<input type='file' name='xs_3_1' />
                    <input type='submit' value='提交'/></p>
			</form>
			<form action='gg_control2.php' method='post' enctype='multipart/form-data' />
				<p>发布页面广告位置二：<input type='file' name='xs_3_2' />
                    <input type='submit' value='提交'/></p>
			</form>
		</div>							<!--详细信息页面广告-->
		<div class='xs_4 xs'>
			<form action='gg_control2.php' method='post' enctype='multipart/form-data' />
				<p>详细信息页面广告位置一：<input type='file' name='xs_4_1' />
                    <input type='submit' value='提交'/></p>
			</form>
			<form action='gg_control2.php' method='post' enctype='multipart/form-data' />
				<p>详细信息页面广告位置二：<input type='file' name='xs_4_2' />
                    <input type='submit' value='提交'/></p>
			</form>
			<form action='gg_control2.php' method='post' enctype='multipart/form-data' />
				<p>详细信息页面广告位置三：<input type='file' name='xs_4_3' />
                    <input type='submit' value='提交'/></p>
			</form>
		</div>							<!--首页长幅广告-->
		<div class='xs_5 xs'>
			<form action='gg_control2.php' method='post' enctype='multipart/form-data' />
				<p>详细信息页面广告位置一：<input type='file' name='xs_5_1' />
                    <input type='submit' value='提交'/></p>
			</form>
			<form action='gg_control2.php' method='post' enctype='multipart/form-data' />
				<p>详细信息页面广告位置二：<input type='file' name='xs_5_2' />
                    <input type='submit' value='提交'/></p>
			</form>
			<form action='gg_control2.php' method='post' enctype='multipart/form-data' />
				<p>详细信息页面广告位置三：<input type='file' name='xs_5_3' />
                    <input type='submit' value='提交'/></p>
			</form>
		</div>
	</div>
</body>






























