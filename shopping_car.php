<?php
session_start();
header("Content-type:text/html;charset=utf8");
//调用smarty配置文件.
require_once('config.php');
//调用数据库连接文件.
require_once('conn.php');

//判断session变量是否设置，此判断很关键.
if(isset($_SESSION['goodsid']) && isset($_SESSION['goodsnum'])){

$array=explode("@",$_SESSION["goodsid"]);
//var_dump($array); 测试行.
$arraynum=explode("@",$_SESSION["goodsnum"]);
}else{
	$array=array();
	}//if end.
//定义价格变量.
$totalprice=0;
//创建数组信息.
$arrayinfo=array();
//根据array中元素，从数据库提取记录将其存入一个数组中，便于模板提取.
for($i=0;$i<count($array);$i++){
	if($array[$i]!=''){
		//查询语句.
		$sql='select * from tb_commodity where tb_commodity_id='.$array[$i];
		//执行查询.
		$query=mysqli_query($link,$sql);
		//$query=mysqli_query($link,$sql);
		
		//if (!$query) {
		//printf("Error: %s\n", mysqli_error($link));
		//exit();
		//}
		//获取记录.
		$result=mysqli_fetch_array($query);
		//将数量添加到记录结果最后边.
		array_push($result,$arraynum[$i]);
		//var_dump($result);
		//将最终数组压入新的记录数组中.
		array_push($arrayinfo,$result);
		//价格总计.
		$totalprice+=$result["tb_commodity_price"]*$arraynum[$i];
		//$result=mysqli_fetch_array($query);
		//$array=array(); //定义一个数组变量.
		//while($result=mysqli_fetch_array($query,MYSQLI_BOTH)){
		//array_push($array,$result);
		//var_dump($result);
		//echo $array[$i].'<br>';
         }//if end.

}//for end.

 //var_dump(count($arrayinfo));
 //exit;
		if(count($arrayinfo)>0){
		$smarty->assign('isShow','T');
		$smarty->assign('myrow',$arrayinfo);		
		$smarty->assign('totalprice',$totalprice);
	    }else{
		  $smarty->assign('isShow','F');
		  $smarty->assign('totalprice',$totalprice);
		}//if end.
	


//echo 'shopping_car page';
//$smarty->assign('title','成功'); //测试行.
$smarty->display('shopping_car.tpl');

?>