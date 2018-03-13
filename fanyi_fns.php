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
     <td  width="10%" align="left"style="font-size:11pt">**语种**：</td>	 
	 <td  width="9%"align="left"style="font-size:11pt"><a href="ntrans.php?lan=all&&type=<?php echo $type?>">|全部|</a></td>	 
	 <td width="9%" align="left"style="font-size:11pt"><a href="ntrans.php?lan=eng&&type=<?php echo $type?>">|英语|</a></td>	 
	 <td  width="9%" align="left"style="font-size:11pt"><a href="ntrans.php?lan=fre&&type=<?php echo $type?>">|法语|</a></td>	 
	 <td  width="9%" align="left"style="font-size:11pt"><a href="ntrans.php?lan=jap&&type=<?php echo $type?>">|日语|</a></td>	 
	 <td  width="9%" align="left"style="font-size:11pt"><a href="ntrans.php?lan=kor&&type=<?php echo $type?>">|韩语|</a></td>	
	 <td  width="9%" align="left"style="font-size:11pt"><a href="ntrans.php?lan=rus&&type=<?php echo $type?>">|俄语|</a></td>
	 <td  width="9%" align="left"style="font-size:11pt"><a href="ntrans.php?lan=ger&&type=<?php echo $type?>">|德语|</a></td>
	 <td  width="9%" align="left"style="font-size:11pt"><a href="ntrans.php?lan=ita&&type=<?php echo $type?>">|意大利语|</a></td>
	 <td  width="9%" align="left"style="font-size:11pt"><a href="ntrans.php?lan=pug&&type=<?php echo $type?>">|葡萄牙语|</a></td> 
	 <td  width="9%" align="left"style="font-size:11pt"><a href="ntrans.php?lan=els&&type=<?php echo $type?>">|其它|</a></td> 
	</tr>
</table>
<table width="80%" bordercolor="#33CC33" style="font-size:9pt" border="1" align="center" cellpadding="1" cellspacing="1" class="tableBorder" bgcolor="#33CC33">
	<tr>
     <td width="10%" align="left"style="font-size:11pt">**类别**：</td>	
	 <td width="9%" align="left"style="font-size:11pt"><a href="ntrans.php?lan=<?php echo $lan?>&&type=all">|全部|</a></td>	 
	 <td width="9%" align="left"style="font-size:11pt"><a href="ntrans.php?lan=<?php echo $lan?>&&type=science">|科技|</a></td>	 
	 <td width="9%" align="left"style="font-size:11pt"><a href="ntrans.php?lan=<?php echo $lan?>&&type=zhengfa">|政治法律|</a></td>	 
	 <td width="9%" align="left"style="font-size:11pt"><a href="ntrans.php?lan=<?php echo $lan?>&&type=xingguan">|行政管理|</a></td>	 
	 <td width="9%" align="left"style="font-size:11pt"><a href="ntrans.php?lan=<?php echo $lan?>&&type=economics">|经济学|</a></td> 
	  <td width="9%" align="left"style="font-size:11pt"><a href="ntrans.php?lan=<?php echo $lan?>&&type=phy">|哲学|</a></td> 
	   <td width="9%" align="left"style="font-size:11pt"><a href="ntrans.php?lan=<?php echo $lan?>&&type=poem">|诗歌散文|</a></td> 
	    <td width="9%" align="left"style="font-size:11pt"><a href="ntrans.php?lan=<?php echo $lan?>&&type=medi">|医学|</a></td> 
		 <td width="9%" align="left"style="font-size:11pt"><a href="ntrans.php?lan=<?php echo $lan?>&&type=his">|历史学|</a></td> 
		  <td width="9%" align="left"style="font-size:11pt"><a href="ntrans.php?lan=<?php echo $lan?>&&type=els">|其他|</a></td> 
	</tr>
	</table>
