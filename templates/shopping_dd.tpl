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
   <td >
  
  {section name=datas loop=$info}
  
<script src="js/openprint.js"></script>
    <table class="table  table-bordered" >
      <tr>
       <td colspan="2"><div align="center"><img src="images/sy_8.jpg" width="825" height="25"></div></td>
      </tr>
      <tr>
      <td width='150'><h4>订单号：</h4></td>
      <td>{$info[datas].ddnumber}</td>
      </tr>
      <tr>
      <td width='150'><h4>收货人信息：</h4></td>
      <td>{$info[datas].recuser}</td>
      </tr>
      <tr>
      <td width='150'><h4>收货地址：</h4></td>
      <td>{$info[datas].address}</td>
      </tr>
      <tr>
      <td width='150'><h4>手机：</h4></td>
      <td>{$info[datas].mtel}</td>
      </tr>

 
    </table>
    
    <hr />
    <table class="table  table-bordered" >
      
      <tr>
      <td colspan="4"><h3>购物清单：</h3></td>  
      </tr>
      <tr>
      <td>品名</td>
      <td>单价</td>
      <td>数量</td>
      <td>小计</td>      
      </tr>
      {section name=data loop=$myrow}
      <tr>
      <td>{$myrow[data].tb_commodity_name}</td>
      <td>{$myrow[data].tb_commodity_price}</td>
      <td>{$myrow[data].7}</td>
      <td>{$myrow[data].8}</td>      
      </tr>
       {/section}  
      <tr>
      <td>总计：</td>
      <td>{$totalprice}</td>
      <td>邮费：</td>
      <td>{$info[datas].yprice}</td>      
      </tr> 
       <tr>
        <td width="340"></td>
        <td width="75"> <a href="javascript:openprintwindow('{$info[datas].ddnumber}','{$gnum}','p');"><img src="images/sy_12.jpg" width="60" height="25"  style="cursor:hand"/></a></td>
        <td width="90"><a href="javascript:openprintwindow('{$info[datas].ddnumber}','{$gnum}','v');"><img src="images/sy_14.jpg" width="69" height="25"   style="cursor:hand"/></a></td>
        <td width="125"><a href="JavaScript:window.location.href='shopping_tjdd.php?ddno={$info[datas].ddnumber}';"><img src="images/sy_16.jpg" width="70" height="25"  style="cursor:hand"/></a></td>
      </tr>  
    </table>
    <hr />

   {/section}
  </td>
 </tr> 
  
</table>  

</div>
</body>
</html>
