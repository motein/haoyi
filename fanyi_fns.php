<?php
function draw_up_table(){
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
	 <td  width="9%"align="left"style="font-size:11pt"><a href="ntrans.php?lan=all&&type=<?php echo $type?>">|ȫ��|</a></td>	 
	 <td width="9%" align="left"style="font-size:11pt"><a href="ntrans.php?lan=eng&&type=<?php echo $type?>">|Ӣ��|</a></td>	 
	 <td  width="9%" align="left"style="font-size:11pt"><a href="ntrans.php?lan=fre&&type=<?php echo $type?>">|����|</a></td>	 
	 <td  width="9%" align="left"style="font-size:11pt"><a href="ntrans.php?lan=jap&&type=<?php echo $type?>">|����|</a></td>	 
	 <td  width="9%" align="left"style="font-size:11pt"><a href="ntrans.php?lan=kor&&type=<?php echo $type?>">|����|</a></td>	
	 <td  width="9%" align="left"style="font-size:11pt"><a href="ntrans.php?lan=rus&&type=<?php echo $type?>">|����|</a></td>
	 <td  width="9%" align="left"style="font-size:11pt"><a href="ntrans.php?lan=ger&&type=<?php echo $type?>">|����|</a></td>
	 <td  width="9%" align="left"style="font-size:11pt"><a href="ntrans.php?lan=ita&&type=<?php echo $type?>">|�������|</a></td>
	 <td  width="9%" align="left"style="font-size:11pt"><a href="ntrans.php?lan=pug&&type=<?php echo $type?>">|��������|</a></td> 
	 <td  width="9%" align="left"style="font-size:11pt"><a href="ntrans.php?lan=els&&type=<?php echo $type?>">|����|</a></td> 
	</tr>
</table>
<table width="80%" bordercolor="#33CC33" style="font-size:9pt" border="1" align="center" cellpadding="1" cellspacing="1" class="tableBorder" bgcolor="#33CC33">
	<tr>
     <td width="10%" align="left"style="font-size:11pt">**���**��</td>	
	 <td width="9%" align="left"style="font-size:11pt"><a href="ntrans.php?lan=<?php echo $lan?>&&type=all">|ȫ��|</a></td>	 
	 <td width="9%" align="left"style="font-size:11pt"><a href="ntrans.php?lan=<?php echo $lan?>&&type=science">|�Ƽ�|</a></td>	 
	 <td width="9%" align="left"style="font-size:11pt"><a href="ntrans.php?lan=<?php echo $lan?>&&type=zhengfa">|���η���|</a></td>	 
	 <td width="9%" align="left"style="font-size:11pt"><a href="ntrans.php?lan=<?php echo $lan?>&&type=xingguan">|��������|</a></td>	 
	 <td width="9%" align="left"style="font-size:11pt"><a href="ntrans.php?lan=<?php echo $lan?>&&type=economics">|����ѧ|</a></td> 
	  <td width="9%" align="left"style="font-size:11pt"><a href="ntrans.php?lan=<?php echo $lan?>&&type=phy">|��ѧ|</a></td> 
	   <td width="9%" align="left"style="font-size:11pt"><a href="ntrans.php?lan=<?php echo $lan?>&&type=poem">|ʫ��ɢ��|</a></td> 
	    <td width="9%" align="left"style="font-size:11pt"><a href="ntrans.php?lan=<?php echo $lan?>&&type=medi">|ҽѧ|</a></td> 
		 <td width="9%" align="left"style="font-size:11pt"><a href="ntrans.php?lan=<?php echo $lan?>&&type=his">|��ʷѧ|</a></td> 
		  <td width="9%" align="left"style="font-size:11pt"><a href="ntrans.php?lan=<?php echo $lan?>&&type=els">|����|</a></td> 
	</tr>
	</table>
<?php
}//�����������ʾ������ѯ��table��


