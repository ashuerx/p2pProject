<?php
include_once('./conn.php');
session_start();
if(isset($_SESSION["username"])){
    $result=["isSuccess"=>true,"msg"=>"验证登录成功！","username"=>$_SESSION["username"]];
    echo json_encode($result);
}
else{
$result=["isSuccess"=>false,"msg"=>"验证登录失败！"];
echo json_encode($result);
}
?>