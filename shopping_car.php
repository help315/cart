<?php
  //启动session功能.
  session_start();
  //设置网页字符集.
  header("Content-type:text/html;charset=utf8");
  //导入smarty配置文件.
  require('config.php');
  //导入数据连接文件.
  require('conn.php');
  //判断goodsid的session变量是否设置.
  if(isset($_SESSION['goodsid']) && isset($_SESSION['goodsnum'])){
	  //如果已设置，则分解成数组.
	  $array=explode('@',$_SESSION['goodsid']);
	  //goodsnum的session数组必须同时分解.
	  $arraynum=explode('@',$_SESSION['goodsnum']);
  }else{
	  $array=array();
	  }//if end.

  //定义价格变量	  
  $totalprice=0;
  //创建准备存储记录的数组.
  $arrayinfo=array();
  
  //根据$array中的元素，从表中读取相关记录.
  for($i=0;$i<count($array);$i++){
	  if($array[$i]!=''){
	  //设置sql语句.
	  $sql='select * from goods where id='.$array[$i];
	  //执行查询.
	  $query=mysqli_query($link,$sql);
	  //读取数据.
	  $info=mysqli_fetch_array($query);	  
	  //将arraynum[]数组相对应的值也存入arrayinfo.
	  array_push($info,$arraynum[$i]);
	  //将整理好的$info数组给总数组.
	  array_push($arrayinfo,$info);
	  //统计商品价格.
	  $totalprice+=$info['price']*$arraynum[$i];
	  }//if end.
	  
  }//for end.
  
  //判断$arrayinfo中是否有记录.
  if(count($arrayinfo)>0){
	  $smarty->assign('isShow','T'); //给变量isShow赋值T.
	  $smarty->assign('myrow',$arrayinfo); //将$arrayinfo给myrow赋值.
	  $smarty->assign('totalprice',$totalprice); //赋值给总价变量.
  }else{
      $smarty->assign('isShow','F'); //如果$arrayinfo为0，则给isShow赋值F.
	  $smarty->assign('totalprice',$totalprice); //赋值给总价变量.
  }//if end.
  $smarty->display('shopping_car.html');
?>