<?php

	session_start();//开始会话
	//判断登录的用户名是否在session
	if(isset($_SESSION["username"])){
		$result=["isSuccess"=>true,"msg"=>"验证成功","username"=>$_SESSION["username"]];
		echo json_encode($result);
		
	}else{
		$result=["isSuccess"=>false,"msg"=>"验证失败"];
		echo json_encode($result);
		
	}


?>