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

   {section name=id loop=$info}
    <table class="table  table-bordered" >
      <tr>
       <td colspan="2"><div align="center"><img src="images/sy_8.jpg" width="825" height="25"></div></td>
      </tr>
      <tr>
      <td width='150'><h4>订单号：</h4></td>
      <td><h3>{$info[id].ddnumber}</h3></td>
      </tr>
      <tr>
      <td width='150'><h4>支付金额：</h4></td>
      <td><h3>{$info[id].totalprice}</h3></td>
      </tr>   
      <tr>
      <td colspan="2"><h4>完成支付后，我们就会立即发货！</h4></td>            
      </tr>         
       <tr>
        
        <td >
        <a href="javascript:if(window.confirm('如果取消该订单，则该订单将被删除，您需要重新购买！')==true) window.location.href='deletedd.php?ddno={$info[id].ddnumber}';"><img src="images/sy_17.jpg" width="60" height="25" style="cursor:hand" /></a>
        </td>
        <td ><img src="images/sy_18.jpg" width="70" height="25"  style="cursor:hand"/></td>
      </tr>  
    </table>
   {/section} 
    <hr />
    
    <hr />

  
  </td>
 </tr> 
  
</table>  

</div>
</body>
</html>
