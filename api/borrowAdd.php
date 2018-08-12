<?php
include_once('./conn.php');

//接值
$borrowType=$_POST["borrowType"];
$borrowAmount=$_POST["borrowAmount"];
$currentRate=$_POST["currentRate"];
$monthes2Return=$_POST["monthes2Return"];
$repayment=$_POST["repayment"];
$minAmount=$_POST["minAmount"];
$maxAmount=$_POST["maxAmount"];
$rewardAmount=$_POST["rewardAmount"];
$disableDays=$_POST["disableDays"];
$borrowTitle=$_POST["borrowTitle"];
$description=$_POST["description"];

//获取用户id111
session_start();
$userid=$_SESSION["userid"];



$sqlStr="insert into borrowInfo(borrowType,borrowAmount,currentRate,monthes2Return,repayment,minAmount,maxAmount,rewardAmount,disableDays,borrowTitle,description,userid) values('$borrowType',$borrowAmount,$currentRate,$monthes2Return,'$repayment',$minAmount,$maxAmount,$rewardAmount,$disableDays,'$borrowTitle','$description',$userid)";

$result=mysqli_query($conn, $sqlStr);

if($result){
    
$jsonArray=["isSuccess"=>true,"msg"=>"借款申请成功!"];
 echo json_encode($jsonArray);
}
else{
    $jsonArray=["isSuccess"=>false,"msg"=>"借款申请失败! 原因:".mysqli_error($conn)];
 echo json_encode($jsonArray);
}


?>