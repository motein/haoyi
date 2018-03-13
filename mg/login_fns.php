
<?php

function showusername(){

if(!isset($_SESSION['user']))
{
echo "匿名用户";
}
else if(!$_SESSION['user']){
echo "匿名用户";
}
else{
echo "欢迎，".$_SESSION['user'];
}
}
function draw_header2(){
@session_start();
?>
<html>
	<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
		<title>好译网.
		</title>
		
<link href="../style/draw_header.css" rel="stylesheet" type="text/css" />
<script language=javascript>setInterval("tnow.innerHTML=new Date().toLocaleString()+'<br>'+' 星期'+'日一二三四五六'.charAt(new Date().getDay());",1000);
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

		<div id="header_log_right">&nbsp;&nbsp;好译网</div>
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
}//上边的方法用来显示页面头部。

function draw_login_table(){
		?>
   <form method="post" action="login_j.php" align="center" name="form5">
   <table width="30%" border="1" cellspacing="1" cellpadding="2"  bordercolor="#00BFFF" style="font-size:9pt" bgcolor="#33CC33" align="center">
   <div align=center>
			<marquee behavior=alternate direction=left scrollAmount=3 width="4%">
				<font face=Webdings>3</font></marquee>
					<marquee scrollAmount=1 direction=left width="2%">| | |</MARQUEE>
		欢迎登录
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
              <td align="right" width="34%">用户名：</td>
              <td> 
                <input type="text" name="username" size="14" maxlength="20">
              </td>
            </tr>
            <tr> 
              <td align="right" width="34%">密&nbsp;&nbsp;码：</td>
              <td> 
                <input type="password" name="password" size="13" maxlength="20">
              </td>
            </tr>
            <tr align="center"> 
              <td colspan="2"> 
                <input type="submit" name="Submit" value="登录">
                <input type="reset" name="Submit2" value="取消">
              </td>
            </tr>
            <tr>
            <td colspan="2" align="center"><a href="../index.php">主&nbsp;&nbsp;页</a></td>
            </tr>
          </table>
</form>
	<?php
	}//登陆界面
	
	function choose(){
	?>
	<table width="80%" bordercolor="#33CC33" style="font-size:9pt" border="1" align="center" cellpadding="1" cellspacing="1" class="tableBorder" bgcolor="#33CC33">
 <tr>
     <td  width="10%" align="left"style="font-size:11pt">**管理员功能**：</td>	 
	 <td  width="9%"align="left"style="font-size:11pt"><a href="logout.php">|退出登陆|</a></td>	 
	 <td width="9%" align="left"style="font-size:11pt"><a href="yonghu.php">|查询用户名单|</a></td>	 
	 <td  width="9%" align="left"style="font-size:11pt"><a href="admin.php">|查询管理员名单|</a></td>	 
	 <td  width="9%" align="left"style="font-size:11pt"><a href="addadmin.php">|添加管理员|</a></td>	
	 <td  width="9%" align="left"style="font-size:11pt"><a href="backstage.php">|文件信息|</a></td> 
	</tr>
</table>
	<?php
	
	}//管理员选择表单方法。


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
     <td  width="10%" align="left"style="font-size:11pt">**语种**：</td>	 
	 <td  width="9%"align="left"style="font-size:11pt"><a href="backstage.php?lan=all&&type=<?php echo $type?>">|全部|</a></td>	 
	 <td width="9%" align="left"style="font-size:11pt"><a href="backstage.php?lan=eng&&type=<?php echo $type?>">|英语|</a></td>	 
	 <td  width="9%" align="left"style="font-size:11pt"><a href="backstage.php?lan=fre&&type=<?php echo $type?>">|法语|</a></td>	 
	 <td  width="9%" align="left"style="font-size:11pt"><a href="backstage.php?lan=jap&&type=<?php echo $type?>">|日语|</a></td>	 
	 <td  width="9%" align="left"style="font-size:11pt"><a href="backstage.php?lan=kor&&type=<?php echo $type?>">|韩语|</a></td>	
	 <td  width="9%" align="left"style="font-size:11pt"><a href="backstage.php?lan=rus&&type=<?php echo $type?>">|俄语|</a></td>
	 <td  width="9%" align="left"style="font-size:11pt"><a href="backstage.php?lan=ger&&type=<?php echo $type?>">|德语|</a></td>
	 <td  width="9%" align="left"style="font-size:11pt"><a href="backstage.php?lan=ita&&type=<?php echo $type?>">|意大利语|</a></td>
	 <td  width="9%" align="left"style="font-size:11pt"><a href="backstage.php?lan=pug&&type=<?php echo $type?>">|葡萄牙语|</a></td> 
	 <td  width="9%" align="left"style="font-size:11pt"><a href="backstage.php?lan=els&&type=<?php echo $type?>">|其它|</a></td> 
	</tr>
