
<?php

function showusername(){

if(!isset($_SESSION['user']))
{
echo "�����û�";
}
else if(!$_SESSION['user']){
echo "�����û�";
}
else{
echo "��ӭ��".$_SESSION['user'];
}
}
function draw_header2(){
@session_start();
?>
<html>
	<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
		<title>������.
		</title>
		
<link href="../style/draw_header.css" rel="stylesheet" type="text/css" />
<script language=javascript>setInterval("tnow.innerHTML=new Date().toLocaleString()+'<br>'+' ����'+'��һ����������'.charAt(new Date().getDay());",1000);
</script>
<script for=window event=onload language=vbscript>
   imagel.filters.item(0).apply()
   imagel.filters.item(0).transition = 12
   imagel.style.visibility = ""
   imagel.filters(0).play(2.0)
</script>
	</head>
<body>
	<table width="80%" cellpadding=0 align="center" border="0" bgcolor="white">
       <div> <img src="../image/good.jpg" border="0" align="left" valign="bottom" height="133" 
width="100" id="imagel" style="visibility:hidden;filter:revealtrans(duration=4.0,transition=23);"/>
</div>

		<div id="header_log_right">&nbsp;&nbsp;������</div>
		<div id="header_right">
		
		   <div>
		   <img src="../image/userhead.png" height="50" width="50"/>
		   </div>
		    <div id="userpos">
			<?php 
		    showusername();
		?>
			</div>
			    <div id="tnow">
		   </div>
		   </div>
	</table>
	
<?php
}//�ϱߵķ���������ʾҳ��ͷ����

function draw_login_table(){
		?>
   <form method="post" action="login_j.php" align="center" name="form5">
   <table width="30%" border="1" cellspacing="1" cellpadding="2"  bordercolor="#00BFFF" style="font-size:9pt" bgcolor="#33CC33" align="center">
   <div align=center>
			<marquee behavior=alternate direction=left scrollAmount=3 width="4%">
				<font face=Webdings>3</font></marquee>
					<marquee scrollAmount=1 direction=left width="2%">| | |</MARQUEE>
		��ӭ��¼
					<marquee scrollAmount=1 direction=right width="2%">| | |</marquee>
					<marquee behavior=alternate direction=right scrollAmount=3 width="4%">
				<font face=Webdings>4</font></marquee>
		</div>
         <tr align="center"> 
	
             <td colspan="2"> 
              <h3 />
              </td>
            </tr>
            <tr> 
              <td align="right" width="34%">�û�����</td>
              <td> 
                <input type="text" name="username" size="14" maxlength="20">
              </td>
            </tr>
            <tr> 
              <td align="right" width="34%">��&nbsp;&nbsp;�룺</td>
              <td> 
                <input type="password" name="password" size="13" maxlength="20">
              </td>
            </tr>
            <tr align="center"> 
              <td colspan="2"> 
                <input type="submit" name="Submit" value="��¼">
                <input type="reset" name="Submit2" value="ȡ��">
              </td>
            </tr>
            <tr>
            <td colspan="2" align="center"><a href="../index.php">��&nbsp;&nbsp;ҳ</a></td>
            </tr>
          </table>
</form>
	<?php
	}//��½����
	
	function choose(){
	?>
	<table width="80%" bordercolor="#33CC33" style="font-size:9pt" border="1" align="center" cellpadding="1" cellspacing="1" class="tableBorder" bgcolor="#33CC33">
 <tr>
     <td  width="10%" align="left"style="font-size:11pt">**����Ա����**��</td>	 
	 <td  width="9%"align="left"style="font-size:11pt"><a href="logout.php">|�˳���½|</a></td>	 
	 <td width="9%" align="left"style="font-size:11pt"><a href="yonghu.php">|��ѯ�û�����|</a></td>	 
	 <td  width="9%" align="left"style="font-size:11pt"><a href="admin.php">|��ѯ����Ա����|</a></td>	 
	 <td  width="9%" align="left"style="font-size:11pt"><a href="addadmin.php">|��ӹ���Ա|</a></td>	
	 <td  width="9%" align="left"style="font-size:11pt"><a href="backstage.php">|�ļ���Ϣ|</a></td> 
	</tr>
</table>
	<?php
	
	}//����Աѡ���������


