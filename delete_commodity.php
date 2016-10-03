<?php
//开启session.
session_start();
//设置页面输出编码,否则中文提示乱码.
header("Content-type:text/html;charset=utf8");
//导入smarty模板配置文件.
require_once("config.php");
//获得要删除商品的id.
$id=$_GET['id'];
//将session变量转换成数组.
$arrayid=explode('@',$_SESSION['goodsid']);
$arraynum=explode('@',$_SESSION['goodsnum']);
//搜索$id所在的在$arrayid中所在的位置.
$key=array_search($id,$arrayid);
//定位后，将goodsid、goodsnum变量相应位置赋空值，即删除.
$arrayid[$key]='';
$arraynum[$key]='';
//将分开的数组重新组合成一个字符串，赋值给session变量.
$_SESSION['goodsid']=implode('@',$arrayid);
$_SESSION['goodsnum']=implode('@',$arraynum);
//重新跳转到shopping_car.php
echo "<script>window.location.href='shopping_car.php'</script>";

//echo "id:".$_GET['id'].'<br>';
//echo "hello delete_commodity.php"; //测试行.
?>