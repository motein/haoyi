<?php
function forget_form(){
	?>
	<table width="80%" bgcolor="white" cellpadding="12" border="0" valign="bottom" height="10%" align="center">
	<tr>
		<td>
			<ul>
			<li>欢迎来到好译网。</li>
			<li>如果你忘记了你的密码，请输入你的用户名和邮箱。</li>
			</ul>
		</td>
	</tr>
</table>

<form method="post" action="forgot_judge.php" align="left" name="form2">
<table width="80%" valign="bottom" align="center">
    <tr>
	<td width="60%">
	<table width="50%" bgcolor="#009300" cellpadding="12" border="0" align="left">
	<tr>
		<td align="left" width="50%">
		用户名:
		</td>
		<td align="left">
		<input type="text" size="15px" rows="1" name="username"/>
		</td>
	</tr>
	<tr>
		<td align="left" width="50%">
		电子邮箱：
		</td>
		<td align="left">
		<input type="text" size="11px" rows="1" name="email"/>
		</td>
	</tr>
	
		<tr>
		<td colspan="2" align="center">
		<input type="submit" value="提  交" />
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
