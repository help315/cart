<?php
//导入smarty核心配置文件.
include_once('config.php');
//导入连接数据库文件.
include_once('conn.php');
//获得传过来的订单编号.
$ddnumber=$_GET['ddno'];
//var_dump($ddnumber);

//定义一个新数组.
$array=array();
//定义一个sql查询.
$sql="select * from tb_commodity_order_form where ddnumber='".$ddnumber."'";
//执行查询.
$query=mysqli_query($link,$sql);
//测试代码段
		if (!$query) {
                printf("Error: %s\n", mysqli_error($link));
                exit();
                }
//获得记录集.
$info=mysqli_fetch_array($query);	
//echo $info['ddnumber'];		//测试行.
//定义一个新总计变量.
$amount=$info['totalprice'];	
//格式化此变量.
$amount=str_replace(",","",number_format($amount,2));
//将记录集给新数组变量.
array_push($array,$info);
//将数组给模板变量.
$smarty->assign('info',$array);
$smarty->assign('amount',$amount);

$smarty->display('shopping_tjdd.tpl');
//echo '<br>'.'Hello shopping_tjdd.php';
?>