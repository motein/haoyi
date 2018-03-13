<?php
function display_info(){
?>
<table width="80%" bgcolor="white" cellpadding="12" border="0" valign="bottom" height="10%" align="center">
	<tr>
		<td>
			<ul>
			<li>欢迎来到好译网。</li>
			<li>这里是注册界面。</li>
			</ul>
		</td>
	</tr>
</table>
<?php
//这里是现实左上角消息的方法；
}
function display_reg_form(){
	?>
	
<form method="post" action="reg_judge.php" align="left" name="form1">
<table width="80%" valign="bottom" align="center">
    <tr>
	<td width="60%">
	<table width="50%" bgcolor="#009300" cellpadding="12" border="0" align="left">
	<tr>
		<td align="left" width="50%">
		电子邮箱:
		</td>
		<td align="left">
		<input type="text" size="15px" rows="1" name="email"/>
		</td>
	</tr>
	<tr>
		<td align="left" width="50%">
		用户名<br />
		(不能为空):
		</td>
		<td align="left">
		<input type="text" size="11px" rows="1" name="username"/>
		</td>
	</tr>
	<tr>
		<td align="left" width="50%">
		密码<br />
		(6到16位):
		</td>
		<td align="left">
		<input type="password" size="11px" rows="1" name="passwd"/>
		</td>
	</tr>
	<tr>
		<td align="left" width="50%">
		密码确认
		</td>
		<td align="left">
		<input type="password" size="11px" rows="1" name="passwd2"/>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center" width="100%">
		<input type="submit" value="提  交" width="50%"  style="font-weight:bold;"/>
		</td>
	</tr>
</table>
</td>
     <td width="40%">
	 </td>
</tr>
</table>
</form>
<?php
	}
/////////////////这里是注册页面表格
?>
