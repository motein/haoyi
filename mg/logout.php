<?php
session_start();
unset($_SESSION['user']);
session_destroy();
echo "<script language=javascript>alert('�ɹ��˳���½��');location.href='login.php'</script>";
?>

