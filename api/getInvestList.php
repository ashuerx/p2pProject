<?php
// 1111
include_once('./conn.php');

$sqlStr="select * from borrowinfo";
echo $sqlStr;

$result=mysqli_querry($conn,$sqlStr);
$dataJson=[];
   


while($row=mysqli_fetch_assoc($result)){
    
   array_push($dataJson,$row);
}

echo json_encode($dataJson);
?>