</table>
<table width="80%" bordercolor="#33CC33" style="font-size:9pt" border="1" align="center" cellpadding="1" cellspacing="1" class="tableBorder" bgcolor="#33CC33">
	<tr>
     <td width="10%" align="left"style="font-size:11pt">**类别**：</td>	
	 <td width="9%" align="left"style="font-size:11pt"><a href="backstage.php?lan=<?php echo $lan?>&&type=all">|全部|</a></td>	 
	 <td width="9%" align="left"style="font-size:11pt"><a href="backstage.php?lan=<?php echo $lan?>&&type=science">|科技|</a></td>	 
	 <td width="9%" align="left"style="font-size:11pt"><a href="backstage.php?lan=<?php echo $lan?>&&type=zhengfa">|政治法律|</a></td>	 
	 <td width="9%" align="left"style="font-size:11pt"><a href="backstage.php?lan=<?php echo $lan?>&&type=xingguan">|行政管理|</a></td>	 
	 <td width="9%" align="left"style="font-size:11pt"><a href="backstage.php?lan=<?php echo $lan?>&&type=economics">|经济学|</a></td> 
	  <td width="9%" align="left"style="font-size:11pt"><a href="backstage.php?lan=<?php echo $lan?>&&type=phy">|哲学|</a></td> 
	   <td width="9%" align="left"style="font-size:11pt"><a href="backstage.php?lan=<?php echo $lan?>&&type=poem">|诗歌散文|</a></td> 
	    <td width="9%" align="left"style="font-size:11pt"><a href="backstage.php?lan=<?php echo $lan?>&&type=medi">|医学|</a></td> 
		 <td width="9%" align="left"style="font-size:11pt"><a href="backstage.php?lan=<?php echo $lan?>&&type=his">|历史学|</a></td> 
		  <td width="9%" align="left"style="font-size:11pt"><a href="backstage.php?lan=<?php echo $lan?>&&type=els">|其他|</a></td> 
	</tr>
	</table>
	<table width="80%" bordercolor="#FFFF33" style="font-size:9pt" height="20" border="1" align="center" cellpadding="1" cellspacing="1" class="tableBorder" bgcolor="#33CC33">
	<tr>
	<td>
	</td>
	</tr>
	</table>
<?php
}//这个方法是显示条件查询的table。


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
     <td align="center" class=shadow width="80%"colspan="13" style="font-size:11pt">你找到的记录</td>	 
	</tr>

  <tr>
    <td width="3%" height="22" nowrap class="forumrow">ID</td>
    <td width="6%" align="center" class="forumrow">语种</td>
    <td width="8%" align="center" class=forumrow>类别</td>
	<td width="4%" align="center" nowrap class=forumrow>报价</td>
	<td width="8%" align="center" nowrap class=forumrow>字数</td>
	<td width="8%" align="center" nowrap class=forumrow>联系人</td>
	<td width="8%" align="center" nowrap class=forumrow>工作电话</td>
	<td width="8%" align="center" nowrap class=forumrow>移动电话</td>
	<td width="8%" align="center" nowrap class=forumrow>邮箱</td>
	<td width="8%" align="center" nowrap class=forumrow>发布日期</td>
    <td width="8%" align="center" nowrap class=forumrow>截止日期</td>
	<td width="8%" align="center" nowrap class=forumrow>文件下载</td>
	<td width="8%" align="center" nowrap class=forumrow>发布人备注</td>
	<td width="8%" align="center" nowrap class=forumrow>删除记录</td>
	<?php
	}?>
  </tr>
