<?php
//开启session.
session_start();
header("Content-type:text/html;charset=utf8");
//导入配置文件.
require_once('config.php');
//获得传来的变量.
$id=$_POST['id'];
$num=$_POST['goodsnum'];
$preg="/^[0-9]*[0-9]$|^[0-9]*[0-9]$/";		//编写正则表达式
//判断num是否为空.
if($num==''){
	echo "<script>alert('数量不能为空！');history.back();</script>";
	exit;
}else if(!preg_match($preg,$num)){
	echo "<script>alert('数量必须是整数！');history.back();</script>";
	exit;	
}//if end.

  //将session变量goodsid、goodsnum转换成数组.
  $arrayid=explode("@",$_SESSION['goodsid']);
  $arraynum=explode("@",$_SESSION['goodsnum']);

  //在arrayid数组中找到$id所在的位置.
  $key=array_search($id,$arrayid);
  //var_dump($key); //测试行.
 // exit; //测试行.
  //将arraynum中相对应的位置的值改成num;
  $arraynum[$key]=$num;
  //将改好的arraynum重新变成数组，赋值给goodsnum.
  $_SESSION['goodsnum']=implode("@",$arraynum);
  //重新跳转到shopping_car.php.
  echo "<script>window.location.href='shopping_car.php'</script>";
 //echo "hello change_commodity_counts.php";测试行.
?>