<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>好译网</title>
</head>
<body>
<?php
      require_once('../judge_fns.php');
      if(isset($_GET['username'])){
	      $un=$_GET['username'];
		  
/////////////////////////////////////////////////////////////////////////////////////////////
		   if(!del_ad_f($un)){
			  echo "<script language=javascript>alert('删除管理员失败！');location.href='admin.php'</script>";
		     }//这段代码是用来删除服务器上的文件和数据库中的文件。           

            else{
		     echo "<script language=javascript>alert('删除管理员成功！');location.href='admin.php'</script>";
			 }

	  }
	  else {
           
		   echo "<script language=javascript>alert('出现异常！');location.href='admin.php'</script>";
      }
	  
?>

</body>
</html>