function draw_up(){
$type='all';
$lan='all';
if(!isset($_GET['lan']))
{
$lan='all';
}
else{
$lan=$_GET['lan'];
}
if(!isset($_GET['type']))
{
$type='all';
}
else{
$type=$_GET['type'];
}
?>
<table width="80%" bordercolor="#33CC33" style="font-size:9pt" border="1" align="center" cellpadding="1" cellspacing="1" class="tableBorder" bgcolor="#33CC33">
 <tr>
     <td  width="10%" align="left"style="font-size:11pt">**����**��</td>	 
	 <td  width="9%"align="left"style="font-size:11pt"><a href="backstage.php?lan=all&&type=<?php echo $type?>">|ȫ��|</a></td>	 
	 <td width="9%" align="left"style="font-size:11pt"><a href="backstage.php?lan=eng&&type=<?php echo $type?>">|Ӣ��|</a></td>	 
	 <td  width="9%" align="left"style="font-size:11pt"><a href="backstage.php?lan=fre&&type=<?php echo $type?>">|����|</a></td>	 
	 <td  width="9%" align="left"style="font-size:11pt"><a href="backstage.php?lan=jap&&type=<?php echo $type?>">|����|</a></td>	 
	 <td  width="9%" align="left"style="font-size:11pt"><a href="backstage.php?lan=kor&&type=<?php echo $type?>">|����|</a></td>	
	 <td  width="9%" align="left"style="font-size:11pt"><a href="backstage.php?lan=rus&&type=<?php echo $type?>">|����|</a></td>
	 <td  width="9%" align="left"style="font-size:11pt"><a href="backstage.php?lan=ger&&type=<?php echo $type?>">|����|</a></td>
	 <td  width="9%" align="left"style="font-size:11pt"><a href="backstage.php?lan=ita&&type=<?php echo $type?>">|�������|</a></td>
	 <td  width="9%" align="left"style="font-size:11pt"><a href="backstage.php?lan=pug&&type=<?php echo $type?>">|��������|</a></td> 
	 <td  width="9%" align="left"style="font-size:11pt"><a href="backstage.php?lan=els&&type=<?php echo $type?>">|����|</a></td> 
	</tr>
</table>
<table width="80%" bordercolor="#33CC33" style="font-size:9pt" border="1" align="center" cellpadding="1" cellspacing="1" class="tableBorder" bgcolor="#33CC33">
	<tr>
     <td width="10%" align="left"style="font-size:11pt">**���**��</td>	
	 <td width="9%" align="left"style="font-size:11pt"><a href="backstage.php?lan=<?php echo $lan?>&&type=all">|ȫ��|</a></td>	 
	 <td width="9%" align="left"style="font-size:11pt"><a href="backstage.php?lan=<?php echo $lan?>&&type=science">|�Ƽ�|</a></td>	 
	 <td width="9%" align="left"style="font-size:11pt"><a href="backstage.php?lan=<?php echo $lan?>&&type=zhengfa">|���η���|</a></td>	 
	 <td width="9%" align="left"style="font-size:11pt"><a href="backstage.php?lan=<?php echo $lan?>&&type=xingguan">|��������|</a></td>	 
	 <td width="9%" align="left"style="font-size:11pt"><a href="backstage.php?lan=<?php echo $lan?>&&type=economics">|����ѧ|</a></td> 
	  <td width="9%" align="left"style="font-size:11pt"><a href="backstage.php?lan=<?php echo $lan?>&&type=phy">|��ѧ|</a></td> 
	   <td width="9%" align="left"style="font-size:11pt"><a href="backstage.php?lan=<?php echo $lan?>&&type=poem">|ʫ��ɢ��|</a></td> 
	    <td width="9%" align="left"style="font-size:11pt"><a href="backstage.php?lan=<?php echo $lan?>&&type=medi">|ҽѧ|</a></td> 
		 <td width="9%" align="left"style="font-size:11pt"><a href="backstage.php?lan=<?php echo $lan?>&&type=his">|��ʷѧ|</a></td> 
		  <td width="9%" align="left"style="font-size:11pt"><a href="backstage.php?lan=<?php echo $lan?>&&type=els">|����|</a></td> 
	</tr>
	</table>
	<table width="80%" bordercolor="#FFFF33" style="font-size:9pt" height="20" border="1" align="center" cellpadding="1" cellspacing="1" class="tableBorder" bgcolor="#33CC33">
	<tr>
	<td>
	</td>
	</tr>
	</table>
<?php
}//�����������ʾ������ѯ��table��


