$(function(){

	$.get("../../../api/sessionState.php","",function(result){
		
		if (result.isSuccess) {
			
			$("#personame").text(result.username);
			
		} else{
			alert(result.msg);
			location.href="../../login.php";
		}
		
	},'json');
});
