<?php
function draw_order_table(){
$name=@$_GET['name'];
?>
<form name="form4" method="post" action="judge_order.php?name=<?php echo urlencode($name)?>" id="form4"enctype="multipart/form-data">

                                <table width="80%"border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top: 10px;">
                                    <tr>
                                        <td align="left" valign="top">
                                                   <ul>
			                                      <li>欢迎来到好译网。</li>
			                                       <li>这里是表单提交界面。</li>
			                                       </ul>
                                             <table width="100%" height="260" border="0" cellpadding="0" cellspacing="0"bgcolor="#33CC33" >
                                                    <tr>
                                                        <td width="58%" align="left" valign="top">
                                                            <table width="100%" height="60" border="0" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td width="33%" align="left">
                                                                           译种
                                                                    </td>
                                                                    <td width="67%" align="left">
                                                                            字数(选填)
                                                                    </td>
                                                                </tr>
																
                                                                <tr>
                                                                    
                                                                    <td align="left">
                                                                        <select name="lgkind" id="kind" class="words">
	<option value="英译中">英----->中</option>
	
	<option value="日译中">日----->中</option>
	
	<option value="韩译中">韩----->中</option>
	
	<option value="俄译中">俄----->中</option>
	
	<option value="意译中">意----->中</option>

	<option value="法译中">法----->中</option>

	<option value="德译中">德----->中</option>

	<option value="葡译中">葡----->中</option>

	<option value="-------" disabled="true">-----------------</option>
	
	<option value="中译英">中----->英</option>
	
	<option value="中译日">中----->日</option>
	
	<option value="中译韩">中----->韩</option>
	
	<option value="中译俄">中----->俄</option>
	
	<option value="中译意">中----->意</option>
	
	<option value="中译法">中----->法</option>
	
	<option value="中译德">中----->德</option>
	
	<option value="中译葡">中----->葡</option>
</select>
                                                                    </td>
																	<td align="left">
                                                                        <input name="words" type="text" id="words" size="20" class="words" />字                                                                     </td>
                                                                </tr>
                                                          </table>
															
															
															
                                         <table width="100%" height="60" border="0" cellpadding="0" cellspacing="0">
										      <tr>
                                                                    <td width="33%" align="left">
                                                                           文章类别
                                                                    </td>
                                                                    <td width="67%" align="left">
                                                                            报价
                                                                    </td>
                                                                </tr>
                          
                                                                <tr>
                                                                    <td align="left">
                                                                        <select name="leibie" id="leibie" class="leibie">
	<option value="数学与计算机科学">数学与计算机科学</option>
	<option value="法律、政治">法律、政治</option>
	<option value="历史、古文学">历史、古文学</option>
	<option value="物理学">物理学</option>
	<option value="化学">化学</option>
	<option value="生物与生理学、医学">生物与生理学、医学</option>
	<option value="工商管理、经济">工商管理、经济</option>
	<option value="哲学、心理学">哲学、心理学</option>
	<option value="新闻、评论">新闻、评论</option>
	<option value="诗歌、散文">诗歌、散文</option>
	<option value="其它类型">其它类型</option>
                                                                         </select>
                                                                    </td>
																	<td align="left">
                                                                        <input name="qian" type="text" id="qian" size="20" class="qian" />元/千字                                                                    <font color="red">*</font> </td>
                                                                </tr>
                                                            </table>
															
															
                                                             <table width="100%" height="60" border="0" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td width="70" align="left">
                                                                        联系人
                                                                  </td>
                                                                    <td align="left" width="19"></td>
                                                                    <td align="left">
                                                                      工作电话
                                                                    <td width="150" align="left">
                                                                       移动电话
                                                                  </td>
                                                                </tr>
                                                                <tr>
                                                                    <td align="left">
                                                                   <input name="lianxiren" type="text" id="lianxiren" size="19" class="lianxiren" />
                                                                    </td>
																	<td></td>
                                                                    <td align=left">
                                                                  <input name="gphone" type="text" id="gphone" size="20" class="gphone" /></td>
																  
                                                                    <td align="left">
                                                                        <input name="mphone" type="text" id="mphone" size="20" class="mphone" />
																		<font color="red">*</font>
																	</td>
                                                                </tr>
                                                             </table>
															
                                                            <table width="100%" height="60" border="0" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td width="40%" align="left">
                                                                      上传文件(.txt .doc .docx .pdf)
                                                                    </td>
                                                                    <td width="29%" align="left">
																   邮箱地址
                                                                  </td>
                                                                    <td width="31%" align="left">
                                                                       截止日期(年-月-日)
                                                                  </td>
                                                                </tr>
                                                                <tr>
                                                                    <td align="left">
                                                                        <input  type="file" name="wenjian" id="wenjian" class="wenjian" />
																		<font  color="red">*</font></td>
																		
                                                                    <td align="left">
                                                                        <input name="youxiang" type="text" id="youxiang" size="20" class="youxiang" />                                                                 <font color="red">*</td>
                                                                    <td align="left">
                                                                        <input name="endtime" type="text" id="endtime" size="20" class="endtime" />                                                                  <font  color="red">*</font></td>
                                                                </tr>
                                                            </table>
															                   </td>
																			   
                                                        <td width="42%" align="center" valign="top">
                                                            <table border="0" cellspacing="0" cellpadding="0" height="240">
                                                                <tr>
                                                                    <td align="center">
                                                                        <table width="90%" border="0" cellpadding="0" cellspacing="0">
                                                                            <tr>
                                                                                <td height="30" align="left">
                                                                         文件说明:
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td height="170" align="center" valign="top">
                                                                <textarea name="desc" id="desc" cols="50" rows="12" class="desc"></textarea>
																        </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                              
                                                </table>
                   
                        </td>
                    </tr>
      
                </table>
				</td>
                    </tr>
      
                </table>
				 <table width="80%" border="0" cellpadding="0" cellspacing="0" bgcolor="#33CC33" align="center" >
                                                        <td align="center">
                                                            <input name="submit1" type="submit" id="submit1" value="提交表单" method="post"/>
															</td>
                                                    </tr>
                                                </table>
                
    </form>
	<?php
	}
	
	function do_fukuan(){
	$name=@$_GET['name'];
	?>
	<table width="80%"border="0" bgcolor="#33CC33" height="30" align="center" cellpadding="0" cellspacing="0" style="margin-top: 0px;margin-bottom:20px;">
	<tr><hr id="div_line" />
	<td align="center"><a href="pay.php?name=<?php echo urlencode($name)?>">预存订金</a></td>
	<td align="center"><a href="contact_us.php?name=<?php echo urlencode($name)?>">联系好译网</a></td>
	</tr>
	</table>
	<?php
	
	}//未付款那个table的方法。
	
	function do_no_login(){
	?>
	<table width="80%"border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top: 20px;margin-bottom:20px;">
	<tr>
	<td align="center"><a href="index.php">你还未登陆，请登陆后访问。</a></td>
	</tr>
	</table>
	<?php
	
	}//未登陆的的那个table


