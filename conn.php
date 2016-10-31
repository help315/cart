<?php
 //数据连接设置.
 $link=mysqli_connect('localhost','root','612345') or die('数据连接失败！');
 //选择要使用的数据库.
 mysqli_select_db($link,'cart') or die('数据库连接失败!');
 
 //echo 'Test!';
 //设置查询结果的字符集
 mysqli_query($link,'SET NAMES utf8 ');
?>