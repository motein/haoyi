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
require_once('oder_fns.php');
require_once('judge_fns.php');
$yonghu=$_SESSION['valid_user'];
$yizhong=$_POST['lgkind'];
$zishu=$_POST['words'];
$leibie=$_POST['leibie'];
$baojia=$_POST['qian'];
$lianxiren=$_POST['lianxiren'];
$gphone=$_POST['gphone'];
$mphone=$_POST['mphone'];
$youxiang=$_POST['youxiang'];
$enddate=$_POST['endtime'];
$tijiaodate=date("Y-m-d");
$beizhu=$_POST['desc'];
$wenjian=$_FILES['wenjian']['name'];

if((null==$wenjian)||(null==$baojia)||(null==$youxiang)||(null==$enddate)||(null==$lianxiren)){
echo "你未完善表单。请认真填写。";
exit;
}
if(!valid_number($zishu)||!valid_number($baojia)||!valid_number($youxiang)){
echo "请输入数字";
}
if(!valid_email($youxiang)){
echo "你输入的邮箱非法。";
exit;
}

if(null!=$gphone){
if(!valid_number($gphone)){
echo "你输入的不是电话号码。";
exit;
}
}

if(!valid_number($mphone)){
echo "你输入的不是手机号码。";
exit;
}
if(strlen($mphone)!=11){
echo "你输入的手机号位数不对。";
exit;
}
else{
upload_file();
send_form($yizhong,$zishu,$leibie,$baojia,$lianxiren,$gphone,$mphone,$wenjian,$youxiang,$enddate,$beizhu,$yonghu,$tijiaodate);
}

?>
</body>
</html>