function  draw_all_middle(){
if(!isset($_SESSION['user'])){
$name=null;
}
else{
$name=$_SESSION['user'];
}
if(null!=$name){
?>
<table width="80%" bordercolor="#33CC33" style="font-size:9pt" border="1" align="center" cellpadding="1" cellspacing="1" class="tableBorder" bgcolor="#33CC33">
 <tr>
     <td align="center" class=shadow width="80%"colspan="13" style="font-size:11pt">���ҵ��ļ�¼</td>	 
	</tr>

  <tr>
    <td width="3%" height="22" nowrap class="forumrow">ID</td>
    <td width="6%" align="center" class="forumrow">����</td>
    <td width="8%" align="center" class=forumrow>���</td>
	<td width="4%" align="center" nowrap class=forumrow>����</td>
	<td width="8%" align="center" nowrap class=forumrow>����</td>
	<td width="8%" align="center" nowrap class=forumrow>��ϵ��</td>
	<td width="8%" align="center" nowrap class=forumrow>�����绰</td>
	<td width="8%" align="center" nowrap class=forumrow>�ƶ��绰</td>
	<td width="8%" align="center" nowrap class=forumrow>����</td>
	<td width="8%" align="center" nowrap class=forumrow>��������</td>
    <td width="8%" align="center" nowrap class=forumrow>��ֹ����</td>
	<td width="8%" align="center" nowrap class=forumrow>�ļ�����</td>
	<td width="8%" align="center" nowrap class=forumrow>�����˱�ע</td>
	<td width="8%" align="center" nowrap class=forumrow>ɾ����¼</td>
	<?php
	}?>
  </tr>
<?php

}//�������ֻ�ǻ�����ͷ��������ʾ���ݡ�

	
function draw_all_show(){
     if(!isset($_SESSION['user']))
	   {
	     $name=null;
	   }
	   else{
      $name=$_SESSION['user'];
       }
      if(isset($_GET['repage2'])){
	      $repage2 = intval($_GET['repage2']);
	  }
	  else {
           $repage2=1;
      }

	  $pagesize2=10;

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$conn=c_db_connect();
$sql="select * from fanyi";
$result=$conn->query($sql);
$amount2=$result->num_rows;
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$pagecount2 = ceil($amount2/$pagesize2);//�����ж���ҳ

echo '���ҵ� '.$pagecount2." ҳ��".$amount2." ����¼��";

if($repage2>$pagecount2||$repage2==0){
 echo "�Ҳ�����¼��";
 exit;
}

$pageout2='';
if($repage2==1){
$pageout2 .='��ҳ|��һҳ';
}
else{

$pageout2 .= '<a href="backstage.php?repage2=1">��ҳ</a>|<a href="backstage.php?repage2='.($repage2-1).'">��һҳ</a>|';
 
}
if($repage2==$pagecount2||$pagecount2==0){//�����ǰҳ������ҳ��
	$pageout2 .= '��һҳ|βҳ';
}
else{

$pageout2 .=  '<a href="backstage.php?repage2='.($repage2+1).'">��һҳ</a>|<a href="backstage.php?repage2='.$pagecount2.'">βҳ</a>';
 
}
if($amount2){
$query2="select * from fanyi order by Id limit ".($repage2-1)*($pagesize2).",$pagesize2;";
$result2=$conn->query($query2);
$count2=$result2->num_rows;

$row2=$result2->fetch_assoc();
 $wholerow2[0]=$row2;;
for($i=1;$i<$count2;$i++){
$row2=$result2->fetch_assoc();
  $wholerow2[$i]=$row2;
}//����һ����ά������
$file_dir2 ="../reg";

for($i=0;$i<$count2;$i++){
    $beizhu=stripslashes($wholerow2[$i]['beizhu']);//��ȡId���룬����ɾ����
	
	?>
	<script>
	function showoff(){//�������������ʾ�ύ�����µ�ע����Ϣ�������php��Ȼ��ȻǶ�ס�
	var beizhu='<?php echo $beizhu;?>';
	alert(beizhu);
	}</script>
	<?php
	
  if(null!=$name){
  echo "<tr bgcolor=\"#FFFAF0\">
        <td width=\"3%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\">".stripslashes($wholerow2[$i]['Id'])."</td>
		 <td width=\"6%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\">".stripslashes($wholerow2[$i]['yizhong'])."</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\">".stripslashes($wholerow2[$i]['leibei'])."</td>
		 <td width=\"4%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\">".stripslashes($wholerow2[$i]['baojia'])."</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\">".stripslashes($wholerow2[$i]['zishu'])."</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\">".stripslashes($wholerow2[$i]['lianxiren'])."</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\">".stripslashes($wholerow2[$i]['gphone'])."</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\">".stripslashes($wholerow2[$i]['mphone'])."</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\">".stripslashes($wholerow2[$i]['youxiang'])."</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\">".stripslashes($wholerow2[$i]['tijiaodate'])."</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\">".stripslashes($wholerow2[$i]['enddate'])."</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\"><a href=".$file_dir2."/".$wholerow2[$i]['wenjian'].">����</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\"><a href=\"#\" onclick=\"javascript:showoff();\">������Ϣ</a></td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\"><a href=\"del_j.php?id=$beizhu\">���ɾ��</a></td>
   </tr> ";
   }
   }
     echo $pageout2;

}

}//���������������ʾ���еĶ����ķ�����

