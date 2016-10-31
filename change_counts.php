<?php
  //开启session功能.
  session_start();
  //设置网页字符集.没有此项，当出现中文提示时，会乱码。
  header("Content-type:text/html;charset=utf8");
  //导入smarty的配置文件.
  require('config.php');
  //获得从shopping_car.php传来的变量.
  $id=$_POST['id'];
  $num=$_POST['goodsnum'];
  
  //编写判断是否为整数的正则表达式.
  $preg="/^[0-9]*[0-9]$|^[0-9]*[0-9]$/";
  //判断num变量是否为空或非整数.
  if($num==''){
	  echo "<script>alert('数量不能为空！');history.back();</script>";
	  exit;
  }else if(!preg_match($preg,$num)){
	  echo "<script>alert('数量必须是整数！');history.back();</script>";
	  exit;	  
  }//if end.

  //将goodsid和goodsnum的session变量分解成数组.
  $arrayid=explode('@',$_SESSION['goodsid']);
  $arraynum=explode('@',$_SESSION['goodsnum']);
  
  //在arrayid中搜索到$id在数组中的索引.
  $key=array_search($id,$arrayid);
  //根据$key值，找到$arraynum数组中相同位置，然后改变值。
  $arraynum[$key]=$num;
  //将修改后的arraynum重新变成session变量.
  $_SESSION['goodsnum']=implode('@',$arraynum);
  
  //重新跳转到购物车页.
  echo "<script>window.location.href='shopping_car.php';</script>";
  
  
  echo 'Hello change_counts.php';
?>