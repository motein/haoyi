<?php
function draw_order_table(){
$name=@$_GET['name'];
?>
<form name="form4" method="post" action="judge_order.php?name=<?php echo urlencode($name)?>" id="form4"enctype="multipart/form-data">

                                <table width="80%"border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top: 10px;">
                                    <tr>
                                        <td align="left" valign="top">
                                                   <ul>
			                                      <li>��ӭ������������</li>
			                                       <li>�����Ǳ��ύ���档</li>
			                                       </ul>
                                             <table width="100%" height="260" border="0" cellpadding="0" cellspacing="0"bgcolor="#33CC33" >
                                                    <tr>
                                                        <td width="58%" align="left" valign="top">
                                                            <table width="100%" height="60" border="0" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td width="33%" align="left">
                                                                           ����
                                                                    </td>
                                                                    <td width="67%" align="left">
                                                                            ����(ѡ��)
                                                                    </td>
                                                                </tr>
																
                                                                <tr>
                                                                    
                                                                    <td align="left">
                                                                        <select name="lgkind" id="kind" class="words">
	<option value="Ӣ����">Ӣ----->��</option>
	
	<option value="������">��----->��</option>
	
	<option value="������">��----->��</option>
	
	<option value="������">��----->��</option>
	
	<option value="������">��----->��</option>

	<option value="������">��----->��</option>

	<option value="������">��----->��</option>

	<option value="������">��----->��</option>

	<option value="-------" disabled="true">-----------------</option>
	
	<option value="����Ӣ">��----->Ӣ</option>
	
	<option value="������">��----->��</option>
	
	<option value="���뺫">��----->��</option>
	
	<option value="�����">��----->��</option>
	
	<option value="������">��----->��</option>
	
	<option value="���뷨">��----->��</option>
	
	<option value="�����">��----->��</option>
	
	<option value="������">��----->��</option>
</select>
                                                                    </td>
																	<td align="left">
                                                                        <input name="words" type="text" id="words" size="20" class="words" />��                                                                     </td>
                                                                </tr>
                                                          </table>
															
															
															
                                         <table width="100%" height="60" border="0" cellpadding="0" cellspacing="0">
										      <tr>
                                                                    <td width="33%" align="left">
                                                                           �������
                                                                    </td>
                                                                    <td width="67%" align="left">
                                                                            ����
                                                                    </td>
                                                                </tr>
                          
                                                                <tr>
                                                                    <td align="left">
                                                                        <select name="leibie" id="leibie" class="leibie">
	<option value="��ѧ��������ѧ">��ѧ��������ѧ</option>
	<option value="���ɡ�����">���ɡ�����</option>
	<option value="��ʷ������ѧ">��ʷ������ѧ</option>
	<option value="����ѧ">����ѧ</option>
	<option value="��ѧ">��ѧ</option>
	<option value="����������ѧ��ҽѧ">����������ѧ��ҽѧ</option>
	<option value="���̹�������">���̹�������</option>
	<option value="��ѧ������ѧ">��ѧ������ѧ</option>
	<option value="���š�����">���š�����</option>
	<option value="ʫ�衢ɢ��">ʫ�衢ɢ��</option>
	<option value="��������">��������</option>
                                                                         </select>
                                                                    </td>
																	<td align="left">
                                                                        <input name="qian" type="text" id="qian" size="20" class="qian" />Ԫ/ǧ��                                                                    <font color="red">*</font> </td>
                                                                </tr>
                                                            </table>
															
															
                                                             <table width="100%" height="60" border="0" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td width="70" align="left">
                                                                        ��ϵ��
                                                                  </td>
                                                                    <td align="left" width="19"></td>
                                                                    <td align="left">
                                                                      �����绰
                                                                    <td width="150" align="left">
                                                                       �ƶ��绰
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
                                                                      �ϴ��ļ�(.txt .doc .docx .pdf)
                                                                    </td>
                                                                    <td width="29%" align="left">
																   �����ַ
                                                                  </td>
                                                                    <td width="31%" align="left">
                                                                       ��ֹ����(��-��-��)
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
                                                                         �ļ�˵��:
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
                                                            <input name="submit1" type="submit" id="submit1" value="�ύ��" method="post"/>
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
	<td align="center"><a href="pay.php?name=<?php echo urlencode($name)?>">Ԥ�涩��</a></td>
	<td align="center"><a href="contact_us.php?name=<?php echo urlencode($name)?>">��ϵ������</a></td>
	</tr>
	</table>
	<?php
	
	}//δ�����Ǹ�table�ķ�����
	
	function do_no_login(){
	?>
	<table width="80%"border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top: 20px;margin-bottom:20px;">
	<tr>
	<td align="center"><a href="index.php">�㻹δ��½�����½����ʡ�</a></td>
	</tr>
	</table>
	<?php
	
	}//δ��½�ĵ��Ǹ�table


function upload_file(){
echo $_FILES['wenjian']['type']."�ļ�����";
 $boolvalue=(('application/octet-stream'==$_FILES['wenjian']['type'])
                    || ("application/pdf" ==$_FILES["wenjian"]["type"])
                    ||("text/plain"==$_FILES["wenjian"]["type"])
					||('application/x-zip-compressed'==$_FILES["wenjian"]["type"]))
					&&($_FILES["wenjian"]["size"] < 32000000);
	if ($boolvalue){
   if($_FILES['wenjian']['error']>0){
     echo '����:';
		switch($_FILES['wenjian']['error']){
			case 1:echo '�ϴ��ļ�����';
			break;

			case 2:echo '�ϴ��ļ�����';
			  break;

			case 3:echo '�ļ�ֻ�в��ֱ����䡣';
			  break;

			case 4:echo '���ļ��ϴ���';
			 break;

			case 5:echo '�ϴ��ļ�ʧ�ܣ�û��ȷ����ʱ�ļ�Ŀ¼��';
			   break;

			case 6:echo '�ϴ��ļ�ʧ�ܣ�����д�����̡�';
				break;

			case 7:echo '�����ϴ��ļ������ֵ��';
			  break;

		                                       }
		    echo '����δ֪����';
			exit;
	                                     }
   else{
	  $upfile='reg';
      
	 if (file_exists($upfile))
    {
      echo "�ļ��Ѵ��ڡ���������������ļ���";
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
			 echo '���ܽ��ļ�ת�Ƶ�ָ���ļ����ڡ�';
			 exit;
			 }
	    }
			 
      else{
              echo '����:�����ļ��ϴ���ͻ���ļ�����';
               echo $_FILES['wenjian']['name'];
               exit;
           }
	   echo "�ϴ��ļ��ɹ���";
    
  }
  }
  
  }
else
  {
  echo "���ϴ����ļ���ʽ���Ϸ���";
  
  }

	
	}//�ϴ��ļ��ķ�����
	?>