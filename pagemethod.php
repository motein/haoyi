
<?php


function showusername(){

if(!isset($_SESSION['valid_user']))
{
echo "�����û�";
}
else if(!$_SESSION['valid_user']){
echo "�����û�";
}
else{
echo "��ӭ��".$_SESSION['valid_user'];
}
}
function draw_header(){
@session_start();
?>
<html>
	<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
		<title>������.
		</title>
		
<link href="style/draw_header.css" rel="stylesheet" type="text/css" />
<script language=javascript>setInterval("tnow.innerHTML=new Date().toLocaleString()+'<br>'+' ����'+'��һ����������'.charAt(new Date().getDay());",1000);
</script>
<script for=window event=onload language=vbscript>
   imagel.filters.item(0).apply()
   imagel.filters.item(0).transition = 12
   imagel.style.visibility = ""
   imagel.filters(0).play(2.0)
</script>

	</head>
<body>
	<table width="80%" cellpadding=0 align="center" border="0" bgcolor="white">
       <div> <img src="image/good.jpg" border="0" align="left" valign="bottom" height="133" 
width="100" id="imagel" style="visibility:hidden;filter:revealtrans(duration=4.0,transition=23);"/>
</div>

		<div id="header_log_right">&nbsp;&nbsp;������</div>
		<div id="header_right">
		
		   <div>
		   <img src="image/userhead.png" height="50" width="50"/>
		   </div>
		    <div id="userpos">
			<?php 
		    showusername();
		?>
			</div>
			    <div id="tnow">
		   </div>
		   </div>
	</table>
	
<?php
}//�ϱߵķ���������ʾҳ��ͷ����

function draw_menu(){
?> 
<table width="80%" border="0" align="center">
<hr id="div_line" />
<div id="menuBar">
<div class="menuHeader"><a href="contact_us.php">|��ϵ����|</a></div>
<div class="menuHeader"><a href="pay.php">|���ʽ|</a></div>
<div class="menuHeader"><a href="ntrans.php">|��Ҫ����|</a></div>
<div class="menuHeader"><a href="trans.php">|Ѱ�ҷ���|</a></div>
<div class="menuHeader"><a href="index.php">|��ҳ|</a></div>
</div>
<hr id="div_line" />
	</table>
<?php
		//�ϱ߷���������ʾ�˵�
}

	function draw_left_table(){
	?>
	<table width="80%" valign="top" align="center" border="0" >
		<tr >
			<td width="70%" valign="top" valign="bottom"  height="400" >
			 <table  cellpadding="0" cellspacing="0" border="1"  valign="top" height="100%" width="95%" background="image/intro3.png">
				<tr>
					<td border="2" align="left" valign="top"  >
					<div id="intro">
				��飺<br /><?php
				      require('intro.php');
				     ?>
					 </div>
					</td>
				</tr>
				<tr height="4" align="right">
					<td bgcolor="#ffffff" align="right"><td>
				</tr>
			</table>
		 </td>
<?php
	}
	
	
function draw_right_table(){
		?>
     <td width="30%" valign="center" height="100%" border="1" align="center" bgcolor="#33CC33">

   <form method="post" action="loginpage.php" align="center" name="form1">
   <table width="30%" border="1" cellspacing="2" cellpadding="2"  bordercolor="#00BFFF" style="font-size:9pt" bgcolor="#FFFFFF">
         <tr align="center"> 
	
             <td colspan="2"> 
              <h3 />
              </td>
            </tr>
            <tr> 
              <td align="right" width="34%">�û�����</td>
              <td> 
                <input type="text" name="username" size="13" maxlength="20">
              </td>
            </tr>
            <tr> 
              <td align="right" width="34%">��&nbsp;&nbsp;�룺</td>
              <td> 
                <input type="password" name="password" size="13" maxlength="20">
              </td>
            </tr>
            <tr align="center"> 
              <td colspan="2"> 
                <input type="submit" name="Submit" value="��¼" onClick="javascript:return(checkform());">
                <input type="reset" name="Submit2" value="ȡ��">
              </td>
            </tr>
            <tr align="center">
              <td colspan="2"><a href="forgetpw.php">��������</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="ntrans.php">����Ľ���</a></td>
            </tr>
            <tr>
            <td colspan="2" align="center"><a href="reg.php">ע&nbsp;&nbsp;��</a></td>
            </tr>
          </table>
</form>
     </td>
	</tr>
</table>
	<?php
	}

function draw_footer(){
	?>

<table width="80%" bgcolor="white" cellpadding="0" border="0" height="10%" align="center" valign="top">

	<tr>
		<td align="center">
		<hr id="div_line" />
 <div class="foot">&copy;������.2012</div>
		</td>
	</tr>
</table>
</body>
</html>
<?php

}

function draw_lianxi(){

?>
      <table width="80%"  border="0" cellpadding="0" cellspacing="0" class="99" align="center">
        <tr>
          <td width="2%">&nbsp;</td>
          <td width="98%" valign="top" background="images/new.gif"><p><span class="STYLE46">�����ܹ�˾��ϵ��ʽ��</span><br> 
              <span class="STYLE47"><br>
              �绰 Tel: 010��88370065&nbsp;  88367095<br>
              <br>
              �ֻ���13671128858 <br>
              <br>
���� Fax: 010��68309553 <br>
<br>
E��mail: <a href="mailto:88370065@163.com">88370065@163.com </a><br>
<br>
MSN: <a href="mailto:chaoyilin8@hotmail.com">chaoyilin8@hotmail.com</a> </span><br>
<br>
<span class="STYLE47">QQ: 337156890</span><br>
<span class="STYLE47"><br>
��ַ�� www.supertranslators.com<br> 
<br>
��ַ�����������������������ּ�6��4��<br>
<br>
<strong>����·�߼����ˣ�</strong>��13��19��101�硢102�硢103�硢��4����ͨ106��44��121��335��336��336�졢409  ��423��603��615��650��709��714��712��746��716��800��846��850��816��855��912��93����������վ�³�����<br>
<br>
<strong>������</strong>����2���߸�����վD���� (��ͨ����100��)</span><br>
<br>
          </p>
            </td>
        </tr>
      </table>
<?php
}

