<?php
include_once("../conn/conn.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
    <title><?php echo $title;?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style/skin.css" />
</head>
<script language="javascript">
	  function chkinput(form){
	    if(form.name.value==""){
		  alert("请输入用户名!");
		  form.name.select();
		  return(false);
		}
		if(form.pwd.value==""){
		  alert("请输入用户密码!");
		  form.pwd.select();
		  return(false);
		}
		return(true);
	  }
	</script>
    <body>
        <table width="100%">
            <!-- 顶部部分 -->
            <tr height="41"><td colspan="2" >&nbsp;</td></tr>
            <!-- 主体部分 -->
            <!--<tr style="background:url(images/login_bg.jpg) repeat-x;" height="532">-->
            <tr height="532">
                <!-- 主体左部分 -->
                
                <!-- 主体右部分 -->
                <td id="right_cont" align="center">
                    <table height="100%">
                        <tr height="30%"><td colspan="3">&nbsp;</td></tr>
                        <tr>
                            <td width="30%" rowspan="5">&nbsp;</td>
                            <td valign="top" id="form">
                                <form name="form1" method="post" action="chkadmin.php" onSubmit="return chkinput(this)">
                                    <table valign="top" width="100%">
                                        <tr><td colspan="2"><h4 style="letter-spacing:1px;font-size:16px;">电商管理系统后台登录</h4></td></tr>
                                        <tr><td>管理员：</td><td><input type="text" name="name" value="" id="name" /></td></tr>
                                        <tr><td>密&nbsp;&nbsp;&nbsp;&nbsp;码：</td><td><input type="password" name="pwd" value="" id="pwd" /></td></tr>
                                        <tr class="bt" align="center"><td>&nbsp;<input type="submit" value="登陆" /></td><td align="left">&nbsp;<input type="reset" value="重填" /><script language="javascript">
      function change()
      {
          var img =document.getElementById("yzm_num");
          img.src=img.src+'?';
      }
</script></td></tr>
                                    </table>
                                </form>
                            </td>
                            <td rowspan="5">&nbsp;</td>
                        </tr>
                        <tr><td colspan="3">&nbsp;</td></tr>
                    </table>
                </td>
            </tr>
            <!-- 底部部分 -->
            
        </table>
    </body>
</html>