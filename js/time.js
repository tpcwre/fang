$(function(){

	time("now_time");
function time(id){
   setInterval(function dt(){
	var dt = new Date();
	var str="";
	switch(dt.getDay()){
		case 0:
			str="日";
			break;
		case 1:
			str="一";
			break;
		case 2:
			str="二";
			break;
		case 3:
			str="三";
			break;
		case 4:
			str="四";
			break;
		case 5:
			str="五";
			break;
		case 6:
			str="六";
			break;
	}
	var hours=dt.getHours();
	var minutes=dt.getMinutes();
	var seconds=dt.getSeconds();	
	if(hours < 10){
		hours="0"+hours;
	}
	if(minutes <10){
		minutes="0"+minutes;
	}
	if(seconds <10){
		seconds="0"+seconds;
	}


	var times = dt.getFullYear()+"年"+(dt.getMonth()+1)+"月"+dt.getDate()+"日&nbsp;星期"+str+"&nbsp"+hours+":"+minutes+":"+seconds;
	document.getElementById(id).innerHTML=times;
   },1000);

}




});