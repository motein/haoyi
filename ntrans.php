<?php
@session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>好译网</title>
</head>
<?php
require_once("pagemethod.php");
require_once("fanyi_fns.php");
require_once("judge_fns.php");



draw_header();
draw_menu();
draw_up_table();
if(!isset($_GET['lan'])&&!isset($_GET['type'])){
draw_all_middle_table();
draw_all_show_table();
}
else{
$type=$_GET['type'];
$lan=$_GET['lan'];
draw_all_middle_table();
draw_condition_table($type,$lan);
}
draw_footer();
?>
</body>
</html>
 