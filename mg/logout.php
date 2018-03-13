<?php
session_start();
unset($_SESSION['user']);
session_destroy();
echo "<script language=javascript>alert('³É¹¦ÍË³öµÇÂ½£¡');location.href='login.php'</script>";
?>

