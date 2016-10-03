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
<table class="table  table-bordered" width="800">
 <tr>
   <td >
   <div align="center">
   {section name=data loop=$myrow}
  <table  width="185" border="1" style="float:left;margin-left:10px;">
  <tr >
   <td colspan="2">图片</td>
   
  </tr>
  <tr>
   <td>商品：</td>
   <td>{$myrow[data].tb_commodity_name}</td>
  </tr>
  <tr>
   <td>价格：</td>
   <td>{$myrow[data].tb_commodity_price}</td>
  </tr>
  <tr>
   <td><a href="buy_commodity.php?id={$myrow[data].tb_commodity_id}">购买</a></td>
   <td><a href="shopping_car.php">查看购物车</a></td>
  </tr>
  </table>
  
   {/section} 
  </div>
  </td>
 </tr> 
</table>  

</div>
</body>
</html>