<?php
}//这个方法是显示条件查询的table。


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
     <td align="center" class=shadow width="80%"colspan="13" style="font-size:11pt">你找到的记录</td>	 
	</tr>

  <tr>
    <td width="3%" height="22" nowrap class="forumrow">ID</td>
    <td width="6%" align="center" class="forumrow">语种</td>
    <td width="8%" align="center" class=forumrow>类别</td>
	<td width="4%" align="center" nowrap class=forumrow>报价</td>
	<td width="8%" align="center" nowrap class=forumrow>字数</td>
	<td width="8%" align="center" nowrap class=forumrow>联系人</td>
	<?php if(null!=$name){ ?>
	<td width="8%" align="center" nowrap class=forumrow>工作电话</td>
	<td width="8%" align="center" nowrap class=forumrow>移动电话</td>
	<td width="8%" align="center" nowrap class=forumrow>邮箱</td>
	<?php
	}?>
	<td width="8%" align="center" nowrap class=forumrow>发布日期</td>
    <td width="8%" align="center" nowrap class=forumrow>截止日期</td>
	<?php if(null!=$name){ ?>
	<td width="8%" align="center" nowrap class=forumrow>文件下载</td>
	<?php
	}?>
	<td width="8%" align="center" nowrap class=forumrow>发布人备注</td>
  </tr>
<?php

}//这个方法只是画表格的头部，不显示数据。


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

$pagecount2 = ceil($amount2/$pagesize2);//计算有多少页

echo '共找到 '.$pagecount2." 页，".$amount2." 条记录。";

if($repage2>$pagecount2||$repage2==0){
 echo "找不到记录！";
 exit;
}

$pageout2='';
if($repage2==1){
$pageout2 .='首页|上一页';
}
else{

$pageout2 .= '<a href="ntrans.php?repage2=1">首页</a>|<a href="ntrans.php?repage2='.($repage2-1).'">上一页</a>|';
 
}
if($repage2==$pagecount2||$pagecount2==0){//如果当前页等于总页数
	$pageout2 .= '下一页|尾页';
}
else{

$pageout2 .=  '<a href="ntrans.php?repage2='.($repage2+1).'">下一页</a>|<a href="ntrans.php?repage2='.$pagecount2.'">尾页</a>';
 
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
}//放在一个二维数组中
$file_dir2 ="../reg";

for($i=0;$i<$count2;$i++){
    $beizhu=stripslashes($wholerow2[$i]['beizhu']);
	?>
	<script>
	function showoff(){//这个方法用来显示提交者留下的注意信息。很奇怪php居然不然嵌套。
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
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\"><a href=\"#\" onclick=\"javascript:showoff();\">更多信息</a></td>
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
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\"><a href=".$file_dir2."/".$wholerow2[$i]['wenjian'].">下载</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\"><a href=\"#\" onclick=\"javascript:showoff();\">更多信息</a></td>
   </tr>";
   }
   }
     echo $pageout2;

}

}//这个方法是用来显示所有的东西的方法。
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

$pagecount2 = ceil($amount2/$pagesize2);//计算有多少页

echo '共找到 '.$pagecount2." 页，".$amount2." 条记录。";

if($repage2>$pagecount2||$repage2==0){
 echo "找不到记录！";
 exit;
}

$pageout2='';
if($repage2==1){
$pageout2 .='首页|上一页';
}
else{

$pageout2 .= '<a href="ntrans.php?repage2=1">首页</a>|<a href="ntrans.php?repage2='.($repage2-1).'">上一页</a>|';
 
}
if($repage2==$pagecount2||$pagecount2==0){//如果当前页等于总页数
	$pageout2 .= '下一页|尾页';
}
else{

$pageout2 .=  '<a href="ntrans.php?repage2='.($repage2+1).'">下一页</a>|<a href="ntrans.php?repage2='.$pagecount2.'">尾页</a>';
 
}
if($amount2){
$pd=panduan($type,$lan);
$query2=$pd." order by Id limit ".($repage2-1)*($pagesize2).",$pagesize2";
//echo $type."这是传入的两个参数".$lan;
//echo  $query2;
$result2=$conn->query($query2);
$count2=$result2->num_rows;

$row2=$result2->fetch_assoc();
 $wholerow2[0]=$row2;;
for($i=1;$i<$count2;$i++){
$row2=$result2->fetch_assoc();
  $wholerow2[$i]=$row2;
}//放在一个二维数组中
$file_dir2 ="../reg";

for($i=0;$i<$count2;$i++){
    $beizhu=stripslashes($wholerow2[$i]['beizhu']);//获取Id号码，进行删除。
	
	?>
	<script>
	function showoff(){//这个方法用来显示提交者留下的注意信息。很奇怪php居然不然嵌套。
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
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\"><a href=\"#\" onclick=\"javascript:showoff();\">更多信息</a></td>
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
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\"><a href=".$file_dir2."/".$wholerow2[$i]['wenjian'].">下载</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\"><a href=\"#\" onclick=\"javascript:showoff();\">更多信息</a></td>
   </tr>";
   }
   }
     echo $pageout2;

}

}//这个方法是用来显示所有的东西的方法。


