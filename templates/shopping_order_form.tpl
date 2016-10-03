<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css">
<title>购物车测试</title>
</head>
<script language="javascript">

   
function checkregtel(regtel){
	var str=regtel;
	var Expression=/^13(\d{9})$|^15(\d{9})$/; 
	var objExp=new RegExp(Expression);
	if(objExp.test(str)==true){
		return true;
	}else{
		return false;
	}
}

<!--验证手机号码js函数-->   
 function validateForm2(form)
{
		if(form.mtel.value==""){
	   		chknew_mtel.innerHTML="请输入电话号码！";
	   		form.mtel.style.backgroundColor="#FF0000";
	   		return false;
   	 	}else if(!checkregtel(form.mtel.value)){
	   		chknew_mtel.innerHTML="电话号码的格式不正确！";
	   		form.mtel.style.backgroundColor="#cccccc";
	   		return false;
   	 	}else if(isNaN(form.mtel.value)){
   	   		chknew_mtel.innerHTML="电话号由数字组成！";
	   		form.mtel.style.backgroundColor="#cccccc";
	   		return false;
   	 	}else{	
   	   		chknew_mtel.innerHTML="";
	   		form.mtel.style.backgroundColor="#FFFFFF";
   	 	}
}
   
function validateForm()
{
var x=form_reg.recuser.value;
var y=form_reg.mtel.value;
if ((x==null || x=="") || (y==null || y==""))
  {
  alert("姓名或手机号，不能为空！");
  return false;
  }
}

function validateForm5()
{
	
var x=form_regm.fnamem.value;
if (x==null || x=="")
  {
  alert("不能为空 Form5，必须输入字符！");
  return false;
  }
}

function checkPhone(form){ 
    var phone=form.mtel.value;
	var Expression=/^13(\d{9})$|^15(\d{9})$/; 
	var objExp=new RegExp(Expression);
    if(objExp.test(phone)){ 
	  alert("手机号码正确！");  
        return false; 
	}else{
        alert("手机号码有误，请重填");  
        return false; 
    } 
}
</script>

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
   <!---->
   <form method="post" name="form_reg" action="shopping_order_form_ok.php" onSubmit="return validateForm()">
    <table class="table  table-bordered" >
      <tr>
       <td colspan="2"><div align="center"><img src="images/sy_8.jpg" width="825" height="25"></div></td>
      </tr>
      <tr>
      <td><h4>收货人信息</h4></td>
      <td>*&nbsp;请务必正确仔细填写以下项目</td>
      </tr>
      <tr>
      <td width="150">收货人：</td>
      <td><input type="text" name="recuser" size="20"/></td>
      </tr>
      <tr>
      <td width="150">收货地址：</td>
      <td><input type="text" name="address" size="60" /></td>
      </tr>   

      <tr>
      <td width="150">手机号：</td>
      <td><input type="text" name="mtel" size="20" id="mtel" onBlur="validateForm2(form_reg)"/><div id="chknew_mtel" style="color:#FF0000"></div></td>
      </tr> 
      <tr>

      <tr>
      <td></td>
      <td>

    </td>
      </tr>
    </table>
    <hr />
    <table class="table  table-bordered" >
      
      <tr>
      <td ><h3>邮寄方式：</h3></td>
      
      </tr>
      <tr>
      <td width="150">
      <input type="radio" name="shfs" value="1" checked="checked"/>普通邮寄<br><br>
      <input type="radio" name="shfs" value="2" />EMS快递
      </td>
      
      </tr>
         
         
    </table>
    <hr />
    <table class="table  table-bordered" >
      
      <tr>
      <td ><h3>生成订单</h3></td>     

      <td >
      
      <button type="submit" value="Submit"><img src="images/sy_15.jpg" width="60" height="25" /></button>&nbsp;&nbsp;
      <button type="reset" value="Reset"><img src="images/sy_17.jpg" width="60" height="25" /></button>
      
      </td>
      
      </tr>
         
         
    </table>    
   </form> 
  <!--<form method="post" name="form_regm" >
   <input type="text" name="fnamem" id="nn" onBlur="validateForm5()"/>  
   <input type="button" name="buttonm" value="获取" onclick="validateForm5()"  />  
  </form>-->
  </td>
 </tr> 
</table>  

</div>
</body>
</html>
