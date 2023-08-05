<?php
include_once("top.php");
$sql=mysql_query("select * from admin where admin_name='".$_SESSION['sessionname']."'",$conn);
$info=mysql_fetch_array($sql);
?>
<!-- 顶部 -->
<script type="text/javascript"> 
function check(){   
        if(document.form1.username.value==""){
		alert("请输入管理帐号");
		document.form1.username.focus();
		return false;}
	if(document.form1.password.value==""){
		alert("请输入管理密码");
		document.form1.password.focus();
		return false;
	}
	if(document.form1.password2.value==""){
		alert("请输入确认密码");
		document.form1.password2.focus();
		return false;
	}
	if(document.form1.password.value!=document.form1.password2.value){
		alert("两次输入密码不一致");
		document.form1.password2.focus();
		return false;
	}
	
}
</script> 
<div id="middle">
    <?php
include_once("left.php");
?>
    <div class="right"  id="mainFrame">
    <div class="right_cont">
  <div class="title_right"><strong>更改管理员信息</strong></div>
  <table width="100%" border="0" cellpadding="6" cellspacing="0" bgcolor="#BCE8B5" class="table table-bordered">
            <form name="form1" method="post" action="?act=update" onSubmit="return check(this)">
			<tr bgcolor="#FFFFFF">
              <td height="25" colspan="2" align="center" bgcolor="#ffffff"><strong>管理帐号修改</strong></td>
              </tr> <tr bgcolor="#FFFFFF">
              <td width="180" height="35" align="right"><b>管理帐号：</b> </td>
              <td><input type="text" name="username" class="span1-1" value="<?php echo $info['admin_name'];?>" readonly></td>
            </tr>
              <tr bgcolor="#FFFFFF">
              <td height="35" align="right"><b>管理密码：</b> </td>              
              <td><input type="password" name="password" class="span1-1"></td>
            </tr> 
            <tr bgcolor="#FFFFFF">
              <td height="35" align="right"><b>确认密码:</b> </td>
              <td><input type="password" name="password2" class="span1-1"></td>
            </tr> <tr bgcolor="#FFFFFF">
              <td align="right"> </td>
              <td><input type="submit" value="确定" class="btn btn-info " style="width:80px;" onClick="return confirm('确定要修改吗？');"></td>
            </tr></form>
          </table>
    </div>     
    </div>
    </div>
    
<!-- 底部 -->
<?php
$act = !empty($_GET['act']) ? trim($_GET['act']) : '';
if($act == 'update')
{
	$username = !empty($_POST['username']) ? trim($_POST['username']) : '';
	$password2 = !empty($_POST['password2']) ? md5(trim($_POST['password2'])) : '';
	mysql_query("update admin set admin_pwd='$password2'",$conn);
	echo "<script>alert('修改成功！');</script>";
}
include_once("foot.php");
?>
<script>
!function(){
laydate.skin('molv');
laydate({elem: '#Calendar'});
}();
</script>
</body>
</html>