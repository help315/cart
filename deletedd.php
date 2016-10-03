<?php
//导入连接数据库文件.
include_once('conn.php');
//得到传来的订单号.
$ddnumber=$_GET['ddno'];

//sql查询.
$sql="delete from tb_commodity_order_form where ddnumber='".$ddnumber."'";
//执行查询.
$query=mysqli_query($link,$sql);
//判断.
if($query){
	echo "<script>window.location.href='index.php';</script>";
}else{
	echo "<script>alert('取消订单失败，请重试');history.back();</script>";
}//if end.
//echo 'Hello deletedd.php';
//echo $_GET['ddno'];
?>