<?php  
require_once("config.php");	//����smarty�ļ�
require_once("conn.php");	//�������ݿ�

//ִ�в�ѯ��䣬�����ݿ��ж�ȡ��Ʒ��Ϣ
$sql=mysql_query("select count(*) as total1 from tb_commodity ",$conn);
$info=mysql_fetch_array($sql);

$total1=$info[total1];		//ͳ�����ݿ�����������
if(empty($_GET[pages])==true || is_numeric($_GET[pages])==false){	//�жϱ���pages�Ƿ�Ϊ��
	$page1=1;				//�������Ϊ�գ���ֵΪ1
}else{						//�����Ϊ�գ����ȡ������ֵ
	$page1=intval($_GET[pages]);
}

if($total1==0){				//�ж�������ݿ���û�����ݣ������������Ʒ
	echo "<div align=center>������Ʒ</div>";
}else{ 
	$pagesize1=10;			//����ÿҳ��ʾ10����¼
	if($total1<$pagesize1){	//�ж�������ݿ�������С��ÿҳ��ʾ�ļ�¼��
		$pagecount1=1;		//����pagecount������ֵΪ1
	}else{
		if($total1%$pagesize1==0){
			$pagecount1=intval($total1/$pagesize1);	//���ܵļ�¼������ÿҳ��ʾ�ļ�¼������ȡ���м�ҳ
		}else{
			$pagecount1=intval($total1/$pagesize1)+1;
		} 
	}

//��Ҫ��������ݸ���assignģ�����
$smarty->assign("total1",$total1);			      
$smarty->assign("pagesize1",$pagesize1);	      
$smarty->assign("page1",$page1);			      
$smarty->assign("pagecount1",$pagecount1);	      
}

	
$query=mysql_query("select * from tb_commodity order by tb_commodity_id desc limit ".($page1-1)*$pagesize1.",$pagesize1",$conn );
$myrow=mysql_fetch_array($query);
$array=array();								//����һ��������

do{
   array_push($array,$myrow);				//����ȡ������ֵд�뵽�µ�������
}while($myrow=mysql_fetch_array($query));	//ѭ����ȡ���ݿ�������

$smarty->assign("myrow",$array);			//ͨ��assign����������$array�е�����д�뵽myrow��
//echo 'OKKkk7';

$smarty->display("index.tpl");				//ָ��Ҫ�����ģ��ҳ
?>