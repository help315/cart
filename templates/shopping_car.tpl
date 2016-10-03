<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css">
<title>购物车测试</title>
</head>

<body class="container">
<div class="col-md-12">
<hr />
 <h2>购物车测试</h2>
<hr />
</div>
<div class="col-md-12">
<table class="table  table-bordered" width="800">
 <tr>
   <td>
   <div align="center"><img src="images/sy_2.jpg" width="1003" height="75"></div>
   </td>
 </tr>
 <tr>
   <td>
   <div align="center"><img src="images/sy_4.jpg" width="825" height="140"></div>
   </td>
 </tr> 
</table>
<table class="table  table-bordered" width="825">
  <tr>
   <td>
   <div align="center"><img src="images/sy_8.jpg" width="825" height="25"></div>
   </td>
  </tr>
 <tr>
   <td >
   <table class="table  table-bordered" width="825">
    <tr>
     <td>品名</td>
     <td>单价</td>
     <td>数量</td>
     <td>小计</td>
     <td>操作</td>
    </tr>
    {if $isShow=="F" }
    <tr>
    <td colspan="5">购物车是空的！</td>
    </tr>
    {else}
    {section name=data loop=$myrow}
    <tr>
    <form name="form{$myrow[data].tb_commodity_id}" method="post" action="change_commodity_counts.php">
     <td>{$myrow[data].tb_commodity_name}</td>
     <td>{$myrow[data].tb_commodity_price}</td>
     <td>
     <input type="text" name="goodsnum" value="{$myrow[data].7}" />
     <input type="hidden" name="id" value="{$myrow[data].tb_commodity_id}" />
     </td>
     <td>{$myrow[data].7*$myrow[data].tb_commodity_price}</td>
     <td><a href="javascript:form{$myrow[data].tb_commodity_id}.submit()">修改数量</a>&nbsp;&nbsp;<a href="delete_commodity.php?id={$myrow[data].tb_commodity_id}">删除此项</a></td>
     </form>
    </tr>
    {/section}
    {/if}
    <tr>
     <td colspan="2"><a href="index.php">继续购物</a></td>
     
     <td><a href="clear_shopping_car.php">清空购物车</a></td>
     <td >总计：&nbsp;&nbsp;{$totalprice}</td>
     <td><a href="shopping_order_form.php"><img src="images/sy_13.jpg" width="60" height="25" border="0"/></a></td>
     
    </tr>
    <tr>
    </tr>
   </table>
  </td>
 </tr> 
</table>  

</div>
</body>
</html>
