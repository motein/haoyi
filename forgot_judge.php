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
$email=$_POST['email'];


if(!filled_out($_POST)){
	$e='����д����ȫ���뷵��������д��';
	fg_do_print1($e);
	exit;
}
else if(!valid_email($email)){
	$e='������Ĳ���һ���Ϸ����䡣�뷵��������д��';
	fg_do_print1($e);
	exit;
}
else{
if(!findpw($username,$email)){
  $e="��������û������ڡ��뷵��������д��";
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
