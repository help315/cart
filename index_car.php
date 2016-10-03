<?php  
require_once("config.php");	//调用smarty文件
require_once("conn.php");	//连接数据库

//执行查询语句，从数据库中读取商品信息
$sql=mysql_query("select count(*) as total1 from tb_commodity ",$conn);
$info=mysql_fetch_array($sql);

$total1=$info[total1];		//统计数据库中数据总数
if(empty($_GET[pages])==true || is_numeric($_GET[pages])==false){	//判断变量pages是否为空
	$page1=1;				//如果变量为空，则赋值为1
}else{						//如果不为空，则获取变量的值
	$page1=intval($_GET[pages]);
}

if($total1==0){				//判断如果数据库中没有数据，则输出暂无商品
	echo "<div align=center>暂无商品</div>";
}else{ 
	$pagesize1=10;			//定义每页显示10条记录
	if($total1<$pagesize1){	//判断如果数据库中数据小于每页显示的记录数
		$pagecount1=1;		//则定义pagecount变量的值为1
	}else{
		if($total1%$pagesize1==0){
			$pagecount1=intval($total1/$pagesize1);	//用总的记录数除以每页显示的记录数，获取共有几页
		}else{
			$pagecount1=intval($total1/$pagesize1)+1;
		} 
	}

//将要输出的数据赋给assign模板变量
$smarty->assign("total1",$total1);			      
$smarty->assign("pagesize1",$pagesize1);	      
$smarty->assign("page1",$page1);			      
$smarty->assign("pagecount1",$pagecount1);	      
}

	
$query=mysql_query("select * from tb_commodity order by tb_commodity_id desc limit ".($page1-1)*$pagesize1.",$pagesize1",$conn );
$myrow=mysql_fetch_array($query);
$array=array();								//定义一个空数组

do{
   array_push($array,$myrow);				//将获取的数组值写入到新的数组中
}while($myrow=mysql_fetch_array($query));	//循环读取数据库中数据

$smarty->assign("myrow",$array);			//通过assign方法将数组$array中的数据写入到myrow中
//echo 'OKKkk7';

$smarty->display("index.tpl");				//指定要输出的模板页
?>