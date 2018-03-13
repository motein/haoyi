<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>
<body>
<?php
      require_once('../judge_fns.php');
      if(isset($_GET['id'])){
	      $id=(int)$_GET['id'];
		  
/////////////////////////////////////////////////////////////////////////////////////////////
		   if (!file_exists(select_f($id))){ //检查文件是否存在
             echo "<script language=javascript>alert('文件不存在！');location.href='backstage.php'</script>";
           }
		   else if(!@unlink(select_f($id))||!del_f($id)){
			  echo "<script language=javascript>alert('删除文件失败！');location.href='backstage.php'</script>";
		   }//这段代码是用来删除服务器上的文件和数据库中的文件。           

            else{
		     echo "<script language=javascript>alert('删除文件成功！');location.href='backstage.php'</script>";
			 }

	  }
	  else {
           
		   echo "<script language=javascript>alert('出现异常！');location.href='backstage.php'</script>";
      }
	  
?>

</body>
</html>
