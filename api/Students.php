<?php
	//1.引入公共连接
	include_once("./conn.php");
	
	//2.构造sql语句
	$sqlStr="select * from userinfo";
	
	//3.执行sql语句
	$rs=mysqli_query($conn, $sqlStr);
	
	//4.
	 $eduJson=[
     ['name'=>"博士", 'value'=>0],
     ['name'=>"硕士", 'value'=>0],
     ['name'=>"本科", 'value'=>0],
     ['name'=>"大专", 'value'=>0],
     ['name'=>"高中/中专", 'value'=>0],
     
   ];
   
   //5.根据执行的结果返回json给前端
   while($row=mysqli_fetch_assoc($rs)){
	   	if($row["education"]=="博士"){
	   		$eduJson[0]["value"]+=1;
	   }else if($row["education"]=="硕士"){
	   		$eduJson[1]["value"]+=1;
	   }else if($row["education"]=="本科"){
	   		$eduJson[2]["value"]+=1;
	   }else if($row["education"]=="大专"){
	   		$eduJson[3]["value"]+=1;
	   }else if($row["education"]=="高中/中专"){
	   		$eduJson[4]["value"]+=1;
	   }
	   
   }
     //把学历人数为0 的学位删掉
   for($i=count($eduJson)-1;$i>0;$i--){
	   	if($eduJson[$i]["value"]==0){
	   	
		
		array_splice($eduJson,$i,1);
			
	   }
   
   }
   //把二维数组转换为一个对象数组返回给前端
   echo json_encode($eduJson);
?>