function draw_condition($type,$lan){
       if(!isset($_SESSION['user']))
	   {
	     $name=null;
	   }
	   else{
      $name=$_SESSION['user'];
       }
      if(isset($_GET['repage2'])){
	      $repage2 = intval($_GET['repage2']);
	  }
	  else {
           $repage2=1;
      }

	  $pagesize2=10;

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$conn=c_db_connect();
$sql=panduan($type,$lan);

$result=$conn->query($sql);
$amount2=$result->num_rows;
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$pagecount2 = ceil($amount2/$pagesize2);//�����ж���ҳ

echo '���ҵ� '.$pagecount2." ҳ��".$amount2." ����¼��";

if($repage2>$pagecount2||$repage2==0){
 echo "�Ҳ�����¼��";
 exit;
}

$pageout2='';
if($repage2==1){
$pageout2 .='��ҳ|��һҳ';
}
else{

$pageout2 .= '<a href="backstage.php?repage2=1">��ҳ</a>|<a href="backstage.php?repage2='.($repage2-1).'">��һҳ</a>|';
 
}
if($repage2==$pagecount2||$pagecount2==0){//�����ǰҳ������ҳ��
	$pageout2 .= '��һҳ|βҳ';
}
else{

$pageout2 .=  '<a href="backstage.php?repage2='.($repage2+1).'">��һҳ</a>|<a href="backstage.php?repage2='.$pagecount2.'">βҳ</a>';
 
}
if($amount2){
$pd=panduan($type,$lan);
$query2=$pd." order by Id limit ".($repage2-1)*($pagesize2).",$pagesize2";
//echo $type."���Ǵ������������".$lan;
//echo  $query2;
$result2=$conn->query($query2);
$count2=$result2->num_rows;

$row2=$result2->fetch_assoc();
 $wholerow2[0]=$row2;;
for($i=1;$i<$count2;$i++){
$row2=$result2->fetch_assoc();
  $wholerow2[$i]=$row2;
}//����һ����ά������
$file_dir2 ="../reg";

for($i=0;$i<$count2;$i++){
    $beizhu=stripslashes($wholerow2[$i]['beizhu']);
	$id=stripslashes($wholerow2[$i]['Id']);//��ȡId���룬����ɾ����
	?>
	<script>
	function showoff(){//�������������ʾ�ύ�����µ�ע����Ϣ�������php��Ȼ��ȻǶ�ס�
	var beizhu='<?php echo $beizhu;?>';
	alert(beizhu);
	}</script>
	<?php
  if(null!=$name){
  echo "<tr bgcolor=\"#FFFAF0\">
        <td width=\"3%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\">".stripslashes($wholerow2[$i]['Id'])."</td>
		 <td width=\"6%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\">".stripslashes($wholerow2[$i]['yizhong'])."</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\">".stripslashes($wholerow2[$i]['leibei'])."</td>
		 <td width=\"4%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\">".stripslashes($wholerow2[$i]['baojia'])."</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\">".stripslashes($wholerow2[$i]['zishu'])."</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\">".stripslashes($wholerow2[$i]['lianxiren'])."</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\">".stripslashes($wholerow2[$i]['gphone'])."</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\">".stripslashes($wholerow2[$i]['mphone'])."</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\">".stripslashes($wholerow2[$i]['youxiang'])."</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\">".stripslashes($wholerow2[$i]['tijiaodate'])."</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\">".stripslashes($wholerow2[$i]['enddate'])."</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\"><a href=".$file_dir2."/".$wholerow2[$i]['wenjian'].">����</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\"><a href=\"#\" onclick=\"javascript:showoff();\">������Ϣ</a></td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\"><a href=\"del_j.php?id=$id\">���ɾ��</a></td>
   </tr>";
   }
   }
     echo $pageout2;

}

}//���������������ʾ���еĶ����ķ�����
function draw_yh_item(){
if(!isset($_SESSION['user'])){
$name=null;
}
else{
$name=$_SESSION['user'];
}
if(null!=$name){
?>
<table width="80%" bordercolor="#33CC33" height="40" style="font-size:9pt" border="1" align="center" cellpadding="1" cellspacing="1" class="tableBorder" bgcolor="#FFFFFF">
<tr>
<td>
</td>
</tr>
</table>
<table width="40%" bordercolor="#33CC33" style="font-size:9pt" border="1" align="center" cellpadding="1" cellspacing="1" class="tableBorder" bgcolor="#33CC33">
 <tr>
     <td align="center" class=shadow width="40%"colspan="13" style="font-size:11pt">���ҵ����û���¼</td>	 
	</tr>

  <tr>
    <td width="8%" height="22" nowrap class="forumrow">�û���</td>
    <td width="8%" align="center" class="forumrow">����</td>
    <td width="10%" align="center" class=forumrow>����</td>
	<td width="10%" align="center" nowrap class=forumrow>ע��ʱ��</td>
    <td width="8%" align="center" nowrap class=forumrow>ɾ���û�</td>
	<?php
	}
}
function draw_yonghu(){

 if(!isset($_SESSION['user']))
	   {
	     $name=null;
	   }
	   else{
      $name=$_SESSION['user'];
       }
      if(isset($_GET['repage'])){
	      $repage = intval($_GET['repage']);
	  }
	  else {
           $repage=1;
      }

	  $pagesize=10;

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$conn=c_db_connect();
$sql="select * from costumers";
$result=$conn->query($sql);
$amount=$result->num_rows;
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$pagecount = ceil($amount/$pagesize);//�����ж���ҳ

echo '���ҵ� '.$pagecount." ҳ��".$amount." ����¼��";

if($repage>$pagecount||$repage==0){
 echo "�Ҳ�����¼��";
 exit;
}

$pageout='';
if($repage==1){
$pageout .='��ҳ|��һҳ';
}
else{

$pageout.= '<a href="yonghu.php?repage=1">��ҳ</a>|<a href="yonghu.php?repage='.($repage-1).'">��һҳ</a>|';
 
}
if($repage==$pagecount||$pagecount==0){//�����ǰҳ������ҳ��
	$pageout .= '��һҳ|βҳ';
}
else{

$pageout .=  '<a href="yonghu.php?repage='.($repage+1).'">��һҳ</a>|<a href="yonghu.php?repage='.$pagecount.'">βҳ</a>';
 
}
if($amount){
$query="select * from costumers order by rtime limit ".($repage-1)*($pagesize).",$pagesize;";
$result=$conn->query($query);
$count=$result->num_rows;

$row=$result->fetch_assoc();
 $wholerow2[0]=$row;;
for($i=1;$i<$count;$i++){
$row=$result->fetch_assoc();
  $wholerow2[$i]=$row;
}//����һ����ά������
for($i=0;$i<$count;$i++){
	$un=stripslashes($wholerow2[$i]['un']);//��ȡun������ɾ����
  if(null!=$name){
  echo "<tr bgcolor=\"#FFFAF0\">
        <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"left\">".stripslashes($wholerow2[$i]['un'])."</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"left\">".stripslashes($wholerow2[$i]['pw'])."</td>
		 <td width=\"10%\" height=\"22\" nowrap class=\"forumrow\" align=\"left\">".stripslashes($wholerow2[$i]['email'])."</td>
		 <td width=\"10%\" height=\"22\" nowrap class=\"forumrow\" align=\"left\">".stripslashes($wholerow2[$i]['rtime'])."</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\"><a href=\"del_yh_j.php?un=$un\">���ɾ��</a></td>
   </tr> ";
   }
   }
     echo $pageout;

}
}


