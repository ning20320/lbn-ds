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
   <div class="title_right"><strong>评论管理</strong></div>
   <?php
   $sql=mysql_query("select count(*) as total from pinglun",$conn);
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
             $sql1=mysql_query("select * from pinglun order by id desc limit ".($page-1)*$pagesize.",$pagesize ",$conn);
             while($info1=mysql_fetch_array($sql1))
		     {
		  ?>
   <table width="750" border="0" cellpadding="0" cellspacing="0"  bgcolor="#ffffff" class="table table-bordered">
        <tr>
          <td height="30" bgcolor="#ffffff">&nbsp;&nbsp;评论人：<?php 
		     $spid=$info1['userid'];
			 $sql3=mysql_query("select name from usermember where id=".$spid."",$conn);
			 $info3=mysql_fetch_array($sql3);
			 echo $info3['name'];
			
		  ?>&nbsp;&nbsp;评价商品：<?php 
		     $spid=$info1['spid'];
			 $sql2=mysql_query("select mingcheng from shangpin where id=".$spid."",$conn);
			 $info2=mysql_fetch_array($sql2);
			 echo $info2['mingcheng'];
		  ?>&nbsp;&nbsp;发表日期：<?php echo $info1['addtime'];?></td>
          <td width="15%" align="center" bgcolor="#ffffff"> <a href="?id=<?=$info1['id']?>&action=del" onClick="return confirm('确定要删除吗？')">删除</a></td>
        </tr>
        <tr>
          <td colspan="2">
          <div style="margin:10px;">
          <?php echo $info1['content'];?>
          </div>
          </td>
        </tr>
      </table>
<?php
	}
?>   
<table width="550" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td align="center">本站共&nbsp;
                  <?php
		   echo $total;
		  ?>
&nbsp;条&nbsp;每页显示&nbsp;<?php echo $pagesize;?>&nbsp;条&nbsp;第&nbsp;<?php echo $page;?>&nbsp;页/共&nbsp;<?php echo $pagecount; ?>&nbsp;页
        <a href="?page=1" title="首页">首页</a> <?php if($page>=2){?><a href="?page=<?php echo $page-1;?>" title="前一页">前一页</a><?php } ?> <?php if($page+1<=$pagecount){?><a href="?page=<?php echo $page+1;?>" title="后一页">下一页</a><?php }?> <a href="?page=<?php echo $pagecount;?>" title="尾页">尾页</a>
          </td>
        </tr>
      </table><?php
	}
?> 
     </div>     
     </div>
    </div>
    
<!-- 底部 -->
<?php

$action = !empty($_GET['action']) ? trim($_GET['action']) : '';
if($action == 'del')
{
	$id = !empty($_GET['id']) ? intval($_GET['id']) : '';
	mysql_query("delete from pinglun where id='".$id."'",$conn);
	echo "<script>alert('删除成功！');location.href='pinglun.php';</script>";
}
include_once("foot.php");
?>
</body>
</html>