<?php
header("Content-type:text/html;charset=utf8");
//调用smarty配置文件.
require_once('config.php');
//调用数据库连接文件.
require_once('conn.php');

//写查询变量.
$sql='select * from tb_commodity order by tb_commodity_id desc';
//写执行查询语句.
$query=mysqli_query($link,$sql);
//统计行数，也是验证是否记录集成功.
//$rowcon=mysqli_num_rows($query);
//得到记录集
$result=mysqli_fetch_array($query);
//var_dump($rowcon); 测试行.
//记录指针.
mysqli_data_seek($query,0);
//读取记录数据集.
$array=array();
//do{
//	array_push($array,$result); //将记录集加入栈.
//}while($rusult=mysqli_fetch_array($query));
while($result=mysqli_fetch_array($query,MYSQLI_BOTH)){
  array_push($array,$result);
  //var_dump($result);
  echo '<br>';
}

$smarty->assign("myrow",$array);
//$smarty->assign('title','学习Smarty引擎');
//$smarty->display('index.tpl');
$smarty->display('index.tpl');
//var_dump($array);
//mysqli_free_result($query);
//mysqli_close($link);
?>