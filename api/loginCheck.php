<?php
include_once("./conn.php");

//接值

$username=$_POST['username'];
$password=$_POST['password1'];

//构造sql语句
$sqlStr="select * from userinfo where username='$username' and password='$password'";

// //执行
$result=mysqli_query($conn,$sqlStr);
// // // echo $result;

$row=mysqli_fetch_assoc($result);
if($row){
    $jsonArray=["isSuccess"=>true,"msg"=>"登录成功"];
    echo json_encode($jsonArray);

    //创建session
    session_start();
    $_SESSION["username"]=$row["username"];
    $_SESSION["userid"]=$row["userid"]; 
}
else{
    $jsonArray=["isSuccess"=>false,"msg"=>"登录失败"];
    echo json_encode($jsonArray);
}
?>