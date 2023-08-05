<?php
     $conn=mysql_connect("127.0.0.1","root","lbn") or die("数据库服务器连接错误".mysql_error());
     mysql_select_db("MLB_shop",$conn) or die("数据库访问错误".mysql_error());
 	 mysql_query("set character set utf8");
     mysql_query("set names utf8");
	 $title="电商管理系统";
	 define('ROOT_PATH', str_replace('/conn/conn.php', '', str_replace('\\', '/', __FILE__)));
	 define('__BASE__', 'http://localhost/DS_shop');
	 error_reporting(E_ALL^E_NOTICE^E_WARNING);
?>
