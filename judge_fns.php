<?php
	function filled_out($form_vars){
	foreach($form_vars as $key=>$value){
		if((!isset($key))||($value=='')){
		return false;
		}
	}
	return true;
}
//这个方法主要是用来检测表单是否填写完整。
function valid_email($address){
	if(@ereg('^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\.]+$',$address)){
		return true;
	
	}
	else{
		return false;
	}
}
//这个方法主要是用来检测是否输入了正确的邮箱地址。

function valid_number($number){
if(@ereg('^[0-9]',$number)){
		return true;
	}
	else{
		return false;
	}
}//判断字符串是不是全是数字。

function c_db_connect(){
$result=new mysqli('118.145.17.77','pretation','T0H9hWQMkF','pretation');
if(!$result){
	throw new Exception('不能连接数据库服务器');
	}
	else{
	return $result;
	}
}
//这个方法是用来连接数据库的
function select_f($id){
$db=c_db_connect();
$query="select * from fanyi where Id=$id";
$result=mysqli_query($db,$query);
echo "result的类型是：".gettype($result);
$row=mysqli_fetch_assoc($result);
if(!$row['wenjian']){
 $file_dir="../reg/lx";
  return $file_dir;
}
$filename=stripslashes($row['wenjian']);
$file_dir="../reg/".$filename;
return $file_dir;
}
//遍历然后删除内容的方法
function del_f($id){
$db=c_db_connect();
$query="delete from fanyi where Id=$id";
$result=mysqli_query($db,$query);
return $result;
}//这个方法是根据id来删除记录。
function del_yh_f($un){
$db=c_db_connect();
$query="delete from costumers where un='".$un."'";
$result=mysqli_query($db,$query);
return $result;
}//这个方法是根据用户名来删除用户的注册记录。
function del_ad_f($un){
$db=c_db_connect();
$query="delete from user where username='".$un."'";
$result=mysqli_query($db,$query);
return $result;
}//这个方法是根据管理员名来删除用户的注册记录。
function register($username,$email,$password){

$conn=c_db_connect();
$result=$conn->query("select * from costumers where un='".$username."'");
$row=@mysqli_fetch_row($result);
if($row[1]){
	throw new Exception('用户名已经被注册。请返回重新注册。');
}
$rtime=date("FjSY");//注册的时间也加入

$result1=$conn->query("insert into costumers values('".$username."','".$password."','".$email."','".$rtime."')");
if(!$result1){
	throw new Exception('不能将你注册到数据库-请重试。');
}
}//将新的客户注册如数据库。
function register2($username,$email,$password){

$conn=c_db_connect();
$result=$conn->query("select * from user where username='".$username."'");
$row=@mysqli_fetch_row($result);
if($row[1]){
	throw new Exception('用户名已经被注册。请返回重新注册。');
}

$result1=$conn->query("insert into user values('".$username."','".$password."','".$email."')");
if(!$result1){
	throw new Exception('不能将你注册到数据库-请重试。');
}
}//将新的管理员注册如数据库。


function findpw($username,$email){

$conn=c_db_connect();
$result1=$conn->query("select * from costumers where un='".$username."' and email='".$email."';");
$row=@mysqli_fetch_row($result1);

return $row[1];
 
}//这个方法是用来返回用户密码的。

function fg_do_print1($e){
   draw_header();
    draw_menu();
	  ?>
	<table width="80%" cellpadding=0 align="center" border="0" bgcolor="white">
	<tr>
	<td>
	<?php
	echo $e;
	
	?>
	=><a href="forgetpw.php" ><b>返回</b></a>
	</td>
	</tr>
	</table>
	<?php
    draw_footer();
}//找密码，不成功，显示，重新输入。

function fg_do_print2($e){
   draw_header();
    draw_menu();
	  ?>
	<table width="80%" cellpadding=0 align="center" border="0" bgcolor="white">
	<tr>
	<td>
	<?php
	echo '你的密码是：'.$e.'，请妥善保管。';
	
	?>
	=><a href="index.php" ><b>返回</b></a>
	</td>
	</tr>
	</table>
	<?php
    draw_footer();
}//找到密码，显示，返回。

function finduser($username,$password){
$conn=c_db_connect();
$result=$conn->query("select * from costumers where un='".$username."' and pw='".$password."';");
$row=@mysqli_fetch_row($result);
if(!$row[0]){
return false;
}
return true;
}
//用户登录方法

function send_form($yizhong,$zishu,$leibie,$baojia,$lianxiren,$gphone,$mphone,$wenjian,$youxiang,$enddate,$beizhu,$yonghu,$tijiaodate){
 $conn=c_db_connect();
 $query="insert into fanyi values(null,'".$yizhong."','".$zishu."','".$leibie."','".$baojia."','".$lianxiren."','".$gphone."','".$mphone."','".   $wenjian."','".$youxiang."','".$enddate."','".$beizhu."','".$yonghu."','".$tijiaodate."');";
 echo $query;
 
 $result=$conn->query($query);
 if($result){
echo "你已经成功将表单提交到数据库。";
}
else{
echo "你未成功将表单提交到数据库。";
}
}
//这里是找翻译的表单提交到数据库里。
function findadmin($username,$password){
$conn=c_db_connect();
$result=$conn->query("select * from user where username='".$username."' and passwd='".$password."';");
$row=@mysqli_fetch_row($result);
if(!$row[0]){
return false;
}
return true;
}
?>
