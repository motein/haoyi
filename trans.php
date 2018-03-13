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
require_once("pagemethod.php");
require_once("oder_fns.php");
draw_header();
draw_menu();
$name=@$_SESSION['valid_user'];
if(null==$name){
do_no_login();

}
else{
draw_order_table();
}
do_fukuan();
draw_footer();
?>
</body>
</html>
