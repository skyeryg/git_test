window.onload = function(){
	var curIndex = 0;
	function autoPlay(){
		if(curIndex < $(".imgList li").length-1){
			curIndex++;
		}else{
			curIndex=0;
		}
		changeTo(curIndex);
	}

	var autoChange = setInterval(autoPlay, 3500);

	$(".banner").mouseover(function(){
		clearInterval(autoChange);
	});
	$(".banner").mouseout(function(){
		autoChange = setInterval(autoPlay, 3500);
	});

	function changeTo(num){
		$(".imgList").find("li").removeClass("current").hide().eq(num).fadeIn(500).addClass("current");
	}
}