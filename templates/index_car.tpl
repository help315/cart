<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>���ﳵģ��</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>

<body>
<table width="1003" border="0" align="center" cellspacing="0" cellpadding="0">
  <tr>
    <td><div align="center"><img src="images/sy_2.jpg" width="1003" height="75"></div></td>
  </tr>
</table>
<table width="1003" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center"><img src="images/sy_4.jpg" width="825" height="140"></td>
  </tr>
</table>
<table width="1003" border="0" align="center" cellspacing="0" cellpadding="0">
  <tr>
    <td width="89">&nbsp;</td>
    <td width="825"><table width="825" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#D0D0D0">
<tr>
<td align="center" bgcolor="#FFFFFF"><img src="images/sy_8.jpg" width="781" height="25">
  <table width="740" height="81" align="center">
  <tr>
    <td width="740" height="3" colspan="4" bgcolor="#FFFFFF">��Ʒչʾ</td>
   </tr> 
    <tr>     
    <{section name=data loop=$myrow }>   
    <td colspan="4" bgcolor="#FFFFFF">
    <table width="185" height="180" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#3E5D96">
      <tr>
        <td height="120" colspan="2" align="center" bgcolor="#FFFFFF"><img src="head_picture.php?recid=<{$myrow[data].tb_commodity_id}>" width="120" height="135" border="3" style=" border-color:#CCCCCC; margin-top:5px; margin-left:5px; margin-bottom:5px; margin-right:5px;" alt="&lt;{$myrow[data].tb_commodity_explain}&gt;"></td>
      </tr>
      <tr>
        <td width="60" height="20" bgcolor="#FFFFFF">��Ʒ����</td>
        <td width="125" bgcolor="#FFFFFF"><{$myrow[data].tb_commodity_name}></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF">�۸�</td>
        <td bgcolor="#FFFFFF"><{$myrow[data].tb_commodity_price}></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF"><a href="buy_commodity.php?id=<{$myrow[data].tb_commodity_id}>">����</a></td>
        <td bgcolor="#FFFFFF"><a href="shopping_car.php">�鿴���ﳵ</a></td>
      </tr>
    </table>
    </td>
    <{/section}>
     </tr>
</table></td>
</tr>
</table></td>
    <td width="89">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><table width="825" height="25" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
            <tr>
              <td width="483"><div align="left">&nbsp;&nbsp;���б�̴ʵ�&nbsp;<{$total1}>&nbsp;��&nbsp;ÿҳ��ʾ&nbsp;<{$pagesize1}>&nbsp;��&nbsp;��&nbsp;<{$page1}>&nbsp;ҳ/��&nbsp;<{$pagecount1}>&nbsp;ҳ</div></td>
              <td width="342" align="center"><div align="right">

<{if $page1 == 1 }>��ҳ&nbsp;��һҳ<{else}><a href="index.php?pages=1">��ҳ</a>&nbsp;<a href="index.php?pages=<{$page1-1}>" >��һҳ</a><{/if}> &nbsp;<{if $page1 == $pagecount1 }>��һҳ&nbsp;βҳ<{else}><a href="index.php?pages=<{$page1+1}>">��һҳ</a>&nbsp;<a href="index.php?pages=<{$pagecount1}>">βҳ</a><{/if}>

</div></td>            </tr>
</table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><img src="images/sy_21.jpg" width="1003" height="45"></td>
  </tr>
</table>
</body>
</html>
