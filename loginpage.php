<?php
@session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>������</title>
</head>

<body>
<?php
require_once("pagemethod.php");
require_once("judge_fns.php");//������Ҫ�������м��Ϸ��Եķ������������ݿ�ķ�����



$username=$_POST['username'];
$password=$_POST['password'];
try{
if(!filled_out($_POST)){
	throw new Exception('����д����ȫ���뷵��������д��');
}
if(!finduser($username,$password)){
    throw new Exception('�û��������벻ƥ�䡣�뷵��������д��');
}
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
	=><a href="index.php" ><b>����</b></a>
	</td>
	</tr>
	</table>
	<?php
    draw_footer();
	exit;
}

$_SESSION['valid_user']=$username;
draw_header();
draw_menu();
echo "<script language=javascript>alert('���¼�ɹ��ˣ���ӭ�������ʣ�');location.href='index.php'</script>";
draw_footer();
?>
</body>
</html>
