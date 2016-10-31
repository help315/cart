<?php
  //开启session功能.
  session_start();
  //设置网页字符集.没有此项，当出现中文提示时，会乱码。
  header("Content-type:text/html;charset=utf8");
  //导入smarty的配置文件.
  require('config.php');
  //获得从shopping_car.php传来的变量.
  $id=$_GET['id'];  
  //将goodsid和goodsnum的session变量分解成数组.
  $arrayid=explode('@',$_SESSION['goodsid']);
  $arraynum=explode('@',$_SESSION['goodsnum']);
  
  //在arrayid中搜索到$id在数组中的索引.
  $key=array_search($id,$arrayid);
  
  //将相应索引值赋值为''即空值.
  $arrayid[$key]='';
  $arraynum[$key]='';
  //将新的数组重新变成字符串.
  $_SESSION['goodsid']=implode('@',$arrayid);
  $_SESSION['goodsnum']=implode('@',$arraynum);
  
  //完成以上操作后，重新跳转到购物车页shopping_car.php
  echo "<script>window.location.href='shopping_car.php'</script>";
        
  
?>