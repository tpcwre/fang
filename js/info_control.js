﻿$(function(){
	if($.cookie('user')!='admin'){
		location.href="admin.php";
	}
	$(".delete").hover(function(){
		$(this).css('color','red');
	},function(){
		$(this).css('color','blue');
	}).click(function(){
		$.cookie('delid',$(this).attr('val'));
		location.href="info_control.php?pnow="+$(this).attr('pnow');
	});
	
	$(".exit").css('cursor','pointer').hover(function(){
		$(this).css('color','red');
	},function(){
		$(this).css('color','blue');
	}).click(function(){
		$.removeCookie("user");
		location.href="admin.php";
	});
});