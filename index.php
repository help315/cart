<?php
//导入smarty核心文件.
require('config.php');
//导入数据连接文件.
require('conn.php');

//定义一个新数组,将每条记录赋值给新数组.
$array=array();
//sql查询语句及变量.
$sql='select * from goods order by id desc';
//执行查询语句.
$query=mysqli_query($link,$sql);

//获得记录集数据.
while($info=mysqli_fetch_array($query,MYSQL_BOTH)){
	array_push($array,$info);
	//var_dump($info); //测试行.
}//while end.

 //将整理好的记录集赋值给模板变量.
  $smarty->assign('myrow',$array);
//调用模板文件.
  $smarty->display('index.html');

?>
