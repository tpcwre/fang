<head>
<!--
<script src='js/jquery-1.11.1.js'></script>
<script src='js/jqueryui.js'></script>
-->
<script src='js/page_bottom.js'></script>
<style>
	.page_bottom{							/*整体设置*/
		width:950px;
		border:1px solid #a90;
		margin:0 auto;
		padding-top:30px;
		padding-bottom:50px;
	}
	
	.page_bottom_d1{						/*友情链接*/
		text-align:center;
		color:#a90;
		margin-bottom:30px;
	}
	
	.page_bottom_d2{						/*外连图片区*/
		height:50px;
	}
	
		.b_b_gz{							/*图片统一样式*/
			width:88px;
			height:31px;
			float:left;
			margin-left:16px;
		}
	
	
	
	.page_bottom_d3{						/*关于本站，广告服务，联系留言*/
		text-align:center;
		margin-top:10px;
	}
	.page_bottom_d3 a{
		text-decoration:none;
		color:#aaa;
		cursor:pointer;
	}
		.page_bottom_d3_ly p{				/*我要留言样式*/
			margin-top:8px;
		}
		.page_bottom_d3_error{				/*去除错误提示前面的点*/
			list-style:none;
		}
		.page_bottom_d3_ly_lycode{			/*设置验证码输入框的长度*/
			width:80px;
		}
		.page_bottom_d3_ly_p3{				/*设置留言提交按钮的位置*/
			text-align:right;
		}
	
	.page_bottom_d4{						/*本站空间由新浪SAE提供*/
		text-align:center;
		margin-top:30px;
	}
</style>
</head>
<body>
	
<div class="page_bottom">							<!--内容区=》底部域-->
	<div class='page_bottom_d1'>
		=====友情链接=====
	</div>	
	<div class='page_bottom_d2'>
		<a href='http://tieba.baidu.com/f?kw=%C1%F8%BA%D3&fr=ala0' target="_blank"><div class="b_b_1 b_b_gz"><img src='img/logo/01.gif'/></div></a>
		<a href='http://tieba.baidu.com/f?kw=%CD%A8%BB%AF&fr=ala0' target="_blank"><div class="b_b_2 b_b_gz"><img src='img/logo/02.gif'/></div></a>
		<a href='http://liuhe.gqsj.cc/home/' target="_blank"><div class="b_b_3 b_b_gz"><img src='img/logo/03.gif'/></div></a>
		<a href='http://www.lhwzcm.com/kanbao.aspx' target="_blank"><div class="b_b_4 b_b_gz"><img src='img/logo/04.gif'/></div></a>
		<a href='http://www.liuhe.ccoo.cn/' target="_blank"><div class="b_b_5 b_b_gz"><img src='img/logo/05.gif'/></div></a>
		<a href='http://d.weibo.com/?tongji=baiduxinshouye' target="_blank"><div class="b_b_6 b_b_gz"><img src='img/logo/06.gif'/></div></a>
		<a href='http://bbs.tianya.cn/' target="_blank"><div class="b_b_7 b_b_gz"><img src='img/logo/07.gif'/></div></a>
		<a href='http://www.17500.cn/' target="_blank"><div class="b_b_8 b_b_gz"><img src='img/logo/08.gif'/></div></a>
		<a href='http://www.thjj.com.cn/' target="_blank"><div class="b_b_9 b_b_gz"><img src='img/logo/09.gif'/></div></a>
	</div>	
	<div class='page_bottom_d2'>
		<a href='http://tieba.baidu.com/f?kw=%C1%F8%BA%D3&fr=ala0' target="_blank"><div class="b_b_1 b_b_gz"><img src='img/logo/01.gif'/></div></a>
		<a href='http://tieba.baidu.com/f?kw=%CD%A8%BB%AF&fr=ala0' target="_blank"><div class="b_b_2 b_b_gz"><img src='img/logo/02.gif'/></div></a>
		<a href='http://liuhe.gqsj.cc/home/' target="_blank"><div class="b_b_3 b_b_gz"><img src='img/logo/03.gif'/></div></a>
		<a href='http://www.lhwzcm.com/kanbao.aspx' target="_blank"><div class="b_b_4 b_b_gz"><img src='img/logo/04.gif'/></div></a>
		<a href='http://www.liuhe.ccoo.cn/' target="_blank"><div class="b_b_5 b_b_gz"><img src='img/logo/05.gif'/></div></a>
		<a href='http://d.weibo.com/?tongji=baiduxinshouye' target="_blank"><div class="b_b_6 b_b_gz"><img src='img/logo/06.gif'/></div></a>
		<a href='http://bbs.tianya.cn/' target="_blank"><div class="b_b_7 b_b_gz"><img src='img/logo/07.gif'/></div></a>
		<a href='http://www.17500.cn/' target="_blank"><div class="b_b_8 b_b_gz"><img src='img/logo/08.gif'/></div></a>
		<a href='http://www.thjj.com.cn/' target="_blank"><div class="b_b_9 b_b_gz"><img src='img/logo/09.gif'/></div></a>
	</div>	
	
	
	<div class='page_bottom_d3'>
		<span><a>关于本站</a></span>　｜　
	<!--	<span><a>广告服务</a></span>　｜　-->
		<span><a>联系留言</a></span>　｜
        <span><a href='admin/admin.php'>站点管理</a></span>
	</div>
	<div class='page_bottom_d4'>
		本站空间由<a href='https://account.aliyun.com/login/login.htm'>阿里云</a>提供
	</div>
 </div>
	
 
	<form class='page_bottom_d3_ly'>
		<p><textarea name='lxly' rows=5 cols=55 style="resize:none"></textarea></p>
		<p>请输入验证码：<input type="text" name='lycode' class='page_bottom_d3_ly_lycode'/>
		<img src="page_code.php" onclick="this.src='page_code.php?a='+Math.random()"/></p>
		<ol class="page_bottom_d3_error"></ol>
		<p class='page_bottom_d3_ly_p3'><button>提交</button></p>
	</form>
 
 
 
 
	
 
</body>