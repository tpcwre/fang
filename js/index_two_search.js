$(function(){




					//==========搜索区域==========
					
					
					


	$(".anamesq").css('display','none');		//默认隐藏‘收起’显示区
	$(".hxsq").css('display','none');
	
	
	$(".aname_but_gd").click(function(){			//小区’更多‘按钮样式及事件
		$('.index_two_search .s_aname_a').css('display','none');
		$(".index_two_search .s_aname_b, .aname_but_sq").css('display','inline');
	});
	
	$(".aname_but_sq").click(function(){			//小区‘收起’按钮样式及事件
		$('.index_two_search .s_aname_b').css('display','none');
		$(".index_two_search .s_aname_a").css('display','inline');
	});
	
	
													//户型-收起，更多
	$(".hx_but_gd").click(function(){
		$('.hxgd').css('display','none');
		$(".hxsq").css('display','inline');
	});
	
	$(".hx_but_sq").click(function(){
		$('.hxgd').css('display','inline');
		$(".hxsq").css('display','none');
	});
	
	
	
											//搜索区a 悬停及点击样式
	$(".index_two_search a").hover(function(){
		$(this).css('color','#000');
	},function(e){
			$(this).css('color','#00c');
	}).click(function(e){
		if(e.target==$(".s_gqgx")[2] || e.target==$(".s_gqgx")[3] || e.target==$(".s_gqgx")[4]){
			$.removeCookie('s_price');
			$.removeCookie('s_priceall');
			$.removeCookie('s_mj');
			$.removeCookie('s_hx');
			$.removeCookie('s_aname');
		}
	
		var cookiename = "i"+$(this).attr('class');
		var cookieindex= $(this).index()+1;
		$.cookie(cookiename,$(this).index());
		//alert(cookiename+'--'+cookieindex);
		//alert($.cookie(cookiename));
		cname = $(this).attr('class');
		cval = $(this).text();
		//alert(cname+'--'+cval);
		$.cookie(cname,cval);
		$.cookie('pnow',1);
		location.href="";
		/*
		jqxhr1=$.ajax({
			url:'index_two_search_yxtj.php',	
			type:'get',
			data:{
				'a':111111,
				'pnow':$('.index_two_result_fpage a').attr('pnow'),
			},
		});
		jqxhr1.done(function(response){
			$(".index_two_search_yxtj").html(response);
		});
		*/
	});
	
	
														//a连接点击后背景色样式
	
	
	$(".s_gqgx").click(function(){
		$(".s_gqgx").css('background','#fff');
		$(this).css('background','#ccc');
	});
	$(".s_price").click(function(){
		$(".s_price").css('background','#fff');
		$(this).css('background','#ccc');
	});
	$(".s_priceall").click(function(){
		$(".s_priceall").css('background','#fff');
		$(this).css('background','#ccc');
	});
	$(".s_mj").click(function(){
		$(".s_mj").css('background','#fff');
		$(this).css('background','#ccc');
	});
	$(".s_hx").click(function(){
		$(".s_hx").css('background','#fff');
		$(this).css('background','#ccc');
	});
	$(".s_aname").click(function(){
		$(".s_aname").css('background','#fff');
		$(this).css('background','#ccc');
	});
	
	
	
	
	if($.cookie('is_gqgx')){
		var i1=$.cookie('is_gqgx');
		$(".s_gqgx").eq(i1).css('background','#ccc');
	}
	if($.cookie('is_price')){
		var i1=$.cookie('is_price');
		$(".s_price").eq(i1).css('background','#ccc');
	}
	if($.cookie('is_priceall')){
		var i1=$.cookie('is_priceall');
		$(".s_priceall").eq(i1).css('background','#ccc');
	}
	if($.cookie('is_mj')){
		var i1=$.cookie('is_mj');
		$(".s_mj").eq(i1).css('background','#ccc');
	}
	if($.cookie('is_hx')){
		var i1=$.cookie('is_hx');
		$(".s_hx").eq(i1).css('background','#ccc');
	}
	if($.cookie('is_aname')){
		var i1=$.cookie('is_aname');
		$(".s_aname").eq(i1).css('background','#ccc');
	}
	
	
	
	
	
	
	
	
	
										//控制出租求租等点击后隐藏搜索条件 
	if(!$.cookie('display')){
		var xs = 'inline';
	}else{
		var xs = $.cookie('display');
	}
	//alert(xs);
	$(".dis_play").css('display',xs);

	
	$(".index_two_search_d .s_gqgx").eq(0).click(function(){
		$.cookie('display','inline');
	});
	$(".index_two_search_d .s_gqgx").eq(1).click(function(){
		$.cookie('display','inline');
	});
	$(".index_two_search_d .s_gqgx").eq(2).click(function(){
		$.cookie('display','none');
		$.removeCookie('s_price');
		$.removeCookie('s_priceall');
		$.removeCookie('s_mj');
		$.removeCookie('s_hx');
		$.removeCookie('s_aname');
		$.removeCookie('is_price');
		$.removeCookie('is_priceall');
		$.removeCookie('is_mj');
		$.removeCookie('is_hx');
		$.removeCookie('is_aname');
	});
	$(".index_two_search_d .s_gqgx").eq(3).click(function(){
		$.cookie('display','none');
		$.removeCookie('s_price');
		$.removeCookie('s_priceall');
		$.removeCookie('s_mj');
		$.removeCookie('s_hx');
		$.removeCookie('s_aname');
		$.removeCookie('is_price');
		$.removeCookie('is_priceall');
		$.removeCookie('is_mj');
		$.removeCookie('is_hx');
		$.removeCookie('is_aname');
	});
	$(".index_two_search_d .s_gqgx").eq(4).click(function(){
		$.cookie('display','none');
		$.removeCookie('s_price');
		$.removeCookie('s_priceall');
		$.removeCookie('s_mj');
		$.removeCookie('s_hx');
		$.removeCookie('s_aname');
		$.removeCookie('is_price');
		$.removeCookie('is_priceall');
		$.removeCookie('is_mj');
		$.removeCookie('is_hx');
		$.removeCookie('is_aname');
	});
	
	
	
	
	
	
	
	
	
	
	
	
	
	
						//==========已选条件===========
						
						
						
						
						/*
						
	jqxhr=$.ajax({
		url:'index_two_search_yxtj.php',			
	});
	jqxhr.done(function(response){
		$(".index_two_search_yxtj").html(response);
	});
	
	*/

	
	
	
	
	
	
	
});