<?php
session_start(); //开启session变量.
//导入smarty核心配置文件.
require("config.php");
//清空购物车.
$_SESSION["goodsid"]='';
$_SESSION["goodsnum"]='';
//跳转到购物车页.
echo "<script>window.location.href='shopping_car.php';</script>";
 //echo "clear_shopping_car";
?>