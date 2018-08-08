<?php
include_once("./conn.php");

//接值

$username=$_POST['username'];
$password=$_POST['password1'];
$mobile=$_POST['mobile'];
$realname=$_POST['realname'];
$sex=$_POST['sex'];

//构造sql语句
$sqlStr="insert into userinfo(username,password,mobile,realname,sex) value('$username','$password','$mobile','$realname','$sex')";
// echo $sqlStr;
//执行
$result=mysqli_query($conn,$sqlStr);
// echo $result;
if($result){
   $jsonArray=["isSuccess"=>true,"msg"=>"注册成功！"];
   echo json_encode($jsonArray);
}
else{
     //echo "{'isSuccess': false,'msg': '用户注册失败!'}";
     $jsonArray=["isSuccess"=>false,"msg"=>"用户注册失败! 原因:".mysqli_error($conn)];
     echo json_encode($jsonArray);
  }
?>