<?php
   //响应头，设置编码方式为utf-8支持中文
   header("Content-Type:text/html;charset=utf-8");
   
   //数据库连接
   $conn=mysqli_connect("localhost", "root", "root", "userinfo", 3306) or die("数据库连接失败!");


?>