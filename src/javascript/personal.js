$(function(){
	
	$("#Message").tooltip();
	
	$("#toggleMenu").on("click",function(){	
		
		$("#person").toggleClass("active")
	});
	
	
	$(".aaa").on("click",function(){
		if($(this).siblings("ul").css("display")=='block'){
			
			$(this).siblings("ul").addClass("none");
		}else{
			
			$(this).siblings("ul").removeClass("none").addClass("in")
		}		
	});
	
	
//		 var distanceX=endX-startX;
//		
//		
//		if(distanceX>=50){
//			$("#toggleMenu").trigger("click");
//		}else if(distanceX<=-50){
//			$("#toggleMenu").trigger("click");
//		}
	
		
	})


 