function draw_ad_item(){
if(!isset($_SESSION['user'])){
$name=null;
}
else{
$name=$_SESSION['user'];
}
if(null!=$name){
?>
<table width="80%" bordercolor="#33CC33" height="40" style="font-size:9pt" border="1" align="center" cellpadding="1" cellspacing="1" class="tableBorder" bgcolor="#FFFFFF">
<tr>
<td>
</td>
</tr>
</table>
<table width="40%" bordercolor="#33CC33" style="font-size:9pt" border="1" align="center" cellpadding="1" cellspacing="1" class="tableBorder" bgcolor="#33CC33">
 <tr>
     <td align="center" class=shadow width="40%"colspan="13" style="font-size:11pt">���ҵ��Ĺ���Ա��¼</td>	 
	</tr>

  <tr>
    <td width="8%" height="22" nowrap class="forumrow">����Ա��</td>
    <td width="8%" align="center" class="forumrow">����</td>
    <td width="10%" align="center" class=forumrow>����</td>
    <td width="8%" align="center" nowrap class=forumrow>ɾ������Ա</td>
	<?php
	}
}


function draw_ad(){

 if(!isset($_SESSION['user']))
	   {
	     $name=null;
	   }
	   else{
      $name=$_SESSION['user'];
       }
      if(isset($_GET['repage'])){
	      $repage = intval($_GET['repage']);
	  }
	  else {
           $repage=1;
      }

	  $pagesize=10;

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$conn=c_db_connect();
$sql="select * from user";
$result=$conn->query($sql);
$amount=$result->num_rows;
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$pagecount = ceil($amount/$pagesize);//�����ж���ҳ

echo '���ҵ� '.$pagecount." ҳ��".$amount." ����¼��";

if($repage>$pagecount||$repage==0){
 echo "�Ҳ�����¼��";
 exit;
}

$pageout='';
if($repage==1){
$pageout .='��ҳ|��һҳ';
}
else{

$pageout.= '<a href="admin.php?repage=1">��ҳ</a>|<a href="admin.php?repage='.($repage-1).'">��һҳ</a>|';
 
}
if($repage==$pagecount||$pagecount==0){//�����ǰҳ������ҳ��
	$pageout .= '��һҳ|βҳ';
}
else{

$pageout .=  '<a href="admin.php?repage='.($repage+1).'">��һҳ</a>|<a href="admin.php?repage='.$pagecount.'">βҳ</a>';
 
}
if($amount){
$query="select * from user limit ".($repage-1)*($pagesize).",$pagesize;";
$result=$conn->query($query);
$count=$result->num_rows;

$row=$result->fetch_assoc();
 $wholerow2[0]=$row;;
for($i=1;$i<$count;$i++){
$row=$result->fetch_assoc();
  $wholerow2[$i]=$row;
}//����һ����ά������
for($i=0;$i<$count;$i++){
	$username=stripslashes($wholerow2[$i]['username']);//��ȡId���룬����ɾ����
	
  if(null!=$name){
  echo "<tr bgcolor=\"#FFFAF0\">
        <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"left\">".stripslashes($wholerow2[$i]['username'])."</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"left\">".stripslashes($wholerow2[$i]['passwd'])."</td>
		 <td width=\"10%\" height=\"22\" nowrap class=\"forumrow\" align=\"left\">".stripslashes($wholerow2[$i]['email'])."</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\"><a href=\"del_ad_j.php?username=$username\">���ɾ��</a></td>
   </tr> ";
   }
   }
     echo $pageout;

}
}


