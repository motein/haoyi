<?php
   @session_start();
	require_once('judge_fns.php');
    require_once("pagemethod.php");
	$email=$_POST['email'];
	$username=$_POST['username'];
	$passwd=$_POST['passwd'];
    $passwd2=$_POST['passwd2'];

	

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
	if((strlen($passwd)<6)||(strlen($passwd)>16)){
	throw new Exception('密码必须是6到16位.请返回重新填写。');
	}

	register($username,$email,$passwd);
	

	$_SESSION['valid_user']=$username;

	draw_header();
    draw_menu();
    ?>
	<table width="80%" cellpadding=0 align="center" border="0" bgcolor="white">
	<?php
	sleep(3);
	echo "<script language=javascript>alert('你注册成功了，欢迎继续访问！');location.href='index.php'</script>";
	?>
     </table>
	 <?php
	draw_footer();


	}
	catch(Exception $e){
	draw_header();
    draw_menu();
	  ?>
	<table width="80%" cellpadding=0 align="center" border="0" bgcolor="white">
	<tr>
	<td>
	<?php
	echo $e->getMessage();
	
	?>
	=><a href="reg.php" ><b>返回</b></a>
	</td>
	</tr>
	</table>
	<?php
	draw_footer();
	}
	?>