<?php

}//这个方法只是画表格的头部，不显示数据。

	
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

$pageout2 .= '<a href="backstage.php?repage2=1">首页</a>|<a href="backstage.php?repage2='.($repage2-1).'">上一页</a>|';
 
}
if($repage2==$pagecount2||$pagecount2==0){//如果当前页等于总页数
	$pageout2 .= '下一页|尾页';
}
else{

$pageout2 .=  '<a href="backstage.php?repage2='.($repage2+1).'">下一页</a>|<a href="backstage.php?repage2='.$pagecount2.'">尾页</a>';
 
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
    $beizhu=stripslashes($wholerow2[$i]['beizhu']);//获取Id号码，进行删除。
	
	?>
	<script>
	function showoff(){//这个方法用来显示提交者留下的注意信息。很奇怪php居然不然嵌套。
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
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\"><a href=".$file_dir2."/".$wholerow2[$i]['wenjian'].">下载</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\"><a href=\"#\" onclick=\"javascript:showoff();\">更多信息</a></td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\"><a href=\"del_j.php?id=$beizhu\">点击删除</a></td>
   </tr> ";
   }
   }
     echo $pageout2;

}

}//这个方法是用来显示所有的东西的方法。

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

$pageout2 .= '<a href="backstage.php?repage2=1">首页</a>|<a href="backstage.php?repage2='.($repage2-1).'">上一页</a>|';
 
}
if($repage2==$pagecount2||$pagecount2==0){//如果当前页等于总页数
	$pageout2 .= '下一页|尾页';
}
else{

$pageout2 .=  '<a href="backstage.php?repage2='.($repage2+1).'">下一页</a>|<a href="backstage.php?repage2='.$pagecount2.'">尾页</a>';
 
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
    $beizhu=stripslashes($wholerow2[$i]['beizhu']);
	$id=stripslashes($wholerow2[$i]['Id']);//获取Id号码，进行删除。
	?>
	<script>
	function showoff(){//这个方法用来显示提交者留下的注意信息。很奇怪php居然不然嵌套。
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
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\"><a href=".$file_dir2."/".$wholerow2[$i]['wenjian'].">下载</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\"><a href=\"#\" onclick=\"javascript:showoff();\">更多信息</a></td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\"><a href=\"del_j.php?id=$id\">点击删除</a></td>
   </tr>";
   }
   }
     echo $pageout2;

}

}//这个方法是用来显示所有的东西的方法。
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
     <td align="center" class=shadow width="40%"colspan="13" style="font-size:11pt">你找到的用户记录</td>	 
	</tr>

  <tr>
    <td width="8%" height="22" nowrap class="forumrow">用户名</td>
    <td width="8%" align="center" class="forumrow">密码</td>
    <td width="10%" align="center" class=forumrow>邮箱</td>
	<td width="10%" align="center" nowrap class=forumrow>注册时间</td>
    <td width="8%" align="center" nowrap class=forumrow>删除用户</td>
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

$pagecount = ceil($amount/$pagesize);//计算有多少页

echo '共找到 '.$pagecount." 页，".$amount." 条记录。";

if($repage>$pagecount||$repage==0){
 echo "找不到记录！";
 exit;
}

