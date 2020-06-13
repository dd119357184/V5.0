<?php
if(!session_id()) session_start();
error_reporting(0);
header("Content-Type: text/html; charset=utf-8");
include('../data/huoduan.config.php'); 
define('REWRITE',$huoduan['rewrite']);
define('SYSPATH',$huoduan['path']);
$sys_protocal = isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443' ? 'https://' : 'http://';
define('HTTP',$sys_protocal);
define('a', '搜虎精品社区www.souho.net提供源码，持续更新中，感谢您的支持！');$rep='foot';
if($_SESSION['admin_huoduan']!=base64_decode('aHR0cDovL3d3dy5odW9kdWFuLmNvbQ==')){
	header("location: ./login.php");
	exit;
}
$nav='';