function upload_file(){
echo $_FILES['wenjian']['type']."文件类型";
 $boolvalue=(('application/octet-stream'==$_FILES['wenjian']['type'])
                    || ("application/pdf" ==$_FILES["wenjian"]["type"])
                    ||("text/plain"==$_FILES["wenjian"]["type"])
					||('application/x-zip-compressed'==$_FILES["wenjian"]["type"]))
					&&($_FILES["wenjian"]["size"] < 32000000);
	if ($boolvalue){
   if($_FILES['wenjian']['error']>0){
     echo '错误:';
		switch($_FILES['wenjian']['error']){
			case 1:echo '上传文件过大。';
			break;

			case 2:echo '上传文件过大。';
			  break;

			case 3:echo '文件只有部分被传输。';
			  break;

			case 4:echo '无文件上传。';
			 break;

			case 5:echo '上传文件失败：没有确定临时文件目录。';
			   break;

			case 6:echo '上传文件失败：不能写到磁盘。';
				break;

			case 7:echo '超过上传文件的最大值。';
			  break;

		                                       }
		    echo '出现未知错误。';
			exit;
	                                     }
   else{
	  $upfile='reg';
      
	 if (file_exists($upfile))
    {
      echo "文件已存在。请重新命名你的文件。";
    }
      else
	{  
      if(is_uploaded_file($_FILES['wenjian']['tmp_name']))
       {
	        $Temp_Name=$_FILES['wenjian']['name'];
			$File_Name = date("YmdHis").substr($Temp_Name,strrpos($Temp_Name,".")); 
			$File_Path = $upfile.'/'.$File_Name; 
		      if(!move_uploaded_file($_FILES['wenjian']['tmp_name'],$File_Path))
			{
			 echo '不能将文件转移到指定文件夹内。';
			 exit;
			 }
	    }
			 
      else{
              echo '错误:可能文件上传冲突。文件名：';
               echo $_FILES['wenjian']['name'];
               exit;
           }
	   echo "上传文件成功。";
    
  }
  }
  
  }
else
  {
  echo "你上传的文件格式不合法！";
  
  }

	
	}//上传文件的方法。
	?>