function  panduan($type,$lan){
if(((null==$type)&&(null==$lan))||(('all'==$type)&&('all'==$lan))){
$sql="select * from fanyi";
return $sql;
}
else if((null==$type)||('all'==$type)){
     if($lan=='eng'){
	  $sql="select * from fanyi where yizhong='英译中' or yizhong='中译英'";
	   return $sql;
	 }
	 else if($lan=='fre'){
	 $sql="select * from fanyi where yizhong='法译中' or yizhong='中译法'";
	  return $sql;
	 }
	 else if($lan=='kor'){
	 $sql="select * from fanyi where yizhong='韩译中' or yizhong='中译韩'";
	  return $sql;
	 }
	 else if($lan=='ita'){
	 $sql="select * from fanyi where yizhong='意译中' or yizhong='中译意'";
	  return $sql;
	 }
	 else  if($lan=='jap'){
	 $sql="select * from fanyi where yizhong='日译中' or yizhong='中译日'";
	  return $sql;
	 }
	 else if($lan=='rus'){
	 $sql="select * from fanyi where yizhong='俄译中' or yizhong='中译俄'";
	  return $sql;
	 }
	 else if($lan=='ger'){
	 $sql="select * from fanyi where yizhong='德译中' or yizhong='中译德'";
	  return $sql;
	 }
	 else if($lan=='pug'){
	 $sql="select * from fanyi where yizhong='葡译中' or yizhong='中译葡'";
	  return $sql;
	 }
	 else{
	 $sql="select * from fanyi where yizhong!='葡译中' and yizong!=''葡译中''";
	  return $sql;
	 }
	 
}
else if((null==$lan)||('all'==$lan)){

      if($type=='science'){
	  $sql="select * from fanyi where leibei='数学与计算机科学' or leibei='物理学' or leibei='化学'";
	   return $sql;
	 }
	 else if($type=='zhengfa'){
	  $sql="select * from fanyi where leibei='法律、政治'";
	   return $sql;
	 }
	 else if($type=='xingguan'){
	  $sql="select * from fanyi where leibei='工商管理、经济' or leibei='新闻、评论'";
	   return $sql;
	 }
	 else if($type=='economics'){
	  $sql="select * from fanyi where leibei='工商管理、经济'";
	   return $sql;
	 }
	 else  if($type=='phy'){
	  $sql="select * from fanyi where leibei='哲学、心理学'";
	   return $sql;
	 }
	 else if($type=='poem'){
	  $sql="select * from fanyi where leibei='诗歌、散文'";
	   return $sql;
	 }
	 else if($type=='medi'){
	  $sql="select * from fanyi where leibei='生物与生理学、医学'";
	   return $sql;
	 }
	 else if($type=='his'){
	 $sql="select * from fanyi where yizhong='历史、古文学'";
	  return $sql;
	 }
	 else{
	 $sql="select * from fanyi where yizhong='其它类型'";
	  return $sql;
	 }
	 return $sql;
}


else{
 $sql="select * from fanyi";
 return $sql;
}
}//根据这个方法我们可以得到我们的sql语句。
?>
