<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>������</title>
</head>
<body>
<?php
require_once("../pagemethod.php");
require_once("../judge_fns.php");//������Ҫ�������м��Ϸ��Եķ������������ݿ�ķ�����



$username=$_POST['username'];
$password=$_POST['password'];

try{
if(!filled_out($_POST)){
	throw new Exception('����д����ȫ���뷵��������д��');
}
if(!findadmin($username,$password)){
    throw new Exception('�û��������벻ƥ�䡣�뷵��������д��');
}
}
catch(Exception $e){
	  ?>
	<table width="80%" cellpadding=0 align="center" border="0" bgcolor="white">
	<tr>
	<td>
	<script language="javascript">
	function show(){
	var s='<?php echo $e->getMessage();?>';
	alert(s);
	}
	</script>
	<?php
	echo "<script language=javascript>show();location.href='login.php'</script>";
	
	?>
	</td>
	</tr>
	</table>
	<?php
	exit;
}

$_SESSION['user']=$username;
echo "<script language=javascript>alert('���¼�ɹ��ˣ���ӭ�������ʣ�');location.href='backstage.php'</script>";
draw_footer();
?>
</body>
</html>
