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
$email=$_POST['email'];


if(!filled_out($_POST)){
	$e='你填写表单不全。请返回重新填写。';
	fg_do_print1($e);
	exit;
}
else if(!valid_email($email)){
	$e='你输入的不是一个合法邮箱。请返回重新填写。';
	fg_do_print1($e);
	exit;
}
else{
if(!findpw($username,$email)){
  $e="你输入的用户不存在。请返回重新填写。";
  fg_do_print1($e);
  exit;
}
else{
  $e=findpw($username,$email);
  fg_do_print2($e);
exit;
}
}

?>
</body>
</html>
