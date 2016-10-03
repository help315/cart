<?php
  //定义服务器的绝对路径.
 // define('BASE_PATH',$_SERVER['DOCUMENT_ROOT']);
  //定义smart目录的绝对路径.
 // define('SMARTY_PATH','SMT');
  //加载Smart类库文件.
  require ('smarty/Smarty.class.php');
  //实例化一个Smart对象.
  $smarty=new Smarty;
  
  //指定模板文件的存储位置.
  $smarty->template_dir='templates';
  //指定模板编译文件存储位置.
  $smarty->compile_dir='templates_c';
  //指定配置文件存储位置.
  $smarty->config_dir='configs';
  //指定缓存文件存储位置.
  $smarty->cache_dir='cache';
  
  /*定义模板中的定界符
  *默认的是‘{’.
  */
  //有时html文件中包含JS或CSS代码，其中也有‘{’，导致冲突，
  //需要重新定义smarty定界符，再用下面两行.
  //还有一种解决冲突的办法，就是将js或css代码保存成一个文件，通过<link>链接到网页中.
  //$smarty->left_delimiter='<{';
  //$smarty->right_delimiter='}>';
  
  
?>