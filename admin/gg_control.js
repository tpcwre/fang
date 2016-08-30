$(function(){

	$('.ggg').css('background','#ccc');
/*
	$(".ggg").hover(function(){
		if($(this).css('background')=='#fff'){
            alert(1);
			$(this).css('background','#fff');
		}else{
			$(this).css('background','#eee');
		}
	},function(){
		if($(this).css('background')=='#fff'){
			$(this).css('background','#fff');
		}else{
			$(this).css('background','#ccc');
		}
	});
*/
    
    if($.cookie('bgx')){
		$('.xs').css('display','none');
		$('.'+$.cookie('bgx')).css('display','block');
    }
    if($.cookie('bgxx')){
		$('.ggg').css('background','#ccc');
		$('#'+$.cookie('bgxx')).css('background','#fff');
    }else{
		$('#g1').css('background','#fff');
    }
    
	$(".ggg").click(function(){
		$('.ggg').css('background','#ccc');
		$(this).css('background','#fff');
        $.cookie('bgxx',$(this).attr('id'));
        
        
		var xs = $(this).attr('name');
        $.cookie('bgx',xs);
		$('.xs').css('display','none');
		$('.'+xs).css('display','block');
	});
	
	
 
	
});











