<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>������</title>
</head>
<body>
<?php
      require_once('../judge_fns.php');
      if(isset($_GET['un'])){
	      $un=$_GET['un'];
		  
/////////////////////////////////////////////////////////////////////////////////////////////
		   if(!del_yh_f($un)){
			  echo "<script language=javascript>alert('ɾ���û�ʧ�ܣ�');location.href='yonghu.php'</script>";
		     }//��δ���������ɾ���������ϵ��ļ������ݿ��е��ļ���           

            else{
		     echo "<script language=javascript>alert('ɾ���û��ɹ���');location.href='yonghu.php'</script>";
			 }

	  }
	  else {
           
		   echo "<script language=javascript>alert('�����쳣��');location.href='yonghu.php'</script>";
      }
	  
?>

</body>
</html>
