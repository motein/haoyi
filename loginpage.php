<?php
@session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>好译网</title>
</head>

<body>
<?php
require_once("pagemethod.php");
require_once("judge_fns.php");//这里主要是用其中检测合法性的方法和连接数据库的方法。



$username=$_POST['username'];
$password=$_POST['password'];
try{
if(!filled_out($_POST)){
	throw new Exception('你填写表单不全。请返回重新填写。');
}
if(!finduser($username,$password)){
    throw new Exception('用户名和密码不匹配。请返回重新填写。');
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
	=><a href="index.php" ><b>返回</b></a>
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
echo "<script language=javascript>alert('你登录成功了，欢迎继续访问！');location.href='index.php'</script>";
draw_footer();
?>
</body>
</html>