$pageout='';
if($repage==1){
$pageout .='首页|上一页';
}
else{

$pageout.= '<a href="yonghu.php?repage=1">首页</a>|<a href="yonghu.php?repage='.($repage-1).'">上一页</a>|';
 
}
if($repage==$pagecount||$pagecount==0){//如果当前页等于总页数
	$pageout .= '下一页|尾页';
}
else{

$pageout .=  '<a href="yonghu.php?repage='.($repage+1).'">下一页</a>|<a href="yonghu.php?repage='.$pagecount.'">尾页</a>';
 
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
}//放在一个二维数组中
for($i=0;$i<$count;$i++){
	$un=stripslashes($wholerow2[$i]['un']);//获取un，进行删除。
  if(null!=$name){
  echo "<tr bgcolor=\"#FFFAF0\">
        <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"left\">".stripslashes($wholerow2[$i]['un'])."</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"left\">".stripslashes($wholerow2[$i]['pw'])."</td>
		 <td width=\"10%\" height=\"22\" nowrap class=\"forumrow\" align=\"left\">".stripslashes($wholerow2[$i]['email'])."</td>
		 <td width=\"10%\" height=\"22\" nowrap class=\"forumrow\" align=\"left\">".stripslashes($wholerow2[$i]['rtime'])."</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\"><a href=\"del_yh_j.php?un=$un\">点击删除</a></td>
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
     <td align="center" class=shadow width="40%"colspan="13" style="font-size:11pt">你找到的管理员记录</td>	 
	</tr>

  <tr>
    <td width="8%" height="22" nowrap class="forumrow">管理员名</td>
    <td width="8%" align="center" class="forumrow">密码</td>
    <td width="10%" align="center" class=forumrow>邮箱</td>
    <td width="8%" align="center" nowrap class=forumrow>删除管理员</td>
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

$pagecount = ceil($amount/$pagesize);//计算有多少页

echo '共找到 '.$pagecount." 页，".$amount." 条记录。";

if($repage>$pagecount||$repage==0){
 echo "找不到记录！";
 exit;
}

$pageout='';
if($repage==1){
$pageout .='首页|上一页';
}
else{

$pageout.= '<a href="admin.php?repage=1">首页</a>|<a href="admin.php?repage='.($repage-1).'">上一页</a>|';
 
}
if($repage==$pagecount||$pagecount==0){//如果当前页等于总页数
	$pageout .= '下一页|尾页';
}
else{

$pageout .=  '<a href="admin.php?repage='.($repage+1).'">下一页</a>|<a href="admin.php?repage='.$pagecount.'">尾页</a>';
 
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
}//放在一个二维数组中
for($i=0;$i<$count;$i++){
	$username=stripslashes($wholerow2[$i]['username']);//获取Id号码，进行删除。
	
  if(null!=$name){
  echo "<tr bgcolor=\"#FFFAF0\">
        <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"left\">".stripslashes($wholerow2[$i]['username'])."</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"left\">".stripslashes($wholerow2[$i]['passwd'])."</td>
		 <td width=\"10%\" height=\"22\" nowrap class=\"forumrow\" align=\"left\">".stripslashes($wholerow2[$i]['email'])."</td>
		 <td width=\"8%\" height=\"22\" nowrap class=\"forumrow\" align=\"center\"><a href=\"del_ad_j.php?username=$username\">点击删除</a></td>
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
              <td align="right" width="34%">请输入用户名：</td>
              <td> 
                <input type="text" name="username" size="13" maxlength="20">
              </td>
            </tr>
            <tr> 
              <td align="right" width="34%">去输入密码：</td>
              <td> 
                <input type="password" name="password" size="13" maxlength="20">
              </td>
            </tr>
			<tr> 
              <td align="right" width="34%">再一次输入密码：</td>
              <td> 
                <input type="password" name="password2" size="13" maxlength="20">
              </td>
            </tr>
			<tr> 
              <td align="right" width="34%">输入你的邮箱：</td>
              <td> 
                <input type="text" name="youxiang" size="13" maxlength="20">
              </td>
            </tr>
            <tr align="center"> 
              <td colspan="2"> 
                <input type="submit" name="Submit" value="添&nbsp;&nbsp;加" onClick="javascript:return(checkform());">
                <input type="reset" name="Submit2" value="取&nbsp;&nbsp;消">
              </td>
            </tr>
          </table>
</form>
<?php
}
?>

