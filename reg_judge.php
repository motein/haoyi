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
	throw new Exception('�����д���������뷵������.');
	}
	

	if(!valid_email($email)){
		throw new Exception('�������������ַ�Ƿ����뷵������.');
	}

	if($passwd!=$passwd2){
	throw new Exception('�������벻һ�£��뷵��������д.');
	}
	if((strlen($passwd)<6)||(strlen($passwd)>16)){
	throw new Exception('���������6��16λ.�뷵��������д��');
	}

	register($username,$email,$passwd);
	

	$_SESSION['valid_user']=$username;

	draw_header();
    draw_menu();
    ?>
	<table width="80%" cellpadding=0 align="center" border="0" bgcolor="white">
	<?php
	sleep(3);
	echo "<script language=javascript>alert('��ע��ɹ��ˣ���ӭ�������ʣ�');location.href='index.php'</script>";
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
	=><a href="reg.php" ><b>����</b></a>
	</td>
	</tr>
	</table>
	<?php
	draw_footer();
	}
	?>