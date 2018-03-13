<?php

	require_once('../judge_fns.php');
	require_once('login_fns.php');
	$email=$_POST['youxiang'];
	$username=$_POST['username'];
	$passwd=$_POST['password'];
    $passwd2=$_POST['password2'];

	

	try{
	if(!filled_out($_POST)){
	throw new Exception('你表单填写不完整，请返回重填.');
	}
	

	if(!valid_email($email)){
		throw new Exception('你的输入的邮箱地址非法，请返回重填.');
	}

	if($passwd!=$passwd2){
	throw new Exception('两次密码不一致，请返回重新填写.');
	}
	if((strlen($passwd)<3)||(strlen($passwd)>16)){
	throw new Exception('密码必须是3到16位.请返回重新填写。');
	}

	register2($username,$email,$passwd);
    draw_header2();
    choose();
    ?>
	<table width="80%" cellpadding=0 align="center" border="0" bgcolor="white">
	<?php
	sleep(3);
	echo "<script language=javascript>alert('你注册成功了，欢迎继续访问！');location.href='admin.php'</script>";
	?>
     </table>
	 <?php
	}
	catch(Exception $e){
draw_header2();
choose();
	  ?>
	<table width="80%" cellpadding=0 align="center" border="0" bgcolor="white">
	<tr>
	<td>
	<?php
	echo $e->getMessage();
	
	?>
	=><a href="addadmin.php" ><b>返回</b></a>
	</td>
	</tr>
	</table>
	<?php
	}
	?>