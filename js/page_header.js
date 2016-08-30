$(function(){

	$(".page_header_but").button();						//免费发布按键启动UI
	
	$(".page_header_but").click(function(){
		if($.cookie('user')){
			location.href="fabu.php";
		}else{
			alert("发布信息请先登陆！");
		}
	});

});