function draw_adad_table(){

?>
   <form method="post" action="adad_j.php" align="center" name="form1">
   <table width="30%" border="1" cellspacing="2" cellpadding="2"  bordercolor="#00BFFF" style="font-size:9pt" bgcolor="#FFFFFF" align="center">
         <tr align="center"> 
	
             <td colspan="2"> 
              <h3 />
              </td>
            </tr>
            <tr> 
              <td align="right" width="34%">�������û�����</td>
              <td> 
                <input type="text" name="username" size="13" maxlength="20">
              </td>
            </tr>
            <tr> 
              <td align="right" width="34%">ȥ�������룺</td>
              <td> 
                <input type="password" name="password" size="13" maxlength="20">
              </td>
            </tr>
			<tr> 
              <td align="right" width="34%">��һ���������룺</td>
              <td> 
                <input type="password" name="password2" size="13" maxlength="20">
              </td>
            </tr>
			<tr> 
              <td align="right" width="34%">����������䣺</td>
              <td> 
                <input type="text" name="youxiang" size="13" maxlength="20">
              </td>
            </tr>
            <tr align="center"> 
              <td colspan="2"> 
                <input type="submit" name="Submit" value="��&nbsp;&nbsp;��" onClick="javascript:return(checkform());">
                <input type="reset" name="Submit2" value="ȡ&nbsp;&nbsp;��">
              </td>
            </tr>
          </table>
</form>
<?php
}
?>

