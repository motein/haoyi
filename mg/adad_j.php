<?php

	require_once('../judge_fns.php');
	require_once('login_fns.php');
	$email=$_POST['youxiang'];
	$username=$_POST['username'];
	$passwd=$_POST['password'];
    $passwd2=$_POST['password2'];

	

	try{
	if(!filled_out($_POST)){
	throw new Exception('�����д���������뷵������.');
	}
	

	if(!valid_email($email)){
		throw new Exception('�������������ַ�Ƿ����뷵������.');
	}

	if($passwd!=$passwd2){
	throw new Exception('�������벻һ�£��뷵��������д.');
	}
	if((strlen($passwd)<3)||(strlen($passwd)>16)){
	throw new Exception('���������3��16λ.�뷵��������д��');
	}

	register2($username,$email,$passwd);
    draw_header2();
    choose();
    ?>
	<table width="80%" cellpadding=0 align="center" border="0" bgcolor="white">
	<?php
	sleep(3);
	echo "<script language=javascript>alert('��ע��ɹ��ˣ���ӭ�������ʣ�');location.href='admin.php'</script>";
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
	=><a href="addadmin.php" ><b>����</b></a>
	</td>
	</tr>
	</table>
	<?php
	}
	?>