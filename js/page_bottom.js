$(function(){
														//===关于我们
	$(".page_bottom_d3 a").eq(0).click(function(){
		alert("本站是免费的公众信息发布与查询平台\n禁止发布传播非法信息！");
	});
	
														//===广告服务
	$(".page_bottom_d3 a").eq(1).click(function(){
		//alert('广告位入驻可在网站留言或致电：13180650791');
	});
	
														//===联系留言
	$(".page_bottom_d3_ly_p3 button").click(function(){
		//$(".page_bottom_d3_ly").submit();
	});
	$(".page_bottom_d3_ly").dialog({
		autoOpen:false,
		title:'我要留言',
		width:495,
		draggable:false,
		resizable:false,
		modal:true,
	}).validate({
		rules:{
			lxly:{
				required:true,
				rangelength:[5,255],
				
			},
			lycode:{
				required:true,
				remote:'page_codeyz.php',
			},
		},
		messages:{
			lxly:{
				required:'内容不得为空',
				rangelength:'输入长度介于5到255个字符',
			},
			lycode:{
				required:'验证码不得为空',
				remote:'验证码不正确',
			},
		},
		errorLabelContainer:'ol.page_bottom_d3_error',
		wrapper:'li',
		errorClass:'error_red',
		submitHandler:function(){
			$(".page_bottom_d3_ly").ajaxSubmit({
				url:'page_lxly.php',
				type:'post',
				beforeSubmit:function(){
					$(".login_loading").dialog('open');
				},
				success:function(response){
					if(response==1){
						$(".page_bottom_d3_ly").dialog('close');
						$(".login_loading").dialog('open').html('数据提交成功');
					}
					setTimeout(function(){
						$(".login_loading").dialog('close').html('数据正在提交中......');
					},1000);
				}
			});
		},
	});
	
	$(".page_bottom_d3_ly_p3 button").button();			//启用留言板上按键UI
	$(".page_bottom_d3 a").eq(1).click(function(){
		$(".page_bottom_d3_ly").dialog('open');
	});
    
    
   
     
     
     
     
     
     
     
});