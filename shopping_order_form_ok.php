<?php
//开启session.
session_start();
//导入smarty核心配置文件.
include_once("config.php");
//导入数据库连接文件.
include_once("conn.php");

//判断session变量是否设置，此判断很关键.
if(isset($_SESSION['goodsid']) && isset($_SESSION['goodsnum'])){
$array=explode('@',$_SESSION['goodsid']);  //将goodsid分解成数组.
$arraynum=explode('@',$_SESSION['goodsnum']);//将goodsnum分解成数组.
}else{
	echo "<script>alert('请先购商品！');window.location.href='index.php';</script>";	
}//if end.
$ddnumber=substr(date("YmdHis"),2,8).mt_rand(100000,999999);
//echo date("YmdHis").'<br>'; //测试行.
$yprice='50'; //邮费.
$totalprice=0;

//for循环，得到总价.
for($i=0;$i<count($array);$i++){
	if($array[$i]!=''){
		$sql="select * from tb_commodity where tb_commodity_id='".$array[$i]."'"; //sql语句.
		$query=mysqli_query($link,$sql); //执行查询语句.
		//读取记录数据.
		$result=mysqli_fetch_array($query);
		//echo $result["tb_commodity_name"].'<br>'.$result["tb_commodity_price"]; //测试行.
		$totalprice+=$result["tb_commodity_price"]*$arraynum[$i]; //统计总价.
		//var_dump($totalprice);
		
	}//if end.
	
}//for end.
//将邮费加入物价中.
$totalprice=$totalprice+$yprice;
//插入记录的sql语句.
$sql="insert into tb_commodity_order_form(ddnumber,recuser,address,mtel,spc,slc,yprice,totalprice,createtime) values('".$ddnumber."','".$_POST['recuser']."','".$_POST['address']."','".$_POST['mtel']."','".$_SESSION['goodsid']."','".$_SESSION['goodsnum']."','".$yprice."','".$totalprice."','".date("Y-m-d H:i:s")."')";
$query=mysqli_query($link,$sql);
//var_dump($yprice);
if($query){	
	//echo 'success!!';
	session_unset("goodsid");
	session_unset("goodsnum");
	echo "<script>window.location.href='shopping_dd.php?ddno=".base64_encode($ddnumber)."';</script>";
	
}else{
    echo "<scripty>alert('订单保存失败，请重试！');</script>";
}//if end.
//var_dump($array); //测试行.
//echo 'Hello shopping_order_form_ok.php'; //测试行.
//$smarty->display('shopping_dd.tpl');
?>