<?php
//首先要包含配置文件.
include('config.php');

$title="学习dwt模板";

$smarty->assign('title',$title);

//调用模板.
$smarty->display('home.dwt');
?>