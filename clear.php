<?php
  //开启session.
 session_start();
 //引入smarty配置文件.
 require('config.php');
 //清空购物车,即将SESSION变量赋空值.
 $_SESSION['goodsid']='';
 $_SESSION['goodsnum']='';
 //跳转到购物车页.
 echo "<script>window.location.href='shopping_car.php'</script>";

?>