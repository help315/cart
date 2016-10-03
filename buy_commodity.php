<?php
//初始化session变量.
session_start();
//定义session变量，存储所购商品id.
//session_register("goodsid");
//$_SESSION["string"];
//$_SESSION["goodsid"];
//$_SESSION["goodsnum"];
header("Content-type:text/html;charset=utf8");

//echo 'trans var:'.session_id().'<br>'; //测试行,显示session_id.
if(!isset($_SESSION['goodsid']) && !isset($_SESSION['goodsnum'])){ //判断$_SESSION变量是否为有初值。
   $_SESSION['goodsid']=$_GET['id']."@"; //给$_SESSION_'goodsid'.
   $_SESSION['goodsnum']='1@'; //给$_SESSION_'goodsnum'赋值.
   //echo $_SESSION['goodsid'];
}else{  //若$_SESSION变量不空，则将其赋值给数组.
   $array=explode('@',$_SESSION['goodsid']); //以@为分隔符，将session变量写入数组.
   //判断行，检查即将写入数组和$_GET['id']是否已以数组中.
   if(in_array($_GET['id'],$array)){
	   echo "<script>alert('此商品已购物车中');history.back();</script>";
	   //session_unset();
	   exit;   
   }
   //如果检查购物车中没有此商品，说明第一次添加此商品，需将它记入购物车数组中.
   $_SESSION['goodsid'].=$_GET['id']."@";  //将商品添加到购物车.
   $_SESSION['goodsnum'].='1@'; //更改商品数量.   
	//session_unset(); //释入所有session变量.destroy()是清除所有session变量.
}
echo "<script>window.location.href='shopping_car.php';</script>";
?>