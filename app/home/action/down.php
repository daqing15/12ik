<?php 
defined('IN_IK') or die('Access Denied.');

$from = $_GET['id'];

$countdown = aac('home')->findCount('downcount');
if($from == 1)
{
	aac('home')->create('downcount',array('userip'=>getIp(),'downfrom'=>'中国站长站','downtime'=>time()));
	header("Location: http://down.chinaz.com/soft/33696.htm");
}
if($from == 2)
{
	aac('home')->create('downcount',array('userip'=>getIp(),'downfrom'=>'本地下载','downtime'=>time()));
	header("Location: http://www.12ik.com/uploadfile/12ik/12ik-v1.0.zip");
}
if($from == 3)
{
	aac('home')->create('downcount',array('userip'=>getIp(),'downfrom'=>'github','downtime'=>time()));
	header("Location: https://github.com/12ik/12ik/archive/master.zip");
}


$title = '爱客网(12IK)源码下载';
include template('down');