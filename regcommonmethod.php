<?php
function display_info(){
?>
<table width="80%" bgcolor="white" cellpadding="12" border="0" valign="bottom" height="10%" align="center">
	<tr>
		<td>
			<ul>
			<li>��ӭ������������</li>
			<li>������ע����档</li>
			</ul>
		</td>
	</tr>
</table>
<?php
//��������ʵ���Ͻ���Ϣ�ķ�����
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
		��������:
		</td>
		<td align="left">
		<input type="text" size="15px" rows="1" name="email"/>
		</td>
	</tr>
	<tr>
		<td align="left" width="50%">
		�û���<br />
		(����Ϊ��):
		</td>
		<td align="left">
		<input type="text" size="11px" rows="1" name="username"/>
		</td>
	</tr>
	<tr>
		<td align="left" width="50%">
		����<br />
		(6��16λ):
		</td>
		<td align="left">
		<input type="password" size="11px" rows="1" name="passwd"/>
		</td>
	</tr>
	<tr>
		<td align="left" width="50%">
		����ȷ��
		</td>
		<td align="left">
		<input type="password" size="11px" rows="1" name="passwd2"/>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center" width="100%">
		<input type="submit" value="��  ��" width="50%"  style="font-weight:bold;"/>
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
/////////////////������ע��ҳ����
?>
