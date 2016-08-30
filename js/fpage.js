$(function(){
	$(".fpage a").click(function(){
		$.cookie('pnow',$(this).attr('pnow'));
		//alert($.cookie('pnow'));
	});	
	
});