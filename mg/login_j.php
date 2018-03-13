<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>好译网</title>
</head>
<body>
<?php
require_once("../pagemethod.php");
require_once("../judge_fns.php");//这里主要是用其中检测合法性的方法和连接数据库的方法。



$username=$_POST['username'];
$password=$_POST['password'];

try{
if(!filled_out($_POST)){
	throw new Exception('你填写表单不全。请返回重新填写。');
}
if(!findadmin($username,$password)){
    throw new Exception('用户名和密码不匹配。请返回重新填写。');
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
echo "<script language=javascript>alert('你登录成功了，欢迎继续访问！');location.href='backstage.php'</script>";
draw_footer();
?>
</body>
</html>
