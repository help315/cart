<?php
header("Content-type:text/html;charset=utf-8");
 $link=mysqli_connect("localhost", "root", "612345") or die('连接失败！！！'.mysqli_errno());
 //测试连接.
 //echo '所连主机信息为：'.mysqli_get_host_info($link).'<br>';
 
 if (mysqli_select_db($link, 'tb_shopping_car')){
 	echo '';
 }else{
 	echo('数据选择失败：'.mysqli_error());
 }
  mysqli_query($link,'set names utf8');
  
  
?>