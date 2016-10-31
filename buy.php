<?php
//启用SESSION功能.
 session_start();
 //设置网页字符集，否则，提示时会出现乱码.
 header("Content-type:text/html;charset=utf8");
 //判断是否有goodsid和goodsnum的SESSION记录.
 if(!isset($_SESSION['goodsid']) && !isset($_SESSION['goodsnum'])){
	 //给goodsid和goodsnum的SESSION变量赋值.
	 $_SESSION['goodsid']=$_GET['id'].'@';
	 $_SESSION['goodsnum']='1'.'@';
 }else{
	 //将SESSION['goodsid']变量分割开，这样便于后边判断.
	 $array=explode('@',$_SESSION['goodsid']);
	 //判断新传来的商品id是否已在goodsid中.
	 if(in_array($_GET['id'],$array)){
		 //如果存在，则出现提示.
		 echo "<script>alert('此商品已在购物车里!');history.back();</script>";
		 //退出程序，即下边代码不再执行.
		 exit;
	 }//if end.
	 //如果检测goodsid的SESSION数组变量中没有此商品id，则将此商品id赋值给SESSION数组.
	 //注意，此时赋值与上边稍有不同，看等式.".="用此表达式，意思将新id添加到原变量后边.
	 $_SESSION['goodsid'].=$_GET['id'].'@';
	 $_SESSION['goodsnum'].='1'.'@';
 }//if end.
 //var_dump($_SESSION['goodsid']);
  //最后，将跳转到购物车页。
  echo "<script>window.location.href='shopping_car.php';</script>";
?>