<?php
include_once("top.php");
?>
<!-- 顶部 --> 
<div id="middle">
     <?php
include_once("left.php");
?>
     <div class="right"  id="mainFrame">
     <div class="right_cont">
   <div class="title_right"><strong>会员管理</strong></div>
   <?php
   $sql=mysql_query("select count(*) as total from usermember",$conn);
	   $info=mysql_fetch_array($sql);
	   $total=$info['total'];
	   if($total==0)
	   {
	   ?>
   <table width="100%" cellPadding="6" bgcolor="#ffffff" class="table table-bordered">
  <tr bgcolor="#ffffff"><td>暂时没有内容</td></tr></table>
   <?php
   }
  else
  {
	  ?>
   <table width="100%" cellPadding="6" bgcolor="#ffffff" class="table table-bordered">
  <tr bgcolor="#ffffff">
    <th height="24">会员名称</th>
    <th width="8%">会员状态</th>
    <th width="10%">注册时间</th>
    <th width="10%">操作</th>
    </tr>
<?php
			$pagesize=20;
		   if ($total<=$pagesize){
		      $pagecount=1;
			} 
			if(($total%$pagesize)!=0){
			   $pagecount=intval($total/$pagesize)+1;
			
			}else{
			   $pagecount=$total/$pagesize;
			
			}
			$page = !empty($_GET['page']) ? trim($_GET['page']) : '';
			if(($page)==""){
			    $page=1;
			
			}else{
			    $page=intval($_GET['page']);
			
			}
             $sql1=mysql_query("select * from usermember order by id desc limit ".($page-1)*$pagesize.",$pagesize ",$conn);
             while($info1=mysql_fetch_array($sql1))
		     {
		  ?>
   <tr align="middle" bgcolor="#FFFFFF" onMouseOut="mOut(this,'#FFFFFF');" onMouseOver="mOvr(this,'#DCF9B9');" style="cursor: default;">
    <td height="25" align="left">&nbsp;<SPAN> <strong><?=$info1['name']?></strong></SPAN>    </TD>
    <td height="25" align="center" style=" color:#F00;"><?php
		    if($info1['dongjie']==0)
			 {
			   echo "未被冻结";
			 }
			 else
			 {
			   echo "已被冻结";
			 }
		  
		  
		  ?></TD>
    <td height="25" align="center"><?=$info1['regtime']?></TD>
    <td align="center"><a href="useredit.php?id=<?=$info1['id']?>">修改状态</a>&nbsp;<a href="?id=<?=$info1['id']?>&action=del" onClick="return confirm('确定要删除吗？')">删除</a></TD>
    </tr>
<?php
	}
?>     
    </table><?php
	}
?>   
<table width="550" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td align="center">本站共&nbsp;
                  <?php
		   echo $total;
		  ?>
&nbsp;条&nbsp;每页显示&nbsp;<?php echo $pagesize;?>&nbsp;条&nbsp;第&nbsp;<?php echo $page;?>&nbsp;页/共&nbsp;<?php echo $pagecount; ?>&nbsp;页
        <a href="?page=1" title="首页">首页</a> <?php if($page>=2){?><a href="?page=<?php echo $page-1;?>" title="前一页">前一页</a><?php } ?>
        <?php if($page+1<=$pagecount){?><a href="?page=<?php echo $page+1;?>" title="后一页">下一页</a><?php }?> <a href="?page=<?php echo $pagecount;?>" title="尾页">尾页</a>
          </td>
        </tr>
      </table>
     </div>     
     </div>
    </div>
    
<!-- 底部 -->
<?php

$action = !empty($_GET['action']) ? trim($_GET['action']) : '';
if($action == 'del')
{
	$id = !empty($_GET['id']) ? intval($_GET['id']) : '';
	mysql_query("delete from usermember where id='".$id."'",$conn);
	echo "<script>alert('删除成功！');location.href='usermember.php';</script>";
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