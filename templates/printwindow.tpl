<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css">
<title>购物车测试</title>
<script src="js/win.js"></script>     

</head>


 <object   ID='WebBrowser1'   WIDTH=0   HEIGHT=0   CLASSID='CLSID:8856F961-340A-11D0-A96B-00C04FD705A2'></object>
<body class="container" topmargin="0" leftmargin="0" bottommargin="0" onLoad="{if $pv==1}window.print();{elseif $pv==2} printview();{/if} " >

<div class="col-md-12">
<hr />
 <h2>购物车测试</h2>
<hr />
</div>
<div class="col-md-12">

<table class="table  table-bordered" width="825">
 <tr>
   <td >
  
  {section name=datas loop=$info}
  
    <!--startprint-->
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
  <!--endprint-->  
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
      
    </table>
    <hr />

   {/section}
  </td>
 </tr> 
  
</table>  

</div>
</body>
</html>
