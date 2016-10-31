<?php
  //加载smarty核心文件.
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
?>