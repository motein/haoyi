<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>������</title>
</head>
<body>
<?php
      require_once('../judge_fns.php');
      if(isset($_GET['username'])){
	      $un=$_GET['username'];
		  
/////////////////////////////////////////////////////////////////////////////////////////////
		   if(!del_ad_f($un)){
			  echo "<script language=javascript>alert('ɾ������Աʧ�ܣ�');location.href='admin.php'</script>";
		     }//��δ���������ɾ���������ϵ��ļ������ݿ��е��ļ���           

            else{
		     echo "<script language=javascript>alert('ɾ������Ա�ɹ���');location.href='admin.php'</script>";
			 }

	  }
	  else {
           
		   echo "<script language=javascript>alert('�����쳣��');location.href='admin.php'</script>";
      }
	  
?>

</body>
</html>