function  draw_all_middle_table(){
if(!isset($_SESSION['valid_user'])){
$name=null;
}
else{
$name=$_SESSION['valid_user'];
}
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
	<?php if(null!=$name){ ?>
	<td width="8%" align="center" nowrap class=forumrow>�����绰</td>
	<td width="8%" align="center" nowrap class=forumrow>�ƶ��绰</td>
	<td width="8%" align="center" nowrap class=forumrow>����</td>
	<?php
	}?>
	<td width="8%" align="center" nowrap class=forumrow>��������</td>
    <td width="8%" align="center" nowrap class=forumrow>��ֹ����</td>
	<?php if(null!=$name){ ?>
	<td width="8%" align="center" nowrap class=forumrow>�ļ�����</td>
	<?php
	}?>
	<td width="8%" align="center" nowrap class=forumrow>�����˱�ע</td>
  </tr>
<?php

}//�������ֻ�ǻ�����ͷ��������ʾ���ݡ�


function draw_all_show_table(){
       if(!isset($_SESSION['valid_user']))
	   {
	     $name=null;
	   }
	   else{
      $name=$_SESSION['valid_user'];
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

$pageout2 .= '<a href="ntrans.php?repage2=1">��ҳ</a>|<a href="ntrans.php?repage2='.($repage2-1).'">��һҳ</a>|';
 
}
if($repage2==$pagecount2||$pagecount2==0){//�����ǰҳ������ҳ��
	$pageout2 .= '��һҳ|βҳ';
}
else{

$pageout2 .=  '<a href="ntrans.php?repage2='.($repage2+1).'">��һҳ</a>|<a href="ntrans.php?repage2='.$pagecount2.'">βҳ</a>';
 
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
    $beizhu=stripslashes($wholerow2[$i]['beizhu']);
	?>
	<script>
	function showoff(){//�������������ʾ�ύ�����µ�ע����Ϣ�������php��Ȼ��ȻǶ�ס�
	var beizhu='<?php echo $beizhu;?>';
	alert(beizhu);
	}</script>
	<?php
	if(null==$name){
	echo "<tr bgcolor=\"#FFFAF0\">
        <td width=\"3%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\">".stripslashes($wholerow2[$i]['Id'])."</td>
		 <td width=\"6%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\">".stripslashes($wholerow2[$i]['yizhong'])."</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\">".stripslashes($wholerow2[$i]['leibei'])."</td>
		 <td width=\"4%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\">".stripslashes($wholerow2[$i]['baojia'])."</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\">".stripslashes($wholerow2[$i]['zishu'])."</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\">".stripslashes($wholerow2[$i]['lianxiren'])."</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\">".stripslashes($wholerow2[$i]['tijiaodate'])."</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\">".stripslashes($wholerow2[$i]['enddate'])."</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\"><a href=\"#\" onclick=\"javascript:showoff();\">������Ϣ</a></td>
   </tr>";
	}
  else{
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
   </tr>";
   }
   }
     echo $pageout2;

}

}//���������������ʾ���еĶ����ķ�����
?>





<?php

function draw_condition_table($type,$lan){
        if(!isset($_SESSION['valid_user']))
	   {
	     $name=null;
	   }
	   else{
      $name=$_SESSION['valid_user'];
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

$pageout2 .= '<a href="ntrans.php?repage2=1">��ҳ</a>|<a href="ntrans.php?repage2='.($repage2-1).'">��һҳ</a>|';
 
}
if($repage2==$pagecount2||$pagecount2==0){//�����ǰҳ������ҳ��
	$pageout2 .= '��һҳ|βҳ';
}
else{

$pageout2 .=  '<a href="ntrans.php?repage2='.($repage2+1).'">��һҳ</a>|<a href="ntrans.php?repage2='.$pagecount2.'">βҳ</a>';
 
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
    $beizhu=stripslashes($wholerow2[$i]['beizhu']);//��ȡId���룬����ɾ����
	
	?>
	<script>
	function showoff(){//�������������ʾ�ύ�����µ�ע����Ϣ�������php��Ȼ��ȻǶ�ס�
	var beizhu='<?php echo $beizhu;?>';
	alert(beizhu);
	}</script>
	<?php
	if(null==$name){
	echo "<tr bgcolor=\"#FFFAF0\">
        <td width=\"3%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\">".stripslashes($wholerow2[$i]['Id'])."</td>
		 <td width=\"6%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\">".stripslashes($wholerow2[$i]['yizhong'])."</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\">".stripslashes($wholerow2[$i]['leibei'])."</td>
		 <td width=\"4%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\">".stripslashes($wholerow2[$i]['baojia'])."</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\">".stripslashes($wholerow2[$i]['zishu'])."</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\">".stripslashes($wholerow2[$i]['lianxiren'])."</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\">".stripslashes($wholerow2[$i]['tijiaodate'])."</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\">".stripslashes($wholerow2[$i]['enddate'])."</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\"><a href=\"#\" onclick=\"javascript:showoff();\">������Ϣ</a></td>
   </tr>";
	}
  else{
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
   </tr>";
   }
   }
     echo $pageout2;

}

}//���������������ʾ���еĶ����ķ�����


