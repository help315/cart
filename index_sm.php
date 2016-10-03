<?php
//首先要包含配置文件.
include('config.php');

//给模板中要用到的变量赋值 .
$smarty->assign('title','学习Smarty引擎');
$smarty->assign('content','SMARTY入门教程！');
//练习一维数组.
$smarty->assign("name", array("张三", "李四", "王五", "大强"));
//练习二维数组.
$items_list = array(
     array('no' => 2456, 'label' => 'Salad'),
     array('no' => 4889, 'label' => 'Cream')
);
$smarty->assign('items', $items_list);

$data = array(
          array('name' => '张三', 'home' => '555-555-5555',
                'cell' => '666-555-5555', 'email' => 'john@myexample.com'),
          array('name' => '李四', 'home' => '777-555-5555',
                'cell' => '888-555-5555', 'email' => 'jack@myexample.com'),
          array('name' => '王五', 'home' => '000-555-5555',
                'cell' => '123456', 'email' => 'jane@myexample.com')
        );
$smarty->assign('contacts',$data);

//调用模板.
$smarty->display('index.html');
?>