<?php
//导入smarty配置文件.
include_once('config.php');
//导入数据库连接文件.
include_once('conn.php');

//获得传来变量，定义新变量.
$ddnumber=$_GET['ddno'];
//定义新数组.
$array=array();

//sql
$sql="select * from tb_commodity_order_form where ddnumber='".$ddnumber."'";
//执行sql.
$query=mysqli_query($link,$sql);
//if($query){ echo 'success!';} //测试行.
//获得记录集.
$info=mysqli_fetch_array($query);
//将记录集压入数组中.
array_push($array,$info);

//将数组传给模板变量.
$smarty->assign('info',$array);

//判断是否预览.
if($_GET['pv']='p'){
   $pv=1;
}else if($_GET['pv']='v'){
   $pv=2;
}//if end.
//将变量传给模板.
$smarty->assign('pv',$pv);

//将spc(原是SESSINO['goodsid'])分解开
$array=explode('@',$info['spc']);
//将slc(原是SESSINO['goodsnum'])分解开.
$arraynum=explode('@',$info['slc']);

//定义价格变量.
$totalprice=0;
//定义一个空数组.
$arrayinfo=array();
//for代码段，计算总价，每个商品信息,将其记入新数组中.
for($i=0;$i<count($array);$i++){
	if($array[$i]!=''){
		//sql语句.
		$sql="select * from tb_commodity where tb_commodity_id='".$array[$i]."'";
		//执行查询.
		$query=mysqli_query($link,$sql);
		//验证段.
		if (!$query) {
                printf("Error: %s\n", mysqli_error($link));
                exit();
                }
	    //获得记录集.
		$infocart=mysqli_fetch_array($query);
		//获得某一个商品总价格.
		$totalprices=$infocart['tb_commodity_price']*$arraynum[$i];
		//将数量写入记录最后边.
		array_push($infocart,$arraynum[$i]);
		//将此商品总价追加到记录集最后边.
		array_push($infocart,$totalprices);
		//将整理好的$infocart，写入新的数组.
		array_push($arrayinfo,$infocart);
		//计算商品总价.
		$totalprice+=$infocart['tb_commodity_price']*$arraynum[$i];	
		
	}//if end.
}//for end.

//开始往模板传变量.
if(count($infocart)>0){
	$gnum=count($infocart);
	$smarty->assign('isShow','T');
	$smarty->assign('gnum',$gnum);
	$smarty->assign('myrow',$arrayinfo);
	$smarty->assign('totalprice',$totalprice);
}else{
    $smarty->assign('isShow','F');
}//if end.

//$smarty->assign('printwindow.tpl'); 
/**犯了个重要错误，调用模板没有用display**/
$smarty->display("printwindow.html");
//echo 'Hello printwindow.php';
?>