function  panduan($type,$lan){
if(((null==$type)&&(null==$lan))||(('all'==$type)&&('all'==$lan))){
$sql="select * from fanyi";
return $sql;
}
else if((null==$type)||('all'==$type)){
     if($lan=='eng'){
	  $sql="select * from fanyi where yizhong='Ӣ����' or yizhong='����Ӣ'";
	   return $sql;
	 }
	 else if($lan=='fre'){
	 $sql="select * from fanyi where yizhong='������' or yizhong='���뷨'";
	  return $sql;
	 }
	 else if($lan=='kor'){
	 $sql="select * from fanyi where yizhong='������' or yizhong='���뺫'";
	  return $sql;
	 }
	 else if($lan=='ita'){
	 $sql="select * from fanyi where yizhong='������' or yizhong='������'";
	  return $sql;
	 }
	 else  if($lan=='jap'){
	 $sql="select * from fanyi where yizhong='������' or yizhong='������'";
	  return $sql;
	 }
	 else if($lan=='rus'){
	 $sql="select * from fanyi where yizhong='������' or yizhong='�����'";
	  return $sql;
	 }
	 else if($lan=='ger'){
	 $sql="select * from fanyi where yizhong='������' or yizhong='�����'";
	  return $sql;
	 }
	 else if($lan=='pug'){
	 $sql="select * from fanyi where yizhong='������' or yizhong='������'";
	  return $sql;
	 }
	 else{
	 $sql="select * from fanyi where yizhong!='������' and yizong!=''������''";
	  return $sql;
	 }
	 
}
else if((null==$lan)||('all'==$lan)){

      if($type=='science'){
	  $sql="select * from fanyi where leibei='��ѧ��������ѧ' or leibei='����ѧ' or leibei='��ѧ'";
	   return $sql;
	 }
	 else if($type=='zhengfa'){
	  $sql="select * from fanyi where leibei='���ɡ�����'";
	   return $sql;
	 }
	 else if($type=='xingguan'){
	  $sql="select * from fanyi where leibei='���̹�������' or leibei='���š�����'";
	   return $sql;
	 }
	 else if($type=='economics'){
	  $sql="select * from fanyi where leibei='���̹�������'";
	   return $sql;
	 }
	 else  if($type=='phy'){
	  $sql="select * from fanyi where leibei='��ѧ������ѧ'";
	   return $sql;
	 }
	 else if($type=='poem'){
	  $sql="select * from fanyi where leibei='ʫ�衢ɢ��'";
	   return $sql;
	 }
	 else if($type=='medi'){
	  $sql="select * from fanyi where leibei='����������ѧ��ҽѧ'";
	   return $sql;
	 }
	 else if($type=='his'){
	 $sql="select * from fanyi where yizhong='��ʷ������ѧ'";
	  return $sql;
	 }
	 else{
	 $sql="select * from fanyi where yizhong='��������'";
	  return $sql;
	 }
	 return $sql;
}


else{
 $sql="select * from fanyi";
 return $sql;
}
}//��������������ǿ��Եõ����ǵ�sql��䡣
?>
