<?php
	function filled_out($form_vars){
	foreach($form_vars as $key=>$value){
		if((!isset($key))||($value=='')){
		return false;
		}
	}
	return true;
}
//���������Ҫ�����������Ƿ���д������
function valid_email($address){
	if(@ereg('^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\.]+$',$address)){
		return true;
	
	}
	else{
		return false;
	}
}
//���������Ҫ����������Ƿ���������ȷ�������ַ��

function valid_number($number){
if(@ereg('^[0-9]',$number)){
		return true;
	}
	else{
		return false;
	}
}//�ж��ַ����ǲ���ȫ�����֡�

function c_db_connect(){
$result=new mysqli('118.145.17.77','pretation','T0H9hWQMkF','pretation');
if(!$result){
	throw new Exception('�����������ݿ������');
	}
	else{
	return $result;
	}
}
//��������������������ݿ��
function select_f($id){
$db=c_db_connect();
$query="select * from fanyi where Id=$id";
$result=mysqli_query($db,$query);
echo "result�������ǣ�".gettype($result);
$row=mysqli_fetch_assoc($result);
if(!$row['wenjian']){
 $file_dir="../reg/lx";
  return $file_dir;
}
$filename=stripslashes($row['wenjian']);
$file_dir="../reg/".$filename;
return $file_dir;
}
//����Ȼ��ɾ�����ݵķ���
function del_f($id){
$db=c_db_connect();
$query="delete from fanyi where Id=$id";
$result=mysqli_query($db,$query);
return $result;
}//��������Ǹ���id��ɾ����¼��
function del_yh_f($un){
$db=c_db_connect();
$query="delete from costumers where un='".$un."'";
$result=mysqli_query($db,$query);
return $result;
}//��������Ǹ����û�����ɾ���û���ע���¼��
function del_ad_f($un){
$db=c_db_connect();
$query="delete from user where username='".$un."'";
$result=mysqli_query($db,$query);
return $result;
}//��������Ǹ��ݹ���Ա����ɾ���û���ע���¼��
function register($username,$email,$password){

$conn=c_db_connect();
$result=$conn->query("select * from costumers where un='".$username."'");
$row=@mysqli_fetch_row($result);
if($row[1]){
	throw new Exception('�û����Ѿ���ע�ᡣ�뷵������ע�ᡣ');
}
$rtime=date("FjSY");//ע���ʱ��Ҳ����

$result1=$conn->query("insert into costumers values('".$username."','".$password."','".$email."','".$rtime."')");
if(!$result1){
	throw new Exception('���ܽ���ע�ᵽ���ݿ�-�����ԡ�');
}
}//���µĿͻ�ע�������ݿ⡣
function register2($username,$email,$password){

$conn=c_db_connect();
$result=$conn->query("select * from user where username='".$username."'");
$row=@mysqli_fetch_row($result);
if($row[1]){
	throw new Exception('�û����Ѿ���ע�ᡣ�뷵������ע�ᡣ');
}

$result1=$conn->query("insert into user values('".$username."','".$password."','".$email."')");
if(!$result1){
	throw new Exception('���ܽ���ע�ᵽ���ݿ�-�����ԡ�');
}
}//���µĹ���Աע�������ݿ⡣


function findpw($username,$email){

$conn=c_db_connect();
$result1=$conn->query("select * from costumers where un='".$username."' and email='".$email."';");
$row=@mysqli_fetch_row($result1);

return $row[1];
 
}//������������������û�����ġ�

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
	=><a href="forgetpw.php" ><b>����</b></a>
	</td>
	</tr>
	</table>
	<?php
    draw_footer();
}//�����룬���ɹ�����ʾ���������롣

function fg_do_print2($e){
   draw_header();
    draw_menu();
	  ?>
	<table width="80%" cellpadding=0 align="center" border="0" bgcolor="white">
	<tr>
	<td>
	<?php
	echo '��������ǣ�'.$e.'�������Ʊ��ܡ�';
	
	?>
	=><a href="index.php" ><b>����</b></a>
	</td>
	</tr>
	</table>
	<?php
    draw_footer();
}//�ҵ����룬��ʾ�����ء�

function finduser($username,$password){
$conn=c_db_connect();
$result=$conn->query("select * from costumers where un='".$username."' and pw='".$password."';");
$row=@mysqli_fetch_row($result);
if(!$row[0]){
return false;
}
return true;
}
//�û���¼����

function send_form($yizhong,$zishu,$leibie,$baojia,$lianxiren,$gphone,$mphone,$wenjian,$youxiang,$enddate,$beizhu,$yonghu,$tijiaodate){
 $conn=c_db_connect();
 $query="insert into fanyi values(null,'".$yizhong."','".$zishu."','".$leibie."','".$baojia."','".$lianxiren."','".$gphone."','".$mphone."','".   $wenjian."','".$youxiang."','".$enddate."','".$beizhu."','".$yonghu."','".$tijiaodate."');";
 echo $query;
 
 $result=$conn->query($query);
 if($result){
echo "���Ѿ��ɹ������ύ�����ݿ⡣";
}
else{
echo "��δ�ɹ������ύ�����ݿ⡣";
}
}
//�������ҷ���ı��ύ�����ݿ��
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
