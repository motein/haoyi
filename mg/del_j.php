<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>
<body>
<?php
      require_once('../judge_fns.php');
      if(isset($_GET['id'])){
	      $id=(int)$_GET['id'];
		  
/////////////////////////////////////////////////////////////////////////////////////////////
		   if (!file_exists(select_f($id))){ //����ļ��Ƿ����
             echo "<script language=javascript>alert('�ļ������ڣ�');location.href='backstage.php'</script>";
           }
		   else if(!@unlink(select_f($id))||!del_f($id)){
			  echo "<script language=javascript>alert('ɾ���ļ�ʧ�ܣ�');location.href='backstage.php'</script>";
		   }//��δ���������ɾ���������ϵ��ļ������ݿ��е��ļ���           

            else{
		     echo "<script language=javascript>alert('ɾ���ļ��ɹ���');location.href='backstage.php'</script>";
			 }

	  }
	  else {
           
		   echo "<script language=javascript>alert('�����쳣��');location.href='backstage.php'</script>";
      }
	  
?>

</body>
</html>