function draw_fukuan(){
?>



  <table width="80%" border="0" align="center" cellpadding="0" cellspacing="1"  style="background:#CCC; margin-top:20px;">
    <tr>
      <td width="180" height="25" align="center" bgcolor="#F7F7F7"><strong>������</strong></td>
      <td width="257" height="25" align="center" bgcolor="#F5F5F5"><strong>�����ʺ�</strong></td>
      <td width="89" height="25" align="center" bgcolor="#F7F7F7"><strong>�տ���</strong></td>
      <td width="149" height="25" align="center" bgcolor="#F7F7F7"><strong>��˽���</strong></td>
      </tr>
    <tr>
      <td height="30" align="left" bgcolor="#FFFFFF">&nbsp;ũ�н��뿨</td>
      <td nonht="30" align="left" bgcolor="#FFFFFF">&nbsp;95599 8001 43563 74711</td>
      <td height="30" align="center" bgcolor="#FFFFFF">��ʫ��</td>
      <td height="30" align="left" bgcolor="#FFFFFF"><a href="http://www.abchina.com/cn/" target="_blank"><img src="image/16005I3H-0.jpg" width="127" height="25" /></a></td>
      </tr>
    <tr>
      <td height="30" align="left" bgcolor="#FFFFFF">&nbsp;��������</td>
      <td height="30" align="left" bgcolor="#FFFFFF">&nbsp;62270 0048  00500  63889<br /></td>
      <td height="30" align="center" bgcolor="#FFFFFF">��ʫ��</td>
      <td height="30" align="left" bgcolor="#FFFFFF"><a href="http://www.ccb.com/cn/home/index.html" target="_blank"><img src="image/162P32601-0.jpg" width="127" height="25" /></a></td>
      </tr>
    <tr>
      <td height="30" align="left" bgcolor="#FFFFFF">&nbsp;��������</td>
      <td height="30" align="left" bgcolor="#FFFFFF">&nbsp;62220 20610 00072 0777</td>
      <td height="30" align="center" bgcolor="#FFFFFF">��ʫ��</td>
      <td height="30" align="left" bgcolor="#FFFFFF"><a href="http://www.icbc.com.cn/" target="_blank"><img src="image/162P310J-1.jpg" width="127" height="25" /></a></td>
      </tr>
    <tr>
      <td height="30" align="left" bgcolor="#FFFFFF">&nbsp;�����̿�</td>
      <td height="30" align="left" bgcolor="#FFFFFF">&nbsp;6210 9819 0000 2719 436</td>
      <td height="30" align="center" bgcolor="#FFFFFF">��ʫ��</td>
      <td height="30" align="left" bgcolor="#FFFFFF"><a href="http://www.psbc.com/portal/zh_CN/index.html" target="_blank"><img src="image/162P3L95-2.jpg" width="127" height="25" /></a></td>
      </tr>
    <tr>
      <td height="30" align="left" bgcolor="#FFFFFF">&nbsp;��ͨ����</td>
      <td height="30" align="left" bgcolor="#FFFFFF">&nbsp;62226 01510 00137 6768 </td>
      <td height="30" align="center" bgcolor="#FFFFFF">��ʫ��</td>
      <td height="30" align="left" bgcolor="#FFFFFF"><a href="http://www.bankcomm.com/jh/cn/index.html" target="_blank"><img src="image/162P31R4-3.jpg" width="127" height="25" /></a></td>
      </tr>
	  <tr>
      <td height="30" align="left" bgcolor="#FFFFFF">&nbsp;�й�����</td>
      <td height="30" align="left" bgcolor="#FFFFFF">&nbsp;60138 28412 00057 9478</td>
      <td height="30" align="center" bgcolor="#FFFFFF">��ʫ��</td>
      <td height="30" align="left" bgcolor="#FFFFFF"><a href="http://www.boc.cn/" target="_blank">�����������</a></td>
      </tr>
    <tr>
      <td height="30" align="left" bgcolor="#FFFFFF">&nbsp;֧�������</td>
      <td height="30" align="left" bgcolor="#FFFFFF">&nbsp;abc158188@163.com</td>
      <td height="30" align="center" bgcolor="#FFFFFF">��ʫ��</td>
      <td height="30" align="left" bgcolor="#FFFFFF"><a href="https://www.alipay.com/" target="_blank"><img src="image/162P31R4-4.jpg" width="127" height="25" /></a></td>
      </tr>
	  <tr>
      <td height="30" align="left" bgcolor="#FFFFFF">&nbsp;�Ƹ�ͨ���</td>
      <td height="30" align="left" bgcolor="#FFFFFF">&nbsp;247873603</td>
      <td height="30" align="center" bgcolor="#FFFFFF">��ʫ��</td>
      <td height="30" align="left" bgcolor="#FFFFFF"><a href="https://www.tenpay.com/v2/" target="_blank">�������Ƹ�ͨ</a></td>
      </tr>
  </table>
<?